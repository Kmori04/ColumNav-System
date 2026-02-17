/* resources/js/app.js */
document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("zoomViewport");
  const layer = document.getElementById("zoomLayer");
  const resetBtn = document.getElementById("zoomReset");
  const grid = document.getElementById("mapGrid");
  const builder = document.getElementById("mapBuilder");
  const floorSelect = document.getElementById("floorSelect");

  if (!viewport || !layer || !builder) return;

  let scale = 1;
  let originX = 0;
  let originY = 0;

  const MAX = 3.0;
  const ZOOM_SPEED = 0.0015;

  const GRID_BASE = 26;
  const clamp = (v, min, max) => Math.min(max, Math.max(min, v));

  const EXTRA_UNZOOM = 0.12;
  let MIN = 0.2;

  const PAN_MARGIN = 12;

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

  // ✅ Render floor using <template> contents
  const renderFloor = (floor) => {
    const tpl = document.getElementById(`tpl-${floor}`);
    if (!tpl) return;

    // swap blocks
    builder.innerHTML = tpl.innerHTML;

    // swap per-floor grid class
    builder.classList.remove("floor-1", "floor-2", "floor-3", "floor-4");
    builder.classList.add(`floor-${floor.replace("F", "")}`);

    requestAnimationFrame(resetView);
  };

  if (floorSelect) {
    floorSelect.addEventListener("change", (e) => renderFloor(e.target.value));
    renderFloor(floorSelect.value); // initial
  } else {
    resetView();
  }

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