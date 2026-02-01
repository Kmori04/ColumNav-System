<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Columban College - Campus Navigation</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Vite CSS -->
    @vite(['resources/css/home.css'])
</head>
<body>

<!-- HEADER -->
<header class="topbar">
    <div class="topbar-inner">

        <div class="cc">
            <div class="cc-logo">
                <img src="{{ Vite::asset('resources/images/ColumbanCollegeLogo.png') }}" alt="Columban College Logo">
            </div>
            <h1 class="cc-title">Columban College - Campus Navigation</h1>
        </div>

        <div class="floors-wrap">
            <label class="floors-label" for="floorSelect">Floors</label>
            <select id="floorSelect" class="floors-select">
                <option selected>1F</option>
                <option>2F</option>
                <option>3F</option>
                <option>4F</option>
            </select>
        </div>

    </div>
</header>

<!-- MAIN -->
<main class="page">
    <div class="layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">

            <!-- DESCRIPTION -->
            <section class="card">
                <div class="card-head">
                    <h2 class="card-title">DESCRIPTION</h2>
                </div>
                <div class="card-body">
                    <div class="description-box"></div>
                </div>
            </section>


<!-- MAP LEGEND -->
        <section class="legend-card">
            <div class="legend-titlebar">
             <span class="legend-titleline"></span>
                 <h2 class="legend-titletext">MAP LEGEND</h2>
            <span class="legend-titleline"></span>
        </div>

         <div class="legend-rows">

    <!-- Row 1 -->
        <div class="legend-cell">
                <img class="legend-ico big" src="{{ Vite::asset('resources/images/stairs.png') }}" alt="stairs">
                  <span class="legend-label">STAIRS</span>
        </div>

        <div class="legend-cell">
                 <img class="legend-ico" src="{{ Vite::asset('resources/images/GPSblue.png') }}" alt="your location">
                    <span class="legend-label">YOUR LOCATION</span>
        </div>

    <!-- Row 2 -->
        <div class="legend-cell">
                <img class="legend-ico big" src="{{ Vite::asset('resources/images/MenWomen.png') }}" alt="restroom">
                    <span class="legend-label">RESTROOM</span>
        </div>

         <div class="legend-cell">
                <img class="legend-ico arrow" src="{{ Vite::asset('resources/images/BlueArrow.png') }}" alt="entrance">
                    <span class="legend-label">ENTRANCE</span>
        </div>
        
        <!-- Row 3 -->
        <div class="legend-cell">
                <img class="legend-ico big" src="{{ Vite::asset('resources/images/GPSyellow.png') }}" alt="destination">
                    <span class="legend-label">DESTINATION</span>
        </div>

        <div class="legend-cell">
                 <img class="legend-ico arrow" src="{{ Vite::asset('resources/images/RedArrow.png') }}" alt="exit">
                    <span class="legend-label">EXIT</span>
        </div>

    <!-- Row 4 (left is empty spacer, right is PWD) -->
        <div class="legend-cell is-empty"></div>
                <div class="legend-cell">
                    <img class="legend-ico" src="{{ Vite::asset('resources/images/PWD.png') }}" alt="pwd restroom">
                         <span class="legend-label">PWD RESTROOM</span>
         </div>

            </div>

        </section>


    </section>
        </aside>

        <!-- MAP PLACEHOLDER -->
        <section class="content">
            <div class="map-placeholder">
                <div class="map-grid"></div>
            </div>
        </section>

    </div>
</main>

</body>
</html>
