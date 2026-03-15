/* resources/js/app.js */
document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("zoomViewport");
  const layer = document.getElementById("zoomLayer");
  const resetBtn = document.getElementById("zoomReset");
  const grid = document.getElementById("mapGrid");
  const builder = document.getElementById("mapBuilder");
  const floorSelect = document.getElementById("floorSelect");

  // DESCRIPTION elements
  const descNameEl = document.getElementById("roomDescName"); // optional
  const descTextEl = document.getElementById("roomDescText"); // required

  if (!viewport || !layer || !builder) return;

  const DEFAULT_DESC = "Tap any room box on the map to see its description here.";

  // Helper to set description UI
  const setDescription = (name, desc) => {
    if (descNameEl) descNameEl.textContent = name || "";
    if (descTextEl) descTextEl.textContent = (desc || "").trim() || DEFAULT_DESC;
  };

  // Default description text
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

  const clearSelection = () => {
    document.querySelectorAll(".room.is-selected").forEach((el) => el.classList.remove("is-selected"));
    document.querySelectorAll(".room.room-click").forEach((el) => el.classList.remove("room-click"));

    // clear yellow path (works even after floor swap)
    const pathGroup = document.getElementById("path-group");
    if (pathGroup) pathGroup.innerHTML = "";

    setDescription("", DEFAULT_DESC);
  };

  // Render floor using <template> contents
  const renderFloor = (floor) => {
    const tpl = document.getElementById(`tpl-${floor}`);
    if (!tpl) return;

    builder.innerHTML = tpl.innerHTML;

    builder.classList.remove("floor-1", "floor-2", "floor-3", "floor-4");
    builder.classList.add(`floor-${floor.replace("F", "")}`);

    clearSelection();

    requestAnimationFrame(resetView);
  };

  if (floorSelect) {
    floorSelect.addEventListener("change", (e) => renderFloor(e.target.value));
    renderFloor(floorSelect.value); // initial
  } else {
    resetView();
  }

  // -----------------------------
  // ✅ YELLOW PATH (delegated)
  // -----------------------------
function drawYellowPath(roomEl) {
    const pathGroup = document.getElementById("path-group");
    if (!pathGroup) return;

    // Clear previous path
    pathGroup.innerHTML = "";

    // Feature: Hide path if data-hide-path="true"
    if (roomEl.dataset.hidePath === "true") return;

    // Parse Grid coordinates
    const cStart = parseFloat(roomEl.dataset.colStart);
    const cEnd = parseFloat(roomEl.dataset.colEnd);
    const rStart = parseFloat(roomEl.dataset.rowStart);
    const rEnd = parseFloat(roomEl.dataset.rowEnd);

    if ([cStart, cEnd, rStart, rEnd].some((v) => Number.isNaN(v))) return;

    // Start positions and Corridor Y
    const startX = parseFloat(roomEl.dataset.startX) || 53.8;
    const startY = parseFloat(roomEl.dataset.startY) || 92;
    const mainCorridorY = parseFloat(roomEl.dataset.corridorY) || 85.7;
    
    // START HOOK LOGIC
    const startThrust = parseFloat(roomEl.dataset.startThrust) || 0;
    const initialPointX = startX - startThrust;

    const side = roomEl.dataset.side || "left";
    const customThrust = roomEl.dataset.thrust ? parseFloat(roomEl.dataset.thrust) : null;

    // MAP GRID TO SVG SPACE
    const roomX = (cStart + cEnd) / 5.2;
    
    // Offset for the overall end position
    const lastLineOffset = parseFloat(roomEl.dataset.lastLineOffset) || 0;
    const roomY = ((rStart + rEnd) / 2.2) + 2 - lastLineOffset;

    // --- UPDATED ENTRY LOGIC FOR RIGHT2 ---
    let entryX;
    if (side === "right2" || side === "hide") {
        entryX = roomX; // Go directly to the target column
    } else if (customThrust !== null && customThrust < 0) {
        entryX = roomX + 1;
    } else {
        entryX = (side.includes("right")) ? (roomX - 5) : (roomX + 6);
    }

    // FEATURE: EDITABLE END LINE SIZE (The final vertical drop)
    const lastLineSize = parseFloat(roomEl.dataset.lastLineSize) || 0;

    // --- UPDATED THRUST LOGIC FOR RIGHT2 ---
    let thrust = 0;
    if (customThrust !== null && !Number.isNaN(customThrust)) {
        thrust = customThrust;
    } else if (side === "right" || side === "upright") {
        thrust = 4; // Keep legacy behavior for standard "right"
    } else if (side === "right2") {
        thrust = 0; // Default to zero for right2 unless data-thrust is provided
    }

    const endX = roomX + thrust;
    const upwardLength = (side === "upright") ? 3 : 0;
    const endY = roomY - upwardLength;

    // ASSEMBLE POINTS
    let points = [
        { x: initialPointX, y: startY }, 
        { x: startX, y: startY },        
        { x: startX, y: mainCorridorY }, 
        { x: entryX, y: mainCorridorY }, 
        { x: entryX, y: roomY },         
        { x: roomX, y: roomY },         
        { x: endX, y: roomY }
    ];

    // If a specific size is provided, add the final vertical drop
    if (lastLineSize !== 0) {
        points.push({ x: endX, y: roomY + lastLineSize });
    } else if (side !== "hide" && side !== "right2") {
        points.push({ x: endX, y: endY });
    }

    // Generate Path Data
    const d = points.map((p, i) => (i === 0 ? "M" : "L") + ` ${p.x} ${p.y}`).join(" ");

    // RENDER
    pathGroup.innerHTML = `
      <path d="${d}"
            stroke="#fbbf24"
            stroke-width="0.4"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-dasharray="200"
            stroke-dashoffset="200"
            style="animation: drawPath 2.6s forwards, pulsePath 2.6s infinite 0.6s" />

      <circle cx="${points[points.length - 1].x}" 
              cy="${points[points.length - 1].y}" 
              r="1.6" 
              fill="#ef4444">
        <animate attributeName="r" values="0.6;0.8;0.6" dur="2.5s" repeatCount="indefinite" />
      </circle>
    `;
}
// -----------------------------
  // ✅ ONE CLICK HANDLER (works after floor swap)
  // - toggles selection
  // - updates description
  // - draws yellow path
  // -----------------------------
  document.addEventListener("click", (e) => {
    const roomEl = e.target.closest(".room");
    if (!roomEl) return;

    const alreadySelected = roomEl.classList.contains("is-selected");

    // clear old selection + path highlight
    document.querySelectorAll(".room.is-selected").forEach((el) => el.classList.remove("is-selected"));
    document.querySelectorAll(".room.room-click").forEach((el) => el.classList.remove("room-click"));

    // clear existing path
    const pathGroup = document.getElementById("path-group");
    if (pathGroup) pathGroup.innerHTML = "";

    if (alreadySelected) {
      setDescription("", DEFAULT_DESC);
      return;
    }

    // select
    roomEl.classList.add("is-selected");
    roomEl.classList.add("room-click");

    // description
    const name = (roomEl.dataset.name || "").trim();
    const desc = (roomEl.dataset.desc || "").trim();
    setDescription(name, desc);

    // yellow path
    drawYellowPath(roomEl);
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
  let startX = 0, startY = 0;

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

  if (resetBtn) resetBtn.addEventListener("click", resetView);
  window.addEventListener("resize", resetView);

  viewport.style.cursor = "grab";
});