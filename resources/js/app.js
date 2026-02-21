/* resources/js/app.js */
document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("zoomViewport");
  const layer = document.getElementById("zoomLayer");
  const resetBtn = document.getElementById("zoomReset");
  const grid = document.getElementById("mapGrid");
  const builder = document.getElementById("mapBuilder");
  const floorSelect = document.getElementById("floorSelect");

  // DESCRIPTION elements (make sure these IDs exist in home.blade.php)
  const descNameEl = document.getElementById("roomDescName"); // optional
  const descTextEl = document.getElementById("roomDescText"); // required

  if (!viewport || !layer || !builder) return;

  // Helper to set description UI
  const setDescription = (name, desc) => {
    if (descNameEl) descNameEl.textContent = name || "";
    if (descTextEl) descTextEl.textContent = (desc || "").trim(); // never show "No description yet"
  };

  // Default description text
  const DEFAULT_DESC = "Tap any room box on the map to see its description here.";
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
    setDescription("", DEFAULT_DESC);
  };

  // Render floor using <template> contents
  const renderFloor = (floor) => {
    const tpl = document.getElementById(`tpl-${floor}`);
    if (!tpl) return;

    // swap blocks
    builder.innerHTML = tpl.innerHTML;

    // swap per-floor grid class
    builder.classList.remove("floor-1", "floor-2", "floor-3", "floor-4");
    builder.classList.add(`floor-${floor.replace("F", "")}`);

    // clear selection + reset description
    clearSelection();

    requestAnimationFrame(resetView);
  };

  if (floorSelect) {
    floorSelect.addEventListener("change", (e) => renderFloor(e.target.value));
    renderFloor(floorSelect.value); // initial
  } else {
    resetView();
  }

  // CLICK ROOM -> click again = unselect
  document.addEventListener("click", (e) => {
    const roomEl = e.target.closest(".room");
    if (!roomEl) return;

    const isAlreadySelected = roomEl.classList.contains("is-selected");

    // remove previous highlight
    document.querySelectorAll(".room.is-selected").forEach((el) => el.classList.remove("is-selected"));

    if (isAlreadySelected) {
      // ✅ unselect + reset description
      setDescription("", DEFAULT_DESC);
      return;
    }

    // ✅ select new room
    roomEl.classList.add("is-selected");

    // update description box
    const name = (roomEl.dataset.name || "").trim();
    const desc = (roomEl.dataset.desc || "").trim();
    setDescription(name, desc);
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
  let startX = 0,
    startY = 0;

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

// Yellow guideline code
const drawYellowLine = (ctx) => {
    ctx.strokeStyle = "yellow";
    ctx.lineWidth = 10; // Original 4 + 6
    ctx.lineCap = "round";
    
    ctx.beginPath();
    ctx.moveTo(16, 16); // Original 10,10 + 6
    ctx.lineTo(106, 106); // Original 100,100 + 6
    ctx.stroke();
    
    console.log("Yellow guide active at opacity 0.8");
};