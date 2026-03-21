{{-- Floor: 3F --}}
{{-- Put ONLY the map blocks here --}}

<!-- Floor 3 -->

<!-- 
|--------------------------------------------------------------------------
| TOP LEFT CR
|--------------------------------------------------------------------------
-->
<div class="stairs stairs-left" style="grid-column: 2 / 8; grid-row: 8 / 14; margin: 1.5px;"></div>

<svg id="floor-3-svg" 
     class="path-guide-overlay" 
     viewBox="0 0 120 100" 
     preserveAspectRatio="none" 
     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 999; overflow: visible;">
    <g id="path-group"></g>
</svg>
<!-- FEMALE CR -->
@php
  $id = 88;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     data-row-end="23.5" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 to move it away from the edge for better visibility --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust increased to -10 to make the horizontal line much longer/larger --}}
     data-thrust="-6" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 2 / 8; grid-row: 14 / 22; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- FEMALE CR -->
 

<!-- 
|--------------------------------------------------------------------------
| LEFT CBA
|--------------------------------------------------------------------------
-->

 <!-- LEFT A306 -->
@php
  $id = 87;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     {{-- Set to 43.5 to center the path within grid-row 22/34 --}}
     data-row-end="43.5" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10.0 to stay aligned with the main vertical path line --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust set to -6 to match your visibility style --}}
     data-thrust="-3" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 5 / 11; grid-row: 22 / 34; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A306 -->


 <!-- LEFT A305 -->
@php
  $id = 86;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     {{-- Adjusted to center within grid-row 34/46 --}}
     data-row-end="72.4" 

     {{-- PATH GEOMETRY --}}
     {{-- Using 10.0 to stay visible and aligned with Rooms 87/88 --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust set to -6 for consistent bold look --}}
     data-thrust="-3" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 5 / 11; grid-row: 34 / 46; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A305 -->

 <!-- LEFT A304 -->
{{-- ID 85 --}}
@php
  $id = 85;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     {{-- Centered for grid-row 46/58 --}}
     data-row-end="99.0" 

     {{-- PATH GEOMETRY --}}
     {{-- Standardized to 10.0 for visibility on the 0-120 scale --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6"  
     
     {{-- BEHAVIOR --}}
     {{-- Set to -6 for a bold, consistent line length --}}
     data-thrust="-3" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 5 / 11; grid-row: 46 / 58; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A304 -->


 <!-- LEFT A302/A303 -->
@php
  $id = 118;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     {{-- Centered for grid-row 58/70 --}}
     data-row-end="125.4" 

     {{-- PATH GEOMETRY --}}
     {{-- Standardized to 10.0 to stay aligned with the CBA column --}}
     data-start-x="10.0" 
      data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- Set to -6 for consistent bold line length --}}
     data-thrust="-3" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 5 / 11; grid-row: 58 / 70; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A302/A303 -->


 <!-- LEFT A301 -->
@php
  $id = 84;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     {{-- Centered for grid-row 70/82 --}}
     data-row-end="149.6" 

     {{-- PATH GEOMETRY --}}
     {{-- Using 10.0 to stay aligned with the CBA column logic --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- Set to -6 for consistent bold line length --}}
     data-thrust="-3" 
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 5 / 11; grid-row: 70 / 82; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A301 -->


<div class="stairs stairs-left" style="grid-column: 5 / 11; grid-row: 82 / 89; margin: 1.5px;"></div>

<!-- 
|--------------------------------------------------------------------------
| TOP C BUILDING TOP PART
|--------------------------------------------------------------------------
-->

<div class="stairs" style="grid-column: 13 / 17; grid-row: 3 / 13; margin: 1.5px;"></div>

 <!-- C301 -->
@php
  $id = 89;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     data-row-end="34.5" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 to move it away from the edge for better visibility --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust increased to -10 to make the horizontal line much longer/larger --}}
     data-thrust="5.2" 
     data-last-line-size="-2"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 16 / 25; grid-row: 13 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; ">{{ $name ?? '' }}</span>
</div>
 <!-- C301 -->

 <!-- C302 -->
@php
  $id = 90;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     data-row-end="34.5" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 to move it away from the edge for better visibility --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust increased to -10 to make the horizontal line much longer/larger --}}
     data-thrust="14.7" 
     data-last-line-size="-2"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 25 / 34; grid-row: 13 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- C302 -->

 <!-- C303 -->
@php
  $id = 91;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     data-row-end="34.5" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 to move it away from the edge for better visibility --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust increased to -10 to make the horizontal line much longer/larger --}}
     data-thrust="23.4" 
     data-last-line-size="-2"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 34 / 43; grid-row: 13 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- C303 -->

 <!-- C304 -->
@php
  $id = 92;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="29" 
     data-col-end="43" 
     data-row-start="10" 
     data-row-end="34.5" 

     {{-- PATH GEOMETRY --}}
     {{-- start-x set to 10 to move it away from the edge for better visibility --}}
     data-start-x="10.0" 
     data-start-y="85.6" 
     data-corridor-y="85.6" 
     
     {{-- BEHAVIOR --}}
     {{-- data-thrust increased to -10 to make the horizontal line much longer/larger --}}
     data-thrust="26.4" 
     data-last-line-size=""
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 43 / 52; grid-row: 19 / 26; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- C304 -->

 
<!-- 
|--------------------------------------------------------------------------
| CCS
|--------------------------------------------------------------------------
-->
 
 <!-- B301 -->
 <!-- B301 -->
@php
  $id = 97;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="316.4"
     data-row-start="26"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="36.4"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x="79.0"
     data-start-y="85.6"
     data-corridor-y="85.6"
     
     {{-- BEHAVIOR --}}
     {{-- High thrust value to reach the far-right column 81 --}}
     data-thrust="2.0"
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 87; grid-row: 26 / 38; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
 <!-- B301 -->


 <!-- B302 -->
@php
  $id = 96;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="316.4"
     data-row-start="26"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="65.4"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x="79.0"
     data-start-y="85.6"
     data-corridor-y="85.6"
     
     {{-- BEHAVIOR --}}
     {{-- High thrust value to reach the far-right column 81 --}}
     data-thrust="2.0"
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 87; grid-row: 38 / 50; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
 <!-- B302 -->


 <!-- B303 -->
@php
  $id = 95;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="316.4"
     data-row-start="26"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="91.8"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x="79.0"
     data-start-y="85.6"
     data-corridor-y="85.6"
     
     {{-- BEHAVIOR --}}
     {{-- High thrust value to reach the far-right column 81 --}}
     data-thrust="2.0"
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 87; grid-row: 50 / 61; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
 <!-- B303 -->


<!-- B304 -->
@php
  $id = 94;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="316.4"
     data-row-start="26"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="113.8"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x="79.0"
     data-start-y="85.6"
     data-corridor-y="85.6"
     
     {{-- BEHAVIOR --}}
     {{-- High thrust value to reach the far-right column 81 --}}
     data-thrust="2.0"
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 87; grid-row: 61 / 70; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold; font-size: 0.58rem;">{{ $name ?? '' }}</span>
</div>
<!-- B304 -->


 <!-- B305 -->
@php
  $id = 93;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="316.4"
     data-row-start="26"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="138.2"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x="79.0"
     data-start-y="85.6"
     data-corridor-y="85.6"
     
     {{-- BEHAVIOR --}}
     {{-- High thrust value to reach the far-right column 81 --}}
     data-thrust="2.0"
     data-last-line-size="0"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 87; grid-row: 70 / 83; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
 <!-- B305 -->


<div class="stairs stairs-right" style="grid-column: 82 / 87; grid-row: 83 / 89; margin: 1.5px;"></div>


<!--
|--------------------------------------------------------------------------
|  CR CCS
|--------------------------------------------------------------------------
-->

 <!-- B300 -->
@php
  $id = 120;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     /* Increased to reach far-right columns 81/87 */
     data-col-start="265"
     data-col-end="132.4"
     data-row-start="-3"
     /* Increased to 78 to reach the center of grid-row 26/38 */
     data-row-end="32"

     /* PATH GEOMETRY */
     data-start-x="79"
     data-start-y="85.5"
     data-start-thrust="0"
     data-corridor-y="85.5"
     
     /* BEHAVIOR */
     data-last-line-offset="-6"
     data-last-line-size="3" {{-- Upward kick at the end --}}
     data-side="right2"
     data-thrust="13.5"

     onclick="drawYellowPath(this)"
     style="grid-column: 88 / 93; grid-row: 26 / 37; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- B300 -->
 
<!-- 3rd floor CR -->
@php
  $id = 119;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="316.4"
     data-row-start="26"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="171.2"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x="79.0"
     data-start-y="85.6"
     data-corridor-y="85.6"
     
     {{-- BEHAVIOR --}}
     {{-- High thrust value to reach the far-right column 81 --}}
     data-thrust="13.5"
     data-last-line-size="-2.5"
     data-side="right2"

     onclick="drawYellowPath(this)"
     style="grid-column: 88 / 93; grid-row: 78 / 89; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- 3rd floor CR -->

<!--
|--------------------------------------------------------------------------
|  LIKOD NG CCS
|--------------------------------------------------------------------------
-->

 <!-- V307 -->
@php
  $id = 98;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"
     
     data-thrust="4.5"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="-63.1"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="0"

     onclick="drawYellowPath(this)"
     style="grid-column: 103 / 115; grid-row: 9 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
 <!-- V307 -->


 <!-- V306 -->
@php
  $id = 99;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"
     
     data-thrust="4.5"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="-53.1"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="-1.5"

     onclick="drawYellowPath(this)"
     style="grid-column: 108 / 114; grid-row: 20 / 34; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
<!-- V306 -->


<!-- V305 -->
@php
  $id = 100;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"
     
     data-thrust="4.5"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="-40.1"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="-1.5"

     onclick="drawYellowPath(this)"
     style="grid-column: 108 / 114; grid-row: 34 / 47; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
 <!-- B305 -->


<div class="stairs stairs-right" style="grid-column: 82 / 87; grid-row: 83 / 89; margin: 1.5px;"></div>





<!-- V304 -->
@php
  $id = 101;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"
     
     data-thrust="4.5"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="-26"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="-1.5"

     onclick="drawYellowPath(this)"
     {{-- Updated grid-row to 47 / 61 --}}
     style="grid-column: 108 / 114; grid-row: 47 / 61; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
<!-- V304 -->


<!-- V303 -->
@php
  $id = 102;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"
     
     data-thrust="4.5"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="-12"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="-1.5"

     onclick="drawYellowPath(this)"
     {{-- Updated grid-row to 61 / 75 --}}
     style="grid-column: 108 / 114; grid-row: 61 / 75; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
<!-- V303 -->


<!-- V302 -->
@php
  $id = 103;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"  
     
     data-thrust="0"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="0"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="-6"

     onclick="drawYellowPath(this)"
     {{-- Updated grid-row to 75 / 87 --}}
     style="grid-column: 108 / 114; grid-row: 75 / 87; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
<!-- V302 -->

<div class="stairs" style="grid-column: 99 / 103; grid-row: 85 / 94; margin: 1.5px;"></div>

<!-- V301 -->
@php
  $id = 104;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp

<div class="room room-3f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     {{-- GRID POSITIONING --}}
     data-col-start="81"
     data-col-end="440 .2"
     data-row-start="154"
     {{-- Centered for grid-row 26/38 --}}
     data-row-end="16.5"

     {{-- PATH GEOMETRY --}}
     {{-- Main corridor anchor point --}}
     data-start-x=100.2"
     data-start-y="83.6"
     data-corridor-y="83.6"  
     
     data-thrust="4.5"
     
     {{-- SECOND TO LAST LINE (Vertical Kick) --}}
     data-last-line-size="4"
     
     {{-- LAST LINE (Left Hook) --}}
     data-left-hook-size="-0"

     onclick="drawYellowPath(this)"
     {{-- Updated grid-column to 103 / 110 and grid-row to 87 / 94 --}}
     style="grid-column: 103 / 110; grid-row: 87 / 94; margin: 1.5px; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; font-weight: bold;">{{ $name ?? '' }}</span>
</div>
<!-- V301 -->




<!-- 
|--------------------------------------------------------------------------
|  BACKGROUND 
|--------------------------------------------------------------------------
-->
<div class="floor-bg floor3-bg"></div>
<div class="floor-bg floor3-bg-mid"></div>
<div class="floor-bg floor3-bg-rightpatch"></div>


<!-- 
|--------------------------------------------------------------------------
| GREY LINE
|--------------------------------------------------------------------------
-->

<div class="horizontal-path" style="grid-column: 11 / 81; grid-row: 85 / 88;"></div>
<div class="path-container" style="grid-column: 2 / 28; grid-row: 14 / 86;"></div>
<div class="path-container" style="grid-column: 77 / 78; grid-row: 21 / 94;"></div>
<div class="horizontal-path" style="grid-column: 15 / 42; grid-row: 22 / 25;"></div>


<!-- 
|--------------------------------------------------------------------------
| CBA LEFT SIDE 
|--------------------------------------------------------------------------
-->
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 74 / 77;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 63 / 66;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 51 / 54;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 39 / 42;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 26 / 29;"></div>

<!-- 
|--------------------------------------------------------------------------
| TOP LEFT
|--------------------------------------------------------------------------
-->
<div class="path-container" style="grid-column: 1 / 27; grid-row: 10 / 20; transform: translateX(-40px);"> </div>
<div class="horizontal-path" style="grid-column: 8 / 15; grid-row: 17 / 20;"></div>
<div class="horizontal-path" style="grid-column: 8 / 11; grid-row: 10 / 13;"></div>

<!-- SMALL PATH TOP PART -->
<div class="path-container" style="grid-column: 10 / 67; grid-row: 20 / 25;"></div>
<div class="path-container" style="grid-column: 1 / 65; grid-row: 20 / 25; transform: translateX(-40px);"></div>
<div class="path-container" style="grid-column: 1 / 65; grid-row: 20 / 25; transform: translateX(-160px);"></div>

<!-- CCS -->
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 30 / 33;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 43 / 46;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 55 / 58;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 65 / 68;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 76 / 79;"></div>
<div class="horizontal-path" style="grid-column: 77 / 91; grid-row: 91 / 94;"></div>
<div class="path-container" style="grid-column: 10 / 67; grid-row: 20 / 25;"></div>
<div class="path-container" style="grid-column: 62 / 120; grid-row: 89 / 94;"></div>

<!-- LIKOD CCS -->
<div class="horizontal-path" style="grid-column: 77 / 106; grid-row: 21 / 24;"></div>
<div class="path-container" style="grid-column: 62 / 120; grid-row: 21 / 26;"></div>


<!--TOP LEFT AND LIKOD NG CCS " -->
<div class="path-container" style="grid-column: 110 / 92; grid-row: 79 / 85;"></div>
<div class="path-container" style="grid-column: 120 / 91; grid-row: 20 / 85;"></div>

<div class="horizontal-path" style="grid-column: 106 / 108; grid-row: 26 / 29;"></div>
<div class="horizontal-path" style="grid-column: 106 / 108; grid-row: 39 / 42;"></div>
<div class="horizontal-path" style="grid-column: 106 / 108; grid-row: 53 / 56;"></div>
<div class="horizontal-path" style="grid-column: 106 / 108; grid-row: 67/ 70;"></div>
<div class="horizontal-path" style="grid-column: 106 / 108; grid-row: 79/ 82;"></div>
<div class="horizontal-path" style="grid-column: 101 / 108; grid-row: 79 / 82;"></div>