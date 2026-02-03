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
                
                <div class="stairs" style="grid-column: 5 / 10; grid-row: 2 / 8; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 1 / 10; grid-row: 8 / 14; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 14 / 20; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 20 / 26; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 26 / 32; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 32 / 38; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 38 / 44; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 44 / 50; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 50 / 56; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 56 / 62; margin: 1.5px;"></div> 
                <div class="room"   style="grid-column: 5 / 10; grid-row: 62 / 68; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 68 / 74; margin: 1.5px;"></div>
                <div class="stairs" style="grid-column: 5 / 10; grid-row: 74 / 80; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 5 / 10; grid-row: 80 / 86; margin: 1.5px;"></div>

                <div class="room"   style="grid-column: 18 / 26; grid-row: 3 / 8; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 18 / 23; grid-row: 8 / 14; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 23 / 28; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 28 / 44; grid-row: 9 / 17; margin: 1.5px;"></div>
                <div class="stairs" style="grid-column: 44 / 48; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 48 / 52; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 52 / 56; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 56 / 62; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 62 / 73; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="stairs" style="grid-column: 73 / 77; grid-row: 11 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 77 / 83; grid-row: 9 / 17; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 90; grid-row: 7 / 17; margin: 1.5px;"></div>

                <div class="room"   style="grid-column: 90 / 96; grid-row: 14 / 24; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 90; grid-row: 24 / 32; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 90; grid-row: 32 / 40; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 90; grid-row: 40 / 48; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 83 / 93; grid-row: 48 / 54; margin: 1.5px;"></div>
                <div class="stairs" style="grid-column: 90 / 94; grid-row: 60 / 66; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 94 / 101; grid-row: 64 / 76; margin: 1.5px;"></div>

                <div class="room" style="grid-column: 8 / 15;  grid-row: 86 / 94; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 15 / 22; grid-row: 86 / 94; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 22 / 29; grid-row: 86 / 94; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 29 / 38; grid-row: 89 / 97; margin: 1.5px;"></div> 
                <div class="room" style="grid-column: 38 / 45; grid-row: 86 / 94; margin: 1.5px;"></div> 
                <div class="room" style="grid-column: 45 / 52; grid-row: 86 / 94; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 52 / 58; grid-row: 92 / 95; margin: 1.5px;"></div> 
                <div class="room" style="grid-column: 58 / 65; grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 65 / 74; grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 74 / 83; grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 83 / 92; grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 92 / 101; grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 101 / 110; grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 110 / 120; grid-row: 89 / 99; margin: 1.5px;"></div>

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