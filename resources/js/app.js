document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("zoomViewport");
  const layer = document.getElementById("zoomLayer");
  const resetBtn = document.getElementById("zoomReset");
  const grid = document.getElementById("mapGrid");
  const builder = document.getElementById("mapBuilder");

  if (!viewport || !layer || !builder) return;

  let scale = 1;
  let originX = 0;
  let originY = 0;

  const MAX = 3.0;
  const ZOOM_SPEED = 0.0015;

  const GRID_BASE = 26;
  const clamp = (v, min, max) => Math.min(max, Math.max(min, v));

  // extra zoom-out beyond reset
  const EXTRA_UNZOOM = 0.12;

  // ✅ how much empty space you allow around the map (set 0 for strict)
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

  // ✅ HARD LIMIT: prevent going outside the map
  const clampPan = () => {
    const vW = viewport.clientWidth;
    const vH = viewport.clientHeight;

    // offsetWidth/height are NOT affected by transforms (good!)
    const mapW = builder.offsetWidth * scale;
    const mapH = builder.offsetHeight * scale;

    // If map is smaller than viewport, keep it centered
    if (mapW <= vW - PAN_MARGIN * 2) {
      originX = (vW - mapW) / 2;
    } else {
      const minX = vW - mapW - PAN_MARGIN; // far left
      const maxX = PAN_MARGIN;             // far right
      originX = clamp(originX, minX, maxX);
    }

    if (mapH <= vH - PAN_MARGIN * 2) {
      originY = (vH - mapH) / 2;
    } else {
      const minY = vH - mapH - PAN_MARGIN;
      const maxY = PAN_MARGIN;
      originY = clamp(originY, minY, maxY);
    }
  };

  const applyAndClamp = () => {
    clampPan();
    apply();
  };

  const getFitScale = () => {
    const padding = 10;

    const vW = viewport.clientWidth - padding;
    const vH = viewport.clientHeight - padding;

    const bW = builder.offsetWidth;  // untransformed
    const bH = builder.offsetHeight; // untransformed

    return Math.min(vW / bW, vH / bH);
  };

  let MIN = 0.2;

  const resetView = () => {
    // reset transform
    scale = 1;
    originX = 0;
    originY = 0;
    apply();

    requestAnimationFrame(() => {
      const fitScale = getFitScale();

      // allow a little unzoom below reset
      MIN = fitScale * (1 - EXTRA_UNZOOM);

      // reset uses FIT scale
      scale = clamp(fitScale, MIN, MAX);

      // center (clampPan will center properly too)
      applyAndClamp();
    });
  };

  // Zoom wheel
  viewport.addEventListener("wheel", (e) => {
    e.preventDefault();

    const rect = viewport.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    const zoomDelta = -e.deltaY * ZOOM_SPEED;

    // keep MIN synced
    const fitScale = getFitScale();
    MIN = fitScale * (1 - EXTRA_UNZOOM);

    const newScale = clamp(scale * (1 + zoomDelta), MIN, MAX);

    // zoom around mouse
    originX -= (mouseX - originX) * (newScale / scale - 1);
    originY -= (mouseY - originY) * (newScale / scale - 1);

    scale = newScale;

    applyAndClamp();
  }, { passive: false });

  // Drag to pan
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
  resetView();
});