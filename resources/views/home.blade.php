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

@php
  use App\Models\Room;

  // ✅ preload rooms for each floor (keyed by room_id so $rooms[$id] works)
  $rooms1 = Room::where('is_active', 1)->where('floor_number', 1)
    ->get(['room_id','room_name','room_description'])->keyBy('room_id');

  $rooms2 = Room::where('is_active', 1)->where('floor_number', 2)
    ->get(['room_id','room_name','room_description'])->keyBy('room_id');

  $rooms3 = Room::where('is_active', 1)->where('floor_number', 3)
    ->get(['room_id','room_name','room_description'])->keyBy('room_id');

  $rooms4 = Room::where('is_active', 1)->where('floor_number', 4)
    ->get(['room_id','room_name','room_description'])->keyBy('room_id');
@endphp

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
      <select class="floors-select" id="floorSelect">
        <option value="1F" selected>1F</option>
        <option value="2F" selected>2F</option>
        <option value="3F">3F</option>
        <option value="4F">4F</option>
      </select>
    </div>
  </div>
</header>

<main class="page">
  <div class="layout">
    <aside class="sidebar">
      <div class="sidebar-wrapper">

        <section class="card">
          <div class="card-head">
            <h2 class="card-title">DESCRIPTION</h2>
          </div>

          <div class="card-body">
            <div class="description-box" id="roomDescBox">
              <div id="roomDescText">Tap any room box on the map to see its description here.</div>
            </div>
          </div>
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
              <div class="map-builder floor-1" id="mapBuilder">
                {{-- Default floor shown on load --}}
                @includeIf('floors.1f', ['rooms' => $rooms1])
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

<template id="tpl-1F">@includeIf('floors.1f', ['rooms' => $rooms1])</template>
<template id="tpl-2F">@includeIf('floors.2f', ['rooms' => $rooms2])</template>
<template id="tpl-3F">@includeIf('floors.3f', ['rooms' => $rooms3])</template>
<template id="tpl-4F">@includeIf('floors.4f', ['rooms' => $rooms4])</template>

</body>
</html>