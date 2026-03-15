/* resources/js/app.js */
document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("zoomViewport");
  const layer = document.getElementById("zoomLayer");
  const resetBtn = document.getElementById("zoomReset");
  const grid = document.getElementById("mapGrid");
  const builder = document.getElementById("mapBuilder");
  const floorSelect = document.getElementById("floorSelect");

  // DESCRIPTION elements
  const descNameEl = document.getElementById("roomDescName");
  const descTextEl = document.getElementById("roomDescText");

  if (!viewport || !layer || !builder) return;

  const DEFAULT_DESC = "Tap any room box on the map to see its description here.";

  const setDescription = (name, desc) => {
    if (descNameEl) descNameEl.textContent = name || "";
    if (descTextEl) descTextEl.textContent = (desc || "").trim() || DEFAULT_DESC;
  };

  setDescription("", DEFAULT_DESC);

  // Zoom/Pan values
  let scale = 1;
  let originX = 0;
  let originY = 0;

  const MAX = 3.0;
  const ZOOM_SPEED = 0.0015;
  const GRID_BASE = 26;
  const EXTRA_UNZOOM = 0.12;
  let MIN = 0.2;
  const PAN_MARGIN = 12;

  let currentFloor = floorSelect ? floorSelect.value : "1F";
  let crossFloorTimer = null;

  // SAVE ROUTE PER FLOOR
  const floorRoutes = {
    "1F": null,
    "2F": null,
    "3F": null,
    "4F": null,
  };

  const clamp = (v, min, max) => Math.min(max, Math.max(min, v));

  const updateGrid = () => {
    if (!grid) return;
    const size = GRID_BASE * scale;
    grid.style.backgroundSize = `${size}px ${size}px`;
    grid.style.backgroundPosition = `${originX}px ${originY}px`;
  };

  const apply = () => {
    layer.style.transform = `translate(${originX}px, ${originY}px) scale(${scale})`;
    updateGrid();
  };

  const clampPan = () => {
    const vW = viewport.clientWidth;
    const vH = viewport.clientHeight;

    const bRect = builder.getBoundingClientRect();
    const vRect = viewport.getBoundingClientRect();

    const mapW = bRect.width;
    const mapH = bRect.height;

    if (mapW <= vW - PAN_MARGIN * 2) {
      originX += (vRect.left + vW / 2) - (bRect.left + mapW / 2);
    } else {
      const leftLimit = vRect.left + PAN_MARGIN;
      const rightLimit = vRect.right - PAN_MARGIN;

      if (bRect.left > leftLimit) originX -= (bRect.left - leftLimit);
      if (bRect.right < rightLimit) originX += (rightLimit - bRect.right);
    }

    if (mapH <= vH - PAN_MARGIN * 2) {
      originY += (vRect.top + vH / 2) - (bRect.top + mapH / 2);
    } else {
      const topLimit = vRect.top + PAN_MARGIN;
      const bottomLimit = vRect.bottom - PAN_MARGIN;

      if (bRect.top > topLimit) originY -= (bRect.top - topLimit);
      if (bRect.bottom < bottomLimit) originY += (bottomLimit - bRect.bottom);
    }
  };

  const applyAndClamp = () => {
    apply();
    clampPan();
    apply();
  };

  const getFitScale = () => {
    const padding = 10;
    const vW = viewport.clientWidth - padding;
    const vH = viewport.clientHeight - padding;

    const prevScale = scale;
    const prevX = originX;
    const prevY = originY;

    scale = 1;
    originX = 0;
    originY = 0;
    apply();

    const bRect = builder.getBoundingClientRect();

    if (bRect.width === 0 || bRect.height === 0) {
      scale = prevScale;
      originX = prevX;
      originY = prevY;
      apply();
      return 1;
    }

    const fit = Math.min(vW / bRect.width, vH / bRect.height);

    scale = prevScale;
    originX = prevX;
    originY = prevY;
    apply();

    return fit;
  };

  const resetView = () => {
    scale = 1;
    originX = 0;
    originY = 0;
    apply();

    requestAnimationFrame(() => {
      const fitScale = getFitScale();
      MIN = fitScale * (1 - EXTRA_UNZOOM);
      scale = clamp(fitScale, MIN, MAX);
      applyAndClamp();
    });
  };

  const clearPath = () => {
    const pathGroup = document.getElementById("path-group");
    if (pathGroup) pathGroup.innerHTML = "";
  };

  const clearSelectionOnly = () => {
    document.querySelectorAll(".room.is-selected").forEach((el) => el.classList.remove("is-selected"));
    document.querySelectorAll(".room.room-click").forEach((el) => el.classList.remove("room-click"));
  };

  const clearAllRoutes = () => {
    floorRoutes["1F"] = null;
    floorRoutes["2F"] = null;
    floorRoutes["3F"] = null;
    floorRoutes["4F"] = null;
    clearSelectionOnly();
    clearPath();
    setDescription("", DEFAULT_DESC);
  };

  const clearOtherFloorRoutes = (keepFloor) => {
    Object.keys(floorRoutes).forEach((floor) => {
      if (floor !== keepFloor) {
        floorRoutes[floor] = null;
      }
    });
  };

  const renderFloor = (floor) => {
    const tpl = document.getElementById(`tpl-${floor}`);
    if (!tpl) return;

    builder.innerHTML = tpl.innerHTML;

    builder.classList.remove("floor-1", "floor-2", "floor-3", "floor-4");
    builder.classList.add(`floor-${floor.replace("F", "")}`);

    currentFloor = floor;

    requestAnimationFrame(() => {
      resetView();
      requestAnimationFrame(() => {
        redrawSavedRouteForCurrentFloor();
      });
    });
  };

  const cancelCrossFloorRoute = () => {
    if (crossFloorTimer) {
      clearTimeout(crossFloorTimer);
      crossFloorTimer = null;
    }
  };

  // -------------------------------------------------
  // STAIR ROUTING CONFIG
  // -------------------------------------------------
const FLOOR1_STAIR_TARGETS = {
  left: {
    name: "Stairs to 2nd Floor (West)",
    desc: "Go to the left stairs to continue to Floor 2.",
    colStart: "20",
    colEnd: "47",
    rowStart: "89",
    rowEnd: "84",
    startX: "53.8",
    startY: "92",
    corridorY: "85.7",
    side: "right2",
    thrust: "-3",
    lastLineOffset: "0",
    lastLineSize: "0",
  },
  middle: {
    name: "Stairs to 2nd Floor (Central)",
    desc: "Go to the middle stairs to continue to Floor 2.",
    colStart: "51",
    colEnd: "16",
    rowStart: "88",
    rowEnd: "85",
    startX: "53.8",
    startY: "92",
    corridorY: "85.7",
    side: "right2",
    thrust: "-3",
    lastLineOffset: "0",
    lastLineSize: "0",
  },
  right: {
    name: "Stairs to 2nd Floor (East)",
    desc: "Go to the right stairs to continue to Floor 2.",
    colStart: "216",
    colEnd: "180",
    rowStart: "86",
    rowEnd: "83",
    startX: "53.8",
    startY: "92",
    corridorY: "85.7",
    side: "right2",
    thrust: "2",
    lastLineOffset: "0",
    lastLineSize: "0",
  },
  far_right: {
    name: "Stairs to 2nd Floor (Far East)",
    desc: "Use the stairs near the Printing Center to reach the 2nd floor.",
    colStart: "216",
    colEnd: "180",
    rowStart: "86",
    rowEnd: "83",
    startX: "53.8",
    startY: "92",
    corridorY: "85.7",
    side: "right2",
    thrust: "2",
    lastLineOffset: "0",
    lastLineSize: "0",
  }
};

const getRoomVisualCenter = (roomEl) => {
  const styleAttr = roomEl.getAttribute("style") || "";

  const colMatch = styleAttr.match(/grid-column:\s*([\d.]+)\s*\/\s*([\d.]+)/i);
  const rowMatch = styleAttr.match(/grid-row:\s*([\d.]+)\s*\/\s*([\d.]+)/i);

  const colStart = colMatch ? parseFloat(colMatch[1]) : 0;
  const colEnd = colMatch ? parseFloat(colMatch[2]) : 0;
  const rowStart = rowMatch ? parseFloat(rowMatch[1]) : 0;
  const rowEnd = rowMatch ? parseFloat(rowMatch[2]) : 0;

  return {
    x: (colStart + colEnd) / 2,
    y: (rowStart + rowEnd) / 2,
  };
};

const getAssignedStairFor2FRoom = (roomEl) => {
  const manual = (roomEl.dataset.stair || "").trim().toLowerCase();
  // Validating against all 4 options now
  if (["left", "middle", "right", "far_right"].includes(manual)) {
    return manual;
  }

  const center = getRoomVisualCenter(roomEl);

  // Logic to determine which stair to use based on Grid Column (center.x)
  if (center.x >= 45) return "far_right"; // Rooms near C210 / Printing Center
  if (center.x >= 55) return "right";     // Rooms like C207, C208, C209
  if (center.x <= 25) return "left";      // Far left rooms
  
  // Specific check for lower-left quadrant
  if (center.x < 45 && center.y >= 60) return "left";

  return "middle"; // Default
};

const makeVirtualRoom = (config) => {
  return {
    dataset: {
      hidePath: "false",
      colStart: config.colStart,
      colEnd: config.colEnd,
      rowStart: config.rowStart,
      rowEnd: config.rowEnd,
      startX: config.startX,
      startY: config.startY,
      corridorY: config.corridorY,
      side: config.side,
      thrust: config.thrust,
      lastLineOffset: config.lastLineOffset,
      lastLineSize: config.lastLineSize,
      name: config.name,
      desc: config.desc,
    },
  };
};

  // -----------------------------
  // YELLOW PATH
  // -----------------------------
  function drawYellowPath(roomEl) {
    const pathGroup = document.getElementById("path-group");
    if (!pathGroup || !roomEl || !roomEl.dataset) return;

    pathGroup.innerHTML = "";

    if (roomEl.dataset.hidePath === "true") return;

    const cStart = parseFloat(roomEl.dataset.colStart);
    const cEnd = parseFloat(roomEl.dataset.colEnd);
    const rStart = parseFloat(roomEl.dataset.rowStart);
    const rEnd = parseFloat(roomEl.dataset.rowEnd);

    if ([cStart, cEnd, rStart, rEnd].some((v) => Number.isNaN(v))) return;

    const startX = parseFloat(roomEl.dataset.startX) || 53.8;
    const startY = parseFloat(roomEl.dataset.startY) || 92;
    const mainCorridorY = parseFloat(roomEl.dataset.corridorY) || 85.7;

    const startThrust = parseFloat(roomEl.dataset.startThrust) || 0;
    const initialPointX = startX - startThrust;

    const side = roomEl.dataset.side || "left";
    const customThrust = roomEl.dataset.thrust ? parseFloat(roomEl.dataset.thrust) : null;

    const roomX = (cStart + cEnd) / 5.2;
    const lastLineOffset = parseFloat(roomEl.dataset.lastLineOffset) || 0;
    const roomY = ((rStart + rEnd) / 2.2) + 2 - lastLineOffset;

    let entryX;
    if (side === "right2" || side === "hide") {
      entryX = roomX;
    } else if (customThrust !== null && customThrust < 0) {
      entryX = roomX + 1;
    } else {
      entryX = side.includes("right") ? (roomX - 5) : (roomX + 6);
    }

    const lastLineSize = parseFloat(roomEl.dataset.lastLineSize) || 0;

    let thrust = 0;
    if (customThrust !== null && !Number.isNaN(customThrust)) {
      thrust = customThrust;
    } else if (side === "right" || side === "upright") {
      thrust = 4;
    } else if (side === "right2") {
      thrust = 0;
    }

    const leftDotOffset = 1.6;

    let endX = roomX + thrust;
    if (side === "left") {
      endX = roomX - leftDotOffset;
    }

    const upwardLength = side === "upright" ? 3 : 0;
    const endY = roomY - upwardLength;

    let points = [
      { x: initialPointX, y: startY },
      { x: startX, y: startY },
      { x: startX, y: mainCorridorY },
      { x: entryX, y: mainCorridorY },
      { x: entryX, y: roomY },
      { x: roomX, y: roomY }
    ];

    if (side === "left") {
      points.push({ x: endX, y: roomY });
    } else {
      points.push({ x: endX, y: roomY });

      if (lastLineSize !== 0) {
        points.push({ x: endX, y: roomY + lastLineSize });
      } else if (side !== "hide" && side !== "right2" && side !== "left") {
        points.push({ x: endX, y: endY });
      }
    }

    const d = points.map((p, i) => (i === 0 ? "M" : "L") + ` ${p.x} ${p.y}`).join(" ");
    const lastPoint = points[points.length - 1];

    pathGroup.innerHTML = `
      <path d="${d}"
            stroke="#fbbf24"
            stroke-width="0.4"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-dasharray="200"
            stroke-dashoffset="200"
            style="animation: drawPath 5.6s forwards, pulsePath 2.6s infinite 0.6s" />

      <circle cx="${lastPoint.x}"
              cy="${lastPoint.y}"
              r="1.6"
              fill="#ef4444">
        <animate attributeName="r" values="0.6;0.8;0.6" dur="2.5s" repeatCount="indefinite" />
      </circle>
    `;
  }

  window.drawYellowPath = drawYellowPath;

  const saveRoomRoute = (floor, roomEl) => {
    floorRoutes[floor] = {
      type: "room",
      roomId: roomEl.dataset.id || null,
      name: (roomEl.dataset.name || "").trim(),
      desc: (roomEl.dataset.desc || "").trim(),
    };
  };

  const saveVirtualRoute = (floor, stairConfig, name, desc) => {
    floorRoutes[floor] = {
      type: "virtual",
      stairConfig,
      name,
      desc,
    };
  };

  const redrawSavedRouteForCurrentFloor = () => {
    clearSelectionOnly();
    clearPath();

    const saved = floorRoutes[currentFloor];
    if (!saved) {
      setDescription("", DEFAULT_DESC);
      return;
    }

    if (saved.type === "virtual") {
      const virtualRoom = makeVirtualRoom(saved.stairConfig);
      setDescription(saved.name || "", saved.desc || "");
      drawYellowPath(virtualRoom);
      return;
    }

    if (saved.type === "room") {
      const roomEl = builder.querySelector(`.room[data-id="${saved.roomId}"]`);
      if (!roomEl) {
        setDescription("", DEFAULT_DESC);
        return;
      }

      roomEl.classList.add("is-selected");
      roomEl.classList.add("room-click");
      setDescription(saved.name || "", saved.desc || "");
      drawYellowPath(roomEl);
    }
  };

  const selectRoomAndDraw = (roomEl) => {
    if (!roomEl) return;

    clearSelectionOnly();

    roomEl.classList.add("is-selected");
    roomEl.classList.add("room-click");

    const name = (roomEl.dataset.name || "").trim();
    const desc = (roomEl.dataset.desc || "").trim();

    setDescription(name, desc);
    drawYellowPath(roomEl);
    saveRoomRoute(currentFloor, roomEl);
  };

  const start2FCrossFloorRoute = (targetRoomEl) => {
    cancelCrossFloorRoute();

    // clear old routes first because another room was clicked
    floorRoutes["1F"] = null;
    floorRoutes["2F"] = null;
    floorRoutes["3F"] = null;
    floorRoutes["4F"] = null;

    const targetId = targetRoomEl.dataset.id;
    const targetName = (targetRoomEl.dataset.name || "").trim();
    const targetDesc = (targetRoomEl.dataset.desc || "").trim();
    const stairKey = getAssignedStairFor2FRoom(targetRoomEl);
    const stairConfig = FLOOR1_STAIR_TARGETS[stairKey] || FLOOR1_STAIR_TARGETS.middle;

    // SAVE 1F ROUTE
    saveVirtualRoute(
      "1F",
      stairConfig,
      targetName,
      `Step 1: ${stairConfig.desc}`
    );

    // SAVE 2F ROUTE
    floorRoutes["2F"] = {
      type: "room",
      roomId: targetId,
      name: targetName,
      desc: targetDesc,
    };

    // SHOW 1F FIRST
    if (floorSelect) floorSelect.value = "1F";
    renderFloor("1F");

    // AUTO SWITCH TO 2F
    crossFloorTimer = setTimeout(() => {
      if (floorSelect) floorSelect.value = "2F";
      renderFloor("2F");
      cancelCrossFloorRoute();
    }, 1800);
  };

  if (floorSelect) {
    floorSelect.addEventListener("change", (e) => {
      cancelCrossFloorRoute();
      renderFloor(e.target.value);
    });

    renderFloor(floorSelect.value);
  } else {
    resetView();
  }

  // -----------------------------
  // ONE CLICK HANDLER
  // -----------------------------
  document.addEventListener("click", (e) => {
    const roomEl = e.target.closest(".room");
    if (!roomEl) return;

    const alreadySelected = roomEl.classList.contains("is-selected");

    clearSelectionOnly();
    clearPath();

    if (alreadySelected) {
      clearAllRoutes();
      return;
    }

    if (currentFloor === "2F") {
      start2FCrossFloorRoute(roomEl);
      return;
    }

    cancelCrossFloorRoute();

    // keep only the current floor route, remove routes from other floors
    clearOtherFloorRoutes(currentFloor);
    floorRoutes[currentFloor] = null;

    selectRoomAndDraw(roomEl);
  });

  // Zoom
  viewport.addEventListener(
    "wheel",
    (e) => {
      e.preventDefault();

      const rect = viewport.getBoundingClientRect();
      const mouseX = e.clientX - rect.left;
      const mouseY = e.clientY - rect.top;

      const zoomDelta = -e.deltaY * ZOOM_SPEED;

      const fitScale = getFitScale();
      MIN = fitScale * (1 - EXTRA_UNZOOM);

      const newScale = clamp(scale * (1 + zoomDelta), MIN, MAX);

      const worldX = (mouseX - originX) / scale;
      const worldY = (mouseY - originY) / scale;

      scale = newScale;
      originX = mouseX - worldX * scale;
      originY = mouseY - worldY * scale;

      applyAndClamp();
    },
    { passive: false }
  );

  // Pan
  let isDragging = false;
  let startX = 0;
  let startY = 0;

  viewport.addEventListener("mousedown", (e) => {
    isDragging = true;
    startX = e.clientX - originX;
    startY = e.clientY - originY;
    viewport.style.cursor = "grabbing";
  });

  window.addEventListener("mouseup", () => {
    isDragging = false;
    viewport.style.cursor = "grab";
  });

  viewport.addEventListener("mousemove", (e) => {
    if (!isDragging) return;
    originX = e.clientX - startX;
    originY = e.clientY - startY;
    applyAndClamp();
  });

  if (resetBtn) {
    resetBtn.addEventListener("click", () => {
      cancelCrossFloorRoute();
      clearAllRoutes();
      resetView();
    });
  }

  window.addEventListener("resize", () => {
    resetView();
    requestAnimationFrame(() => {
      redrawSavedRouteForCurrentFloor();
    });
  });

  viewport.style.cursor = "grab";
});