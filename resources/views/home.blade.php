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
        <img src="{{ Vite::asset('resources/images/ColumbanCollegeLogo.png') }}" alt="Columban College Logo">
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
    <aside class="sidebar">
      <div class="sidebar-wrapper">
        <section class="card">
          <div class="card-head"><h2 class="card-title">DESCRIPTION</h2></div>
          <div class="card-body"><div class="description-box"></div></div>
        </section>

        <section class="legend-card">
          <div class="legend-titlebar">
            <span class="legend-titleline"></span>
            <h2 class="legend-titletext">MAP LEGEND</h2>
            <span class="legend-titleline"></span>
          </div>
          <div class="legend-rows">
            <div class="legend-cell"><img class="legend-ico" src="{{ Vite::asset('resources/images/stairs.png') }}"><span class="legend-label">STAIRS</span></div>
            <div class="legend-cell"><img class="legend-ico" src="{{ Vite::asset('resources/images/GPSblue.png') }}"><span class="legend-label">YOUR LOCATION</span></div>
            <div class="legend-cell"><img class="legend-ico" src="{{ Vite::asset('resources/images/MenWomen.png') }}"><span class="legend-label">RESTROOM</span></div>
            <div class="legend-cell"><img class="legend-ico arrow" src="{{ Vite::asset('resources/images/BlueArrow.png') }}"><span class="legend-label">ENTRANCE</span></div>
            <div class="legend-cell"><img class="legend-ico" src="{{ Vite::asset('resources/images/GPSyellow.png') }}"><span class="legend-label">DESTINATION</span></div>
            <div class="legend-cell"><img class="legend-ico arrow" src="{{ Vite::asset('resources/images/RedArrow.png') }}"><span class="legend-label">EXIT</span></div>
            <div class="legend-cell is-empty"></div>
            <div class="legend-cell"><img class="legend-ico" src="{{ Vite::asset('resources/images/PWD.png') }}"><span class="legend-label">PWD RESTROOM</span></div>
          </div>
        </section>
      </div>
    </aside>

    <section class="content">
      <div class="map-wrapper">
        <div class="map-placeholder">
          <div class="map-grid" id="mapGrid"></div>

          <div class="map-zoom-viewport" id="zoomViewport">
            <div class="map-zoom-layer" id="zoomLayer">
              <div class="map-builder" id="mapBuilder">

                <!-- LEFT STACK -->
                <div class="stairs" style="grid-column: 4 / 11; grid-row: 4 / 10; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 1 / 11; grid-row: 10 / 16; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 16 / 22; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 22 / 28; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 28 / 34; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 34 / 40; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 40 / 46; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 46 / 52; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 52 / 58; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 58 / 64; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 64 / 70; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 70 / 76; margin: 1.5px;"></div>
                <div class="stairs" style="grid-column: 4 / 11; grid-row: 76 / 82; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 4 / 11; grid-row: 82 / 88; margin: 1.5px;"></div>

               <!-- ===== TOP STRIP (MOVED DOWN +3 ROWS) ===== -->

<!-- ===== TOP STRIP (MOVED DOWN +6 ROWS, CONNECTOR THICKER) ===== -->

<!-- LEFT L-SHAPE -->
<div class="room" style="grid-column: 23 / 32; grid-row: 6 / 13;  margin: 1.5px;"></div>   <!-- top horizontal -->
<div class="room" style="grid-column: 23 / 27; grid-row: 13 / 24; margin: 1.5px;"></div>  <!-- left vertical -->
<div class="room" style="grid-column: 27 / 35; grid-row: 17 / 24; margin: 1.5px;"></div>  <!-- bottom-right -->

<!-- BIG LONG BLOCK -->
<div class="room" style="grid-column: 35 / 55; grid-row: 15 / 24; margin: 1.5px;"></div>

<!-- STAIRS + 2 SMALL ROOMS -->
<div class="stairs" style="grid-column: 55 / 59; grid-row: 16 / 24; margin: 1.5px;"></div>
<div class="room"   style="grid-column: 59 / 63; grid-row: 16 / 24; margin: 1.5px;"></div>
<div class="room"   style="grid-column: 63 / 67; grid-row: 16 / 24; margin: 1.5px;"></div>

<!-- CONNECTOR LINE (THICKER: 2 rows tall now) -->
<div class="room"   style="grid-column: 67 / 73; grid-row: 16 / 18; margin: 1.5px;"></div>

<!-- RIGHT MID LONG BLOCK -->
<div class="room"   style="grid-column: 73 / 87; grid-row: 16 / 24; margin: 1.5px;"></div>

<!-- STAIRS + RIGHT TALL BLOCKS -->
<div class="stairs" style="grid-column: 87 / 91; grid-row: 16 / 24; margin: 1.5px;"></div>
<div class="room"   style="grid-column: 91 / 97; grid-row: 15 / 24; margin: 1.5px;"></div>
<div class="room"   style="grid-column: 97 / 104; grid-row: 14 / 25; margin: 1.5px;"></div>

<!-- FAR RIGHT DROP -->
<div class="room"   style="grid-column: 104 / 109; grid-row: 20 / 30; margin: 1.5px;"></div>

<!-- ===== END TOP STRIP ===== -->

                <!-- RIGHT CLUSTER -->
                <div class="room"   style="grid-column: 83 / 90; grid-row: 30 / 38; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 90; grid-row: 38 / 46; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 90; grid-row: 46 / 54; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 93; grid-row: 54 / 62; margin: 1.5px;"></div>
                <div class="stairs" style="grid-column: 90 / 94; grid-row: 64 / 74; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 94 / 102; grid-row: 74 / 90; margin: 1.5px;"></div>

                <!-- MIDDLE + BOTTOM (UNCHANGED) -->
                <div class="room" style="grid-column: 25 / 33; grid-row: 38 / 68; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 68 / 74; grid-row: 32 / 48; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 74 / 77; grid-row: 38 / 50; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 68 / 74; grid-row: 48 / 62; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 68 / 74; grid-row: 62 / 76; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 74 / 77; grid-row: 72 / 82; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 51 / 64; grid-row: 74 / 82; margin: 1.5px;"></div>

                <div class="room" style="grid-column: 8 / 15;   grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 15 / 22;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 22 / 29;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 29 / 38;  grid-row: 91 / 99; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 38 / 45;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 45 / 52;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 52 / 58;  grid-row: 94 / 97; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 58 / 65;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 65 / 74;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 74 / 83;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 83 / 92;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 92 / 101; grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 101 / 110; grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 110 / 120; grid-row: 91 / 101; margin: 1.5px;"></div>

              </div>
            </div>
          </div>

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