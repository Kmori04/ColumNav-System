<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Columban College - Campus Navigation</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  @vite(['resources/css/home.css', 'resources/js/app.js'])
</head>
<body>

<header class="topbar">
  <div class="topbar-inner">

    <div class="cc">
      <div class="cc-logo">
        <img src="{{ Vite::asset('resources/images/ColumbanCollegeLogo.png') }}">
      </div>
      <h1 class="cc-title">Columban College - Campus Navigation</h1>
    </div>

    <div class="floors-wrap">
      <label class="floors-label">Floors</label>
      <select class="floors-select">
        <option selected>1F</option>
        <option>2F</option>
        <option>3F</option>
        <option>4F</option>
      </select>
    </div>

  </div>
</header>

<main class="page">
  <div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-wrapper">

        <section class="card">
          <div class="card-head">
            <h2 class="card-title">DESCRIPTION</h2>
          </div>
          <div class="card-body">
            <div class="description-box"></div>
          </div>
        </section>

        <section class="legend-card">

          <div class="legend-titlebar">
            <span class="legend-titleline"></span>
            <h2 class="legend-titletext">MAP LEGEND</h2>
            <span class="legend-titleline"></span>
          </div>

          <div class="legend-rows">

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/stairs.png') }}">
              <span class="legend-label">STAIRS</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/GPSblue.png') }}">
              <span class="legend-label">YOUR LOCATION</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/MenWomen.png') }}">
              <span class="legend-label">RESTROOM</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico arrow" src="{{ Vite::asset('resources/images/BlueArrow.png') }}">
              <span class="legend-label">ENTRANCE</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/GPSyellow.png') }}">
              <span class="legend-label">DESTINATION</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico arrow" src="{{ Vite::asset('resources/images/RedArrow.png') }}">
              <span class="legend-label">EXIT</span>
            </div>

            <div class="legend-cell is-empty"></div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/PWD.png') }}">
              <span class="legend-label">PWD RESTROOM</span>
            </div>

          </div>
        </section>

      </div>
    </aside>

    <!-- MAP -->
    <section class="content">
      <div class="map-wrapper">
        <div class="map-placeholder">

          <!-- GRID BACKGROUND -->
          <div class="map-grid" id="mapGrid"></div>

          <!-- ZOOM VIEWPORT -->
          <div class="map-zoom-viewport" id="zoomViewport">
            <div class="map-zoom-layer" id="zoomLayer">

              <!-- BUILDING CONTENT -->
              <div class="map-builder" id="mapBuilder">

                <!-- TOP STAIRS -->
                <div class="stairs" style="grid-column:6 / 12; grid-row:4 / 7;"></div>

                <!-- TOP ROOMS -->
                <div class="room" style="grid-column:6 / 12; grid-row:7 / 11;"></div>
                <div class="room" style="grid-column:2 / 12; grid-row:11 / 16;"></div>

                <!-- MIDDLE ROOMS -->
                <div class="room" style="grid-column:6 / 12; grid-row:16 / 20;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:20 / 24;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:24 / 28;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:28 / 32;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:32 / 36;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:36 / 40;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:40 / 44;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:44 / 48;"></div>

                <!-- LOWER ROOMS -->
                <div class="room" style="grid-column:6 / 12; grid-row:48 / 52;"></div>
                <div class="room" style="grid-column:6 / 12; grid-row:52 / 56;"></div>

                <!-- BOTTOM STAIRS -->
                <div class="stairs" style="grid-column:6 / 12; grid-row:56 / 59;"></div>


                <!-- FINAL ROOM -->
                <div class="room" style="grid-column:6 / 12; grid-row:59 / 63;"></div>


              </div>

            </div>
          </div>

          <!-- RESET BUTTON -->
          <div class="zoom-controls">
            <button type="button" class="zoom-btn" id="zoomReset">Reset</button>
          </div>

        </div>
      </div>
    </section>

  </div>
</main>

</body>
</html>
