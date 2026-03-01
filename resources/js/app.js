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

 
// #YELLOW LINE#
 


document.addEventListener('DOMContentLoaded', function() {
    const rooms = document.querySelectorAll('.room');
    const pathGroup = document.getElementById('path-group');

    rooms.forEach(room => {
        room.addEventListener('click', function() {
            // 1. Toggle Logic
            const isAlreadySelected = this.classList.contains('room-click');

            // 2. Reset UI
            document.querySelectorAll('.room').forEach(r => r.classList.remove('room-click'));
            if (pathGroup) pathGroup.innerHTML = '';

            if (isAlreadySelected) return;

            // 4. Activate current room
            this.classList.add('room-click');

            // 5. Extract Coordinates
            const cStart = parseInt(this.dataset.colStart);
            const cEnd = parseInt(this.dataset.colEnd);
            const rStart = parseInt(this.dataset.rowStart);
            const rEnd = parseInt(this.dataset.rowEnd);
            const side = this.dataset.side; 

            // 6. Math Calculations
            const roomX = (cStart + cEnd) / 5.2; 
            const roomY = ((rStart + rEnd) / 2.2) + 2; 

            const startX = 54; 
            const startY = 92;
            const mainCorridorY = 85.7;

            // 7. SMART PATH LOGIC
            const entryX = (side === 'right' || side === 'right-2') ? (roomX - 5) : (roomX + 6);
            
            // Thrust Logic (Horizontal)
            let thrust = 0; 
            if (side === 'right-2') {
                thrust = 1;
            } else if (side === 'right') {
                thrust = 11;
            }
            
            const endX = roomX + thrust;

            // --- UPRIGHT LOGIC ---
            // Changed the second 3 to 0. 
            // Now, if NOT 'upright', length is 0 and the line vanishes.
            const upwardLength = (side === 'upright') ? 3 : 0;
            const endY = roomY - upwardLength;

            const points = [
                {x: startX, y: startY},           
                {x: startX, y: mainCorridorY},     
                {x: entryX, y: mainCorridorY},     
                {x: entryX, y: roomY},             
                {x: roomX, y: roomY},              
                {x: endX, y: roomY},               
                {x: endX, y: endY}                 
            ];

            // 8. Generate SVG Path
            const d = points.map((p, i) => (i === 0 ? 'M' : 'L') + ` ${p.x} ${p.y}`).join(' ');

            if(pathGroup) {
                pathGroup.innerHTML = `
                    <path d="${d}" 
                          stroke="#fbbf24" 
                          stroke-width="0.6" 
                          fill="none" 
                          stroke-linecap="round" 
                          stroke-linejoin="round"
                          stroke-dasharray="200" 
                          stroke-dashoffset="200"
                          style="animation: drawPath 1.6s forwards, pulsePath 2s infinite 1.2s" />
                    
                    <circle cx="${endX}" cy="${endY}" r="0.6" fill="#ef4444">
                        <animate attributeName="r" values="0.4;0.8;0.4" dur="1.5s" repeatCount="indefinite" />
                    </circle>
                `;
            }
        });
    });
});


