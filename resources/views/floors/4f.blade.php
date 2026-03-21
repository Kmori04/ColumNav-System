{{-- Floor: 4F --}}

<!-- 
|--------------------------------------------------------------------------
| CCS
|--------------------------------------------------------------------------
-->
<svg id="floor-4-svg" 
     class="path-guide-overlay" 
     viewBox="0 0 120 100" 
     preserveAspectRatio="none" 
     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 999; overflow: visible;">
    <g id="path-group"></g>
</svg>
<!-- B401 -->
@php
  $id = 108;
  $r  = $rooms[$id] ?? null;
  // Cleans up (4) for the 4th floor naming convention
  $name = $r?->room_name ? preg_replace('/\s*\(4\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     {{-- Locked to the style grid to prevent jumping in full-screen --}}
     data-col-start="220" 
     data-col-end="218.7" 
     data-row-start="27.5" 
     data-row-end="28" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 as per your Room 88 template --}}
     data-start-x="88.0" 
     data-start-y="84.6" 
     data-corridor-y="84.6" 
     
     {{-- BEHAVIOR --}}
     {{-- Thrust set to -6 to match the Room 88 template length --}}
     data-thrust="2" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 90 / 98; grid-row: 16 / 38; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- B401 -->

<!-- B402 -->
@php
  $id = 107;
  $r  = $rooms[$id] ?? null;
  // Cleans up (4) for the 4th floor naming convention
  $name = $r?->room_name ? preg_replace('/\s*\(4\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     {{-- Locked to the style grid to prevent jumping in full-screen --}}
     data-col-start="220" 
     data-col-end="218.7" 
     data-row-start="74.2" 
     data-row-end="28" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 as per your Room 88 template --}}
     data-start-x="88.0" 
     data-start-y="84.6" 
     data-corridor-y="84.6" 
     
     {{-- BEHAVIOR --}}
     {{-- Thrust set to -6 to match the Room 88 template length --}}
     data-thrust="2" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 90 / 98; grid-row: 38 / 60; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- B402 -->

<!-- B403 -->
@php
  $id = 106;
  $r  = $rooms[$id] ?? null;
  // Cleans up (4) for the 4th floor naming convention
  $name = $r?->room_name ? preg_replace('/\s*\(4\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     {{-- Locked to the style grid to prevent jumping in full-screen --}}
     data-col-start="220" 
     data-col-end="218.7" 
     data-row-start="123.2" 
     data-row-end="28" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 as per your Room 88 template --}}
     data-start-x="88.0" 
     data-start-y="84.6" 
     data-corridor-y="84.6" 
     
     {{-- BEHAVIOR --}}
     {{-- Thrust set to -6 to match the Room 88 template length --}}
     data-thrust="2" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 90 / 98; grid-row: 60 / 82; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- B106 -->

<div class="stairs stairs-right" style="grid-column: 92 / 98; grid-row: 82 / 89; margin: 1.5px;"></div>





<!-- 
|--------------------------------------------------------------------------
|  CR CCS
|--------------------------------------------------------------------------
-->

<!-- women Cr -->
@php
  $id = 124;
  $r  = $rooms[$id] ?? null;
  // Cleans up (3) or (4) from the room name
  $name = $r?->room_name ? preg_replace('/\s*\([34]\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="220" 
     data-col-end="218.7" 
     data-row-start="-7.7" 
     data-row-end="28" 

     {{-- PATH GEOMETRY --}}
     data-start-x="88.0" 
     data-start-y="84.6" 
     data-corridor-y="84.6" 
     
     {{-- BEHAVIOR --}}
     data-thrust="15" 
     data-last-line-size="3"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 100 / 105; grid-row: 16 / 27; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- womem Cr -->

<!-- male Cr -->
@php
  $id = 125;
  $r  = $rooms[$id] ?? null;
  // Cleans up (3) or (4) from the room name
  $name = $r?->room_name ? preg_replace('/\s*\([34]\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="220" 
     data-col-end="218.7" 
     data-row-start="169" 
     data-row-end="28" 

     {{-- PATH GEOMETRY --}}
     data-start-x="88.0" 
     data-start-y="84.6" 
     data-corridor-y="84.6" 
     
     {{-- BEHAVIOR --}}
     data-thrust="15" 
     data-last-line-size="-3"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 100 / 105; grid-row: 78 / 89; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- male Cr -->

<!-- 
|--------------------------------------------------------------------------
|   Convery
|--------------------------------------------------------------------------
-->

<!-- Convery -->
@php
  $id = 123;
  $r  = $rooms[$id] ?? null;
  // Clean up any (#) suffix from the room name
  $name = $r?->room_name ? preg_replace('/\s*\(\d+\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="top_left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="87" 
     data-col-end="26" 
     data-row-start="66" 
     data-row-end="6" 

     {{-- PATH GEOMETRY --}}
     data-start-x="21.7" 
     data-start-y="25.6" 
     data-corridor-y="25.6" 
     
     {{-- BEHAVIOR --}}
     data-thrust="0" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 10 / 26; grid-row: 36 / 86; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- Convery -->


<!-- WOMEN CR CONVERY -->
@php
  $id = 121;
  $r  = $rooms[$id] ?? null;
  // Clean up any (#) suffix from the room name
  $name = $r?->room_name ? preg_replace('/\s*\(\d+\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="top_left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="87" 
     data-col-end="26" 
     data-row-start="66" 
     data-row-end="-4" 

     {{-- PATH GEOMETRY --}}
     data-start-x="21.7" 
     data-start-y="25.6" 
     data-corridor-y="25.6" 
     
     {{-- BEHAVIOR --}}
     data-thrust="-4.3" 
     data-last-line-size="-9"
     {{-- ADDED: Points the line to the left at the very end --}}
     data-left-hook-size="2" 
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 10 / 16; grid-row: 18 / 27; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- WOMEN CR CONVERY -->


<!-- MEN CR CONVERY -->
@php
  $id = 122;
  $r  = $rooms[$id] ?? null;
  // Clean up any (#) suffix from the room name
  $name = $r?->room_name ? preg_replace('/\s*\(\d+\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-stair="top_left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="87" 
     data-col-end="26" 
     data-row-start="66" 
     data-row-end="-4" 

     {{-- PATH GEOMETRY --}}
     data-start-x="21.7" 
     data-start-y="25.6" 
     data-corridor-y="25.6" 
     
     {{-- BEHAVIOR --}}
     data-thrust="-4.3" 
     data-last-line-size="0"
     {{-- ADDED: Points the line to the left at the very end --}}
     data-left-hook-size="2" 
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 10 / 16; grid-row: 27 / 36; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- MEN CR CONVERY -->


<div class="stairs stairs-rotated-down" style="grid-column: 21 / 26; grid-row: 17 / 26; margin: 1.5px;"></div>


<div class="stairs stairs-left" style="grid-column: 20 / 26; grid-row: 86 / 93; margin: 1.5px;"></div>







<!-- 
|--------------------------------------------------------------------------
|  BACKGROUND
|--------------------------------------------------------------------------
-->
<div class="floor-bg floor4-bg-mid"></div>
<div class="floor-bg floor4-bg"></div>

<!-- 
|--------------------------------------------------------------------------
| GREY LINE
|--------------------------------------------------------------------------
-->

<!-- CCS -->
<div class="horizontal-path" style="grid-column: 87 / 103; grid-row: 11 / 14;"></div>
<div class="path-container" style="grid-column: 82 / 130; grid-row: 11 / 16;"></div>
<div class="path-container" style="grid-column: 87 / 88; grid-row: 12 / 94;"></div>
<div class="horizontal-path" style="grid-column: 87 / 90; grid-row: 27 / 30;"></div>
<div class="horizontal-path" style="grid-column: 87 / 90; grid-row: 48 / 51;"></div>
<div class="horizontal-path" style="grid-column: 87 / 90; grid-row: 70 / 73;"></div>
<div class="horizontal-path" style="grid-column: 87 / 91; grid-row: 84 / 87;"></div>

<div class="horizontal-path" style="grid-column: 87 / 103; grid-row: 91 / 94;"></div>
<div class="path-container" style="grid-column: 82 / 130; grid-row: 89 / 94;"></div>



<!-- 
|--------------------------------------------------------------------------
|   Convery GREY LINES
|--------------------------------------------------------------------------
-->
<div class="horizontal-path" style="grid-column: 14 / 20; grid-row: 88 / 91;"></div>
<div class="path-container" style="grid-column: 11 / 17; grid-row: 86 / 91;"></div>


<div class="path-container" style="grid-column: 21 / 26; grid-row: 26 / 36;"></div>
<div class="horizontal-path" style="grid-column: 16 / 24; grid-row: 30 / 33;"></div>

<div class="path-container" style="grid-column: 16 / 22; grid-row: 21 / 32;"></div>
<div class="horizontal-path" style="grid-column: 16 / 19; grid-row: 21 / 24;"></div>

