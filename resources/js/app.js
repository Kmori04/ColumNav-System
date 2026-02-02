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

  //  since you have a big world (1900x1900), allow more zoom out
  const MIN = 0.35;
  const MAX = 2.5;
  const ZOOM_SPEED = 0.0015;

  const GRID_BASE = 28; // matches your CSS grid size
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

  // Smart reset: fit + center the world
  const resetView = () => {
    // clear transform first so measurements are correct
    scale = 1;
    originX = 0;
    originY = 0;
    apply();

    requestAnimationFrame(() => {
      const vRect = viewport.getBoundingClientRect();
      const bRect = builder.getBoundingClientRect();

      // Fit builder into viewport with padding
      const padding = 90; // adjust if you want more/less breathing space
      const sx = (vRect.width - padding) / bRect.width;
      const sy = (vRect.height - padding) / bRect.height;
      scale = clamp(Math.min(sx, sy), MIN, MAX);

      // Now center it
      // get builder center relative to viewport
      const bLeft = bRect.left - vRect.left;
      const bTop  = bRect.top  - vRect.top;

      const builderCenterX = bLeft + bRect.width / 2;
      const builderCenterY = bTop  + bRect.height / 2;

      const viewportCenterX = vRect.width / 2;
      const viewportCenterY = vRect.height / 2;

      originX += (viewportCenterX - builderCenterX);
      originY += (viewportCenterY - builderCenterY);

      apply();
    });
  };

  // Zoom wheel
  viewport.addEventListener("wheel", (e) => {
    e.preventDefault();

    const rect = viewport.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    const zoomDelta = -e.deltaY * ZOOM_SPEED;
    const newScale = clamp(scale * (1 + zoomDelta), MIN, MAX);

    originX -= (mouseX - originX) * (newScale / scale - 1);
    originY -= (mouseY - originY) * (newScale / scale - 1);

    scale = newScale;
    apply();
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
    apply();
  });

  // Reset button
  if (resetBtn) {
    resetBtn.addEventListener("click", resetView);
  }

  //  Keep centered when browser resizes
  window.addEventListener("resize", () => {
    resetView();
  });

  viewport.style.cursor = "grab";
  resetView(); // start centered + fitted
});
