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

              <!-- ===== TOP SIDE -->

                <!-- TOP LEFT L-SHAPE -->
                <div class="room" style="grid-column: 19 / 28; grid-row: 6 / 13;  margin: 1.5px;"></div>   <!-- top horizontal -->
                <div class="room" style="grid-column: 19 / 24; grid-row: 13 / 24; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 24 / 32; grid-row: 15 / 24; margin: 1.5px;"></div>

                <!-- CANTEEN -->
                <div class="room" style="grid-column: 32 / 52; grid-row: 15 / 24; margin: 1.5px;"></div>

                <!-- STAIRS PAYMENT AND INFORMATION -->
                <div class="stairs" style="grid-column: 52 / 56; grid-row: 16 / 24; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 56 / 63; grid-row: 16 / 24; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 63 / 70; grid-row: 16 / 24; margin: 1.5px;"></div>

                <!-- GATE TOP -->
                <div class="room" style="grid-column: 70 / 76; grid-row: 16 / 18; margin: 1.5px;"></div>

                <!-- Jubilee -->
                <div class="room" style="grid-column: 76 / 86; grid-row: 16 / 24; margin: 1.5px;"></div>

                <!-- STAIRS + RIGHT TALL BLOCKS -->
                <div class="stairs" style="grid-column: 86 / 90; grid-row: 16 / 24; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 90 / 96; grid-row: 15 / 24; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 96 / 104; grid-row: 14 / 24; margin: 1.5px;"></div>

                <!--TOP RIGHT ROOM -->
                <div class="room"   style="grid-column: 104 / 110; grid-row: 20 / 32; margin: 1.5px;"></div>

                <!-- ===== END TOP STRIP ===== -->



                <!-- LIKOD NG CCS BUILDING -->
                <div class="room"   style="grid-column: 97 / 104; grid-row: 30 / 38; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 97 / 104; grid-row: 38 / 46; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 97 / 104; grid-row: 46 / 54; margin: 1.5px;"></div>
                <div class="room"   style="grid-column: 97 / 107; grid-row: 54 / 62; margin: 1.5px;"></div>

                <!-- ADDED (missing 2 rooms) -->
                <div class="room" style="grid-column: 97 / 105; grid-row: 62 / 69; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 97 / 105; grid-row: 69 / 76; margin: 1.5px;"></div>

                <div class="stairs" style="grid-column: 105 / 110; grid-row: 72 / 84; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 110 / 118; grid-row: 78 / 94; margin: 1.5px;"></div>

                <!-- CCS -->
                <div class="room" style="grid-column: 80 / 86; grid-row: 32 / 48; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 80 / 86; grid-row: 48 / 62; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 80 / 86; grid-row: 62 / 76; margin: 1.5px;"></div>

                <!-- STAGE -->
                <div class="room" style="grid-column: 29 / 37; grid-row: 38 / 68; margin: 1.5px;"></div>

                <!-- COMFORT ROOM BEHIND THE CCS MEN -->
                <div class="room" style="grid-column: 86 / 90; grid-row: 32 / 40; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 86 / 90; grid-row: 40 / 48; margin: 1.5px;"></div>
                
                <!-- COMFORT ROOM BEHIND THE CCS WOMEN -->
                <div class="room" style="grid-column: 86 / 90; grid-row: 60 / 68; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 86 / 90; grid-row: 68 / 76; margin: 1.5px;"></div>


                <!-- STUDY CENTER -->
                <div class="room" style="grid-column: 60 / 75; grid-row: 74 / 82; margin: 1.5px;"></div>

                <!-- Building CASED AND OFFICES BELOW -->
                <div class="room" style="grid-column: 8 / 15;   grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 15 / 22;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 22 / 29;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 29 / 38; grid-row: 93 / 101; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 38 / 45;  grid-row: 88 / 96; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 45 / 52;  grid-row: 88 / 96; margin: 1.5px;"></div>
                
                <!-- MAIN GATE -->
                <div class="room" style="grid-column: 52 / 58; grid-row: 94 / 96; margin: 1.5px;"></div>


                <!--GATE RIGHT SIDE -->
                <div class="room" style="grid-column: 58 / 65;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 65 / 74;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 74 / 83;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 83 / 92;  grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 92 / 101; grid-row: 90 / 98; margin: 1.5px;"></div>
                <div class="room" style="grid-column: 101 / 110; grid-row: 90 / 98; margin: 1.5px;"></div>
                

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