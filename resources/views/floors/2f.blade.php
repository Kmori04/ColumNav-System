{{-- Floor: 2F --}}
{{-- Put ONLY the map blocks here --}}

<!-- Floor 2 -->

<!-- 
|--------------------------------------------------------------------------
| BACKGROUND
|--------------------------------------------------------------------------
-->
<div class="floor-bg floor2-bg"></div>

<div class="floor-bg floor2-bg-mid"></div>

<div class="floor-bg floor2-bg-bottom"></div>
<!-- Small Patch -->
<div class="floor-bg floor2-bg-rightpatch"></div>




<!-- 
|--------------------------------------------------------------------------
| TOP PART
|--------------------------------------------------------------------------
-->
    <!-- TOP PART -->

 <!-- C201 -->
@php
    $id = 48;
    $r = $rooms[$id] ?? null;
    $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description available.' }}"
     
     /* GRID POSITIONING */
     data-col-start="1"
     data-col-end="77.5"
     data-row-start="1"
     data-row-end="23" {{-- Decreased from 22 to 20 to shorten the vertical drop --}}
     
     /* START PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="15.2"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 16 / 22; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
    <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>

<svg id="svg-overlay"
     viewBox="0 0 100 100"
     preserveAspectRatio="none"
     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 10;">
    <g id="path-group"></g>
</svg>

<!-- C202 -->
@php
    $id = 49;
    $r  = $rooms[$id] ?? null;
    $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="50" 
     data-col-end="56"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 22 / 29; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
    <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C202 -->

<!-- C203 -->
@php
  $id = 50;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="50" 
     data-col-end="89"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 29 / 38; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C203 -->

<!-- C204 -->
@php
  $id = 51;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="50" 
     data-col-end="125"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 38 / 46; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none; ">{{ $name ?? '' }}</span>
</div>

<!-- C204 -->

    <div class="stairs" style="grid-column: 46 / 51; grid-row: 6 / 14; margin: 1.5px;"></div>

<!-- MIS OFFICE -->
@php
  $id = 52;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\s*\)$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="50" 
     data-col-end="107"
     data-row-start="18.2"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     
     /* RIGHT2 SETTINGS */
     data-side="right2"
     data-thrust="1" {{-- Increase this to make the right-pointing line longer --}}
     
     onclick="drawYellowPath(this)"
     style="grid-column: 40 / 46; grid-row: 19 / 25; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- MIS OFFICE -->


<!-- C206 -->
@php
  $id = 53;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="50" 
     data-col-end="173"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 51 / 57; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C206 -->


<!-- C207 -->
@php
  $id = 54;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="52" 
     data-col-end="202"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 57 / 64; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C207 -->

<!-- C208 -->
@php
  $id = 55;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="83.4" 
     data-col-end="202"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 64 / 71; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C208 -->

<!-- C209 -->
@php
  $id = 56;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="119.6" 
     data-col-end="201"
     data-row-start="1"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 71 / 78; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C209 -->

    <div class="stairs" style="grid-column: 78 / 83; grid-row: 6 / 14; margin: 1.5px;"></div>

    
<!-- PRINTING CENTER -->
@php
  $id = 47;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="176.6" 
     data-col-end="197"
     data-row-start="1"
     data-row-end="20" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 83 / 89; grid-row: 6 / 12; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- PRINTING CENTER -->

<!-- C210 -->
@php
  $id = 113;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="far_right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
      data-id="{{ $id }}"
     data-stair="far_right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="195.9 " 
     data-col-end="191.2"
     data-row-start="-158"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="83.5" 
     data-start-y="77.7"  
     data-start-thrust="0" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="-3.4"
     data-thrust="3.1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 89 / 97; grid-row: 6 / 12; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- C110 -->

    <!-- 
|--------------------------------------------------------------------------
| LEFT SIDE 2ND FLOOR
|--------------------------------------------------------------------------
-->
   
    <div class="stairs stairs-left" style="grid-column: 2 / 9; grid-row: 4 / 10;"></div>

<!-- CR -->
@php
  $id = 114;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="5" 
     data-col-end="25"
     data-row-start="2"
     data-row-end="20.5"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="12.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0" {{-- Ensures no vertical tail --}}
     data-thrust="0"         {{-- Ensures no horizontal tail --}}
     data-side="hide"        {{-- Prevents the default 'upright' logic --}}
     
     onclick="drawYellowPath(this)"
     style="grid-column: 1 / 7; grid-row: 10 / 16; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- CR -->
 
{{-- ID 82 --}}
@php
  $id = 82;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="5" 
     data-col-end="25"
     data-row-start="17.3"
     data-row-end="20.5"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="19.2"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 9; grid-row: 16 / 25; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- VP OFFICE -->
@php
  $id = 81;
  $r  = $rooms[$id] ?? null;
  $forcedName = "A207 VP Office";         
  $labelName  = "A207<br>VP<br>Office";   
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $forcedName }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="5" 
     data-col-end="25"
     data-row-start="2"
     data-row-end="56.2"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="28.5"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0" {{-- Ensures no vertical tail --}}
     data-thrust="0"         {{-- Ensures no horizontal tail --}}
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 2 / 7; grid-row: 25 / 33; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{!! $labelName !!}</span>
</div>
<!-- VP OFFICE -->


<!-- HR OFFICE -->
@php
  $id = 80;
  $r  = $rooms[$id] ?? null;
  $forcedName = "207 HR Office";   // for data-name
  $labelName  = "207<br>HR<br>Office"; // for display
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $forcedName }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="-3" 
     data-col-end="36"
     data-row-start="18"
     data-row-end="55"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="35.2"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 10; grid-row: 33 / 40; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{!! $labelName !!}</span>
</div>
<!-- HR OFFICE -->
 
<!-- Deifi finance Office -->
@php
  $id = 79;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="-3" 
     data-col-end="36"
     data-row-start="38"
     data-row-end="51"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="42.5"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 10; grid-row: 40 / 47; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- Deifi finance Office -->

<!-- A204 -->
@php
  $id = 78;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="-6" 
     data-col-end="39"
     data-row-start="33.4"
     data-row-end="71"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="49.5"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 10; grid-row: 47 / 54; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- A204 -->

<!-- A203 -->
@php
  $id = 77;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="5" 
     data-col-end="25"
     data-row-start="2"
     data-row-end="117.5"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="56.3"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0" {{-- Ensures no vertical tail --}}
     data-thrust="0"         {{-- Ensures no horizontal tail --}}
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 1 / 7; grid-row: 54 / 60; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- A203 -->

<!-- A202 -->
@php
  $id = 76;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="left"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="5" 
     data-col-end="25"
     data-row-start="15.7"
     data-row-end="117.5"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="62.6"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0" {{-- Ensures no vertical tail --}}
     data-thrust="0"         {{-- Ensures no horizontal tail --}}
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 1 / 7; grid-row: 60 / 66; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- A202 -->

<!-- A201 -->
@php
  $id = 75;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="-6" 
     data-col-end="39"
     data-row-start="53"
     data-row-end="91"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="67.5"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 10; grid-row: 66 / 72; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- A201 -->


    <div class="stairs stairs-left" style="grid-column: 4 / 10; grid-row: 72 / 77;"></div>
    
<!-- CR male -->
@php
  $id = 115;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="-6" 
     data-col-end="39"
     data-row-start="80"
     data-row-end="90.6"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="79.5"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 10; grid-row: 77 / 83; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- CR male -->

<!-- H201 -->
@php
  $id = 116;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING */
     data-col-start="-6" 
     data-col-end="39"
     data-row-start="93.4"
     data-row-end="90.6"
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" 
     data-corridor-y="85.6"
     
     /* BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="1"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 4 / 10; grid-row: 83 / 89; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H201 -->


    <!-- 
|--------------------------------------------------------------------------
| Left side ng library Bottom part
|--------------------------------------------------------------------------
-->

<!-- H202 -->
@php
  $id = 66; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="49.4" 
     data-col-end="0"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="75.2"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 8 / 16; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H202 -->


<!-- H203 -->
@php
  $id = 67; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}" 
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="72.4" 
     data-col-end="10"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 16 / 24; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H203 -->


<!-- H204 -->
@php
  $id = 68; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="72.4" 
     data-col-end="43.1"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 24 / 32; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H204 -->

<!-- H205 -->
@php
  $id = 69; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new" 
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="72.4" 
     data-col-end="78.1"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 32 / 40; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H205 -->


<!-- H206 -->
@php
  $id = 70; $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="84.7" 
     data-col-end="98.1"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="9.5" 
     data-start-y="73.7"  
     data-start-thrust="2" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 40 / 48; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H206 -->

<!-- H207 -->
@php
  $id = 71; $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new" 
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="84.7" 
     data-col-end="132.8"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="60" 
     data-start-y="77.7"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 48 / 56; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H207 -->


<!-- H208 -->
@php
  $id = 72; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new" 
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}" 
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="84.7" 
     data-col-end="169.8"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="60" 
     data-start-y="77.7"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 56 / 66; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H208 -->


<!-- H209 -->
@php
  $id = 73; $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}" 
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="126.7" 
     data-col-end="169"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="60" 
     data-start-y="77.7"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 66 / 74; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H209 -->

<!-- H210 -->
@php
  $id = 74; $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new" 
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-stair="right"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="165.9 " 
     data-col-end="167.1"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="60" 
     data-start-y="77.7"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 74 / 82; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H210 -->

<!-- H211 -->
@php
  $id = 117;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="195.9 " 
     data-col-end="179.5"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="60" 
     data-start-y="77.7"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 82 / 90; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- H211 -->


<!-- Graduate School library -->
@php
  $id = 65;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="195.9 " 
     data-col-end="226.5"
     data-row-start="1"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="83.5" 
     data-start-y="77.7"  
     data-start-thrust="0" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 90 / 106; grid-row: 89 / 98; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- Graduate School library -->


    <!-- Taas ng Library No info -->
    <!-- C211 -->
@php
  $id = 126;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="far_right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="195.9 " 
     data-col-end="191.2"
     data-row-start="-158"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="83.5" 
     data-start-y="77.7"  
     data-start-thrust="0" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="4.76"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 96 / 105; grid-row: 12 / 24; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
    <!-- C111 -->

    <!-- below (no hover) Pader -->
    <div class="room" style="grid-column: 92 / 106; grid-row: 24 / 51; border: 1.5px solid #6b93a3; background: white; pointer-events: none;"></div>

  
<!-- ID SERVICE -->
@php
  $id = 62;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="195.9 " 
     data-col-end="191.2"
     data-row-start="-50"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="83.5" 
     data-start-y="77.7"  
     data-start-thrust="0" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="1.2"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 92 / 98; grid-row: 51 / 78; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
<!-- ID office -->
 
    <!-- stairs sa Library -->
    <div class="stairs" style="grid-column: 98 / 103; grid-row: 68 / 78; margin: 1.5px;"></div>
    
<!-- Library-->
@php
  $id = 63;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="far_right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
    /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="212 " 
     data-col-end="240"
     data-row-start="1"
     data-row-end="183" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="83.5" 
     data-start-y="77.7"  
     data-start-thrust="0" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 106 / 118; grid-row: 24 / 94; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- Library-->

 <!-- 
|--------------------------------------------------------------------------
| CCS Building
|--------------------------------------------------------------------------
-->
     <!-- CCS -->
 <!-- CCS B201 -->
@php
  $id = 57; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new" 
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="115.6" 
     data-col-end="200"
     data-row-start="33.5"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="28"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 75 / 81; grid-row: 23 / 36; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
 <!-- CCS B201 -->

  <!-- CCS B202 -->
@php
  $id = 58; 
  $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new" 
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}" 
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="115.6" 
     data-col-end="200"
     data-row-start="33.5"
     data-row-end="53.4 " {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="41.4"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 75 / 81; grid-row: 36 / 49; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
  <!-- CCS B202 -->


  <!-- CCS B203 -->
@php
  $id = 59; $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="115.6" 
     data-col-end="200"
     data-row-start="33.5"
     data-row-end="84 " {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="55.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 75 / 81; grid-row: 49 / 62; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
  <!-- CCS B203 -->

  <!-- CCS B204 -->
@php
  $id = 60; $r = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="115.6" 
     data-col-end="200"
     data-row-start="33.5"
     data-row-end="110 " {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="67"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 75 / 81; grid-row: 62 / 75; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $name ?? '' }}</span>
</div>
  <!-- CCS B204 -->

  
    <div class="stairs stairs-right" style="grid-column: 75 / 81; grid-row: 75 / 82; margin: 1.5px;"></div>


<!-- CCS CR MEN -->
@php
  $id = 61;
  $r  = $rooms[$id] ?? null;
  $forcedName = "Male CR";
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $forcedName }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="83.4" 
     data-col-end="278"
     data-row-start="16"
     data-row-end="24" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="59.9" 
     data-start-y="77.5"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="15.2"
     
     /* SIZE & BEHAVIOR SETTINGS */
     data-last-line-offset="0"
     data-last-line-size="0"
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 85; grid-row: 23 / 34; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label" style="pointer-events: none;">{{ $forcedName }}</span>
</div>
<!-- CCS CR MEN -->


<!-- CCS CR WOMEN -->
@php
  $id = 64;
  $r  = $rooms[$id] ?? null;
  $forcedName = "CR Female";
@endphp

<div class="room room-2f-new"
     data-id="{{ $id }}"
     data-stair="right"
     data-name="{{ $forcedName }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     
     /* GRID POSITIONING (Shifted right for Room 49) */
     data-col-start="195.9 " 
     data-col-end="165"
     data-row-start="-26"
     data-row-end="187" {{-- Matching the shortened drop from Room 48 --}}
     
     /* PATH GEOMETRY */
     data-start-x="60" 
     data-start-y="77.7"  
     data-start-thrust="-1" {{-- Shortened starting tail --}}
     data-corridor-y="85.5"
     
     /* BEHAVIOR SETTINGS */
     data-thrust="0"
     data-side="hide"
     
     onclick="drawYellowPath(this)"
     style="grid-column: 81 / 85; grid-row: 63 / 75; border: 1.5px solid #6b93a3; background: white; cursor: pointer; position: relative; z-index: 5;">
  <span class="room-label"
        style="font-size:9px; line-height:1; letter-spacing:-0.2px; text-align:center; pointer-events: none;">
    CR<br>Female
  </span>
</div>
<!-- CCS CR WOMEN -->
    

</div>

<!-- GREY "LONG" CONTAINER LINE -->
<div class="horizontal-path" style="grid-column: 10 / 106; grid-row: 85 / 88;"></div>

<div class="path-container" style="grid-column: 24 / 1; grid-row: 5 / 86;"></div>

<div class="path-container" style="grid-column: 72 / 74; grid-row: 17 / 86;"></div>
<div class="horizontal-path" style="grid-column: 12 / 96; grid-row: 15 / 18;"></div>
<div class="path-container" style="grid-column: 105 / 75; grid-row: 17 / 86;"></div>
<div class="path-container" style="grid-column: 54 / 22; grid-row: 17 / 24;"></div>

<!-- GREY "SHORT" BOTTOM PART -->
<div class="path-container" style="grid-column: 61 / 60; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 69 / 70; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 77 / 97; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 77 / 78; grid-row: 85 / 89;"></div>
 <div class="path-container" style="grid-column: 96 / 99; grid-row: 87 / 89;"></div>
<div class="path-container" style="grid-column: 96 / 105; grid-row: 87 / 78;"></div>
<div class="path-container" style="grid-column: 48 / 56; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 41 / 47 ; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 33 / 39; grid-row: 86 / 89;"></div>
<div class="path-container" style="grid-column: 25 / 31; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 18 / 22; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 12 / 13; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 82 / 84; grid-row: 87 / 75;"></div>

<!-- ===(GREY CONTAINER LINE) ""CBA""=== -->
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 79 / 82; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 73 / 76; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 67 / 70; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 7 / 13; grid-row: 62 / 65; transform: scaleX(0.92); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 7 / 13; grid-row: 56 / 59; transform: scaleX(0.92); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 49 / 52; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 42 / 45; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 35 / 38; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 7 / 13; grid-row: 28 / 31; transform: scaleX(0.92); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 10 / 13; grid-row: 19 / 22; transform: scaleX(0.83); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 7 / 13; grid-row: 12 / 15; transform: scaleX(0.92); transform-origin: left center;"></div>
<div class="horizontal-path" style="grid-column: 9 / 13; grid-row: 6 / 9; transform: scaleX(0.875); transform-origin: left center;"></div>
 

<!-- ===(GREY CONTAINER LINE) ""CCS""=== -->
<div class="horizontal-path" style="grid-column: 73 / 75; grid-row: 28 / 31;"></div>
<div class="horizontal-path" style="grid-column: 73 / 75; grid-row: 41 / 44;"></div>
<div class="horizontal-path" style="grid-column: 73 / 75; grid-row: 55 / 58;"></div>
<div class="horizontal-path" style="grid-column: 73 / 75; grid-row: 67 / 70;"></div>
<div class="horizontal-path" style="grid-column: 73 / 75; grid-row: 77 / 80;"></div>
 
<!--SMALL PATH TOP PART " -->
 
<div class="path-container" style="grid-column: 91 / 95; grid-row: 12 / 18;"></div>
<div class="path-container" style="grid-column: 82 / 90; grid-row: 12 / 18;"></div>
<div class="path-container" style="grid-column: 80 / 81; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 73 / 77; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 80 / 87; grid-row: 16 / 23;"></div>
<div class="path-container" style="grid-column: 64 / 70; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 49 / 71; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 34 / 71; grid-row: 14 / 18;"></div> 
<div class="path-container" style="grid-column: 27 / 69; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 12 / 71; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 5 / 62; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 3 / 49; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 3 / 36; grid-row: 14 / 18;"></div>
<div id="adminPathSpecial" class="horizontal-path" style="grid-column: 38 / 40; grid-row: 21 / 24;"></div>
<!--TOP LEFT AND LIKOD NG CCS " -->
 
<div class="horizontal-path" style="grid-column: 89 / 92; grid-row: 64 / 67;"></div>
 