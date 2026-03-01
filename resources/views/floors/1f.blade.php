{{-- Floor: 1F --}}
{{-- Put ONLY the map blocks here --}}


<!-- 
|--------------------------------------------------------------------------
| LEFT STACK
|--------------------------------------------------------------------------
-->

<div class="stairs stairs-left" style="grid-column: 4 / 11; grid-row: 4 / 10;"></div>

<!-- MAINTENANCE OFFICE -->
<svg id="path-guide-svg" class="path-guide-overlay" viewBox="0 0 120 100" preserveAspectRatio="none">
    <g id="path-group"></g>
</svg>


@php
  $id = 30;
  $r  = $rooms[$id] ?? null;
@endphp

<div class="room room-2f-new" 
     data-name="{{ $r?->room_name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="6" 
     data-row-end="16"
   
     style="grid-column: 4 / 11; grid-row: 10 / 16; margin: 1.5px;">
  <span class="room-label">{{ $r?->room_name ?? '' }}</span>
</div>
<!-- MAINTENANCE OFFICE -->


<!-- CR ROOM TOP LEFT -->
@php
  $id = 14;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-leftlabel room-menimg"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="13" 
     data-row-end="23"
     
     style="grid-column: 1 / 11; grid-row: 16 / 23;">
  <span class="room-label">{{ $name ?? '' }}</span>

  <img class="room-sideimg"
       src="{{ Vite::asset('resources/images/men.png') }}"
       alt="Men">
</div>
<!-- CR ROOM TOP LEFT -->


<!-- Physical Plant & Facilities -->
@php
  $id = 31;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="21" 
     data-row-end="30"
     
     style="grid-column: 4 / 11; grid-row: 23 / 30;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- Physical Plant & Facilities -->

<!-- NSTP OFFICE -->
@php
  $id = 32;
  $r  = $rooms[$id] ?? null;
  $forcedName = "NSTP Office";
@endphp

<div class="room"
     data-name="{{ $forcedName }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="31" 
     data-row-end="36"
     
     style="grid-column: 4 / 11; grid-row: 30 / 36;">
  <span class="room-label">{{ $forcedName }}</span>
</div>
<!-- NSTP OFFICE -->


<!-- A107 -->
@php
  $id = 38;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="38" 
     data-row-end="42"
     
     style="grid-column: 4 / 11; grid-row: 36 / 42;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A107 -->

<!-- A106 -->
@php
  $id = 37;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="46" 
     data-row-end="47"
    
     style="grid-column: 4 / 11; grid-row: 42 / 48;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A106 -->

<!-- A105 -->
@php
  $id = 36;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="49" 
     data-row-end="58"
     
     style="grid-column: 4 / 11; grid-row: 48 / 54;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>


<!-- A105 -->


<!-- A104 -->
@php
  $id = 35;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="54" 
     data-row-end="66"
     
     style="grid-column: 4 / 11; grid-row: 54 / 60;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A104 -->

<!-- A103 Education Strategy Room -->
@php
  $id = 34;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="67" 
     data-row-end="66"
    
     style="grid-column: 4 / 11; grid-row: 60 / 66;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A103 Education Strategy Room -->

<!-- A102 CBA Faculty Room -->
@php
  $id = 33;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="66" 
     data-row-end="80"
    
     style="grid-column: 4 / 11; grid-row: 66 / 72;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A102 CBA Faculty Room -->


<!-- A101 Electrical Room-->
@php
  $id = 39;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="16" 
     data-row-start="81" 
     data-row-end="78"
      
     style="grid-column: 4 / 11; grid-row: 72 / 78;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A101 Electrical Room-->

<div class="stairs stairs-left" style="grid-column: 4 / 11; grid-row: 78 / 84;"></div>


<!-- A100 -->
@php
  $id = 40;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="4" 
     data-col-end="55" 
     data-row-start="84" 
     data-row-end="100"
     
     style="grid-column: 4 / 11; grid-row: 84 / 90;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- A100 -->


<!-- 
|--------------------------------------------------------------------------
| TOP LEFT L-SHAPE AND TOP
|--------------------------------------------------------------------------
-->

<!-- C100 -->
@php
  $id = 29;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 19 / 28; grid-row: 6 / 13; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C100 -->

<!-- CR TOP LEFT WOMEN -->
@php
  $id = 15;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room room-crwomen-up room-womenimg"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="19" 
     data-col-end="73" 
     data-row-start="19" 
     data-row-end="15"
     data-side="right-2" 
     style="grid-column: 19 / 24; grid-row: 13 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>

  <img class="room-belowimg"
       src="{{ Vite::asset('resources/images/women.png') }}"
       alt="Women">
</div>
<!-- CR TOP LEFT WOMEN -->


<!-- C102 Faculty Lounge -->
@php
  $id = 28;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     data-col-start="20" 
     data-col-end="73" 
     data-row-start="30" 
     data-row-end="24"
     data-side="right" 
     style="grid-column: 24 / 32; grid-row: 15 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C102 Faculty Lounge -->


<!-- CANTEEN -->
@php
  $id = 27;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 32 / 52; grid-row: 15 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- CANTEEN -->

<!-- 
|--------------------------------------------------------------------------
| STAIRS PAYMENT AND INFORMATION
|--------------------------------------------------------------------------
-->

<div class="stairs" style="grid-column: 52 / 56; grid-row: 16 / 24; margin: 1.5px;"></div>

<!-- ROOM INFORMATION -->
@php
  $id = 26;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 56 / 63; grid-row: 16 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- ROOM INFORMATION -->


<!-- PAYMENT -->
@php
  $id = 25;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 63 / 70; grid-row: 16 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- PAYMENT -->

<!-- GATE TOP -->
<div class="room no-hover" style="grid-column: 70 / 76; grid-row: 16 / 18; margin: 1.5px;"></div>
<!-- GATE TOP -->


<!-- Jubilee -->
@php
  $id = 24;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 76 / 86; grid-row: 16 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- ROOM JUBILEE -->


<!-- STAIRS + RIGHT TALL BLOCKS -->
<div class="stairs" style="grid-column: 86 / 90; grid-row: 16 / 24; margin: 1.5px;"></div>


<!-- OFFICE OF THE PRESIDENT-->
@php
  $id = 23;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 90 / 96; grid-row: 15 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- OFFICE OF THE PRESIDENT-->


<!-- SEWING DEPARTMENT -->
@php
  $id = 22;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 96 / 104; grid-row: 14 / 24; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- SEWING DEPARTMENT -->

<!-- TOP RIGHT ROOM -->
<!-- V108 -->
@php
  $id = 21;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 104 / 110; grid-row: 20 / 32; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V108 -->

<!-- 
|--------------------------------------------------------------------------
| LIKOD NG CCS BUILDING
|--------------------------------------------------------------------------
-->

<!-- V107 -->
@php
  $id = 20;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 97 / 104; grid-row: 30 / 38; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V107 -->

<!-- V106 -->
@php
  $id = 19;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 97 / 104; grid-row: 38 / 46; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V106 -->

<!-- V105 -->
@php
  $id = 18;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 97 / 104; grid-row: 46 / 54; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V105 -->

<!-- V104 -->
@php
  $id = 17;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 97 / 107; grid-row: 54 / 62; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V104 -->

<!-- SOCIAL WORKS -->
@php
  $id = 16;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 97 / 105; grid-row: 62 / 69; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- SOCIAL WORKS -->



<!-- V102 -->
@php
  $id = 9;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 97 / 105; grid-row: 69 / 76; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V102 -->
 
<!-- stairs likod ng ccs -->
<div class="stairs" style="grid-column: 105 / 110; grid-row: 71 / 83; margin: 1.5px;"></div>


<!-- College chapel -->
@php
  $id = 8;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 110 / 118; grid-row: 80 / 96; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- College chapel -->

<!-- 
|--------------------------------------------------------------------------
| CCS BUILDING
|--------------------------------------------------------------------------
-->
<!-- FOOD STAND -->
@php
  $id = 7;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 75 / 69 ; grid-row: 34 / 40; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>


<!-- B101 -->

@php
  $id = 110;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 80 / 86; grid-row: 32 / 48; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- B101 -->


<!-- B102 -->
@php
  $id = 111;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 80 / 86; grid-row: 48 / 62; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- B102 -->


<!-- B103 -->
@php
  $id = 112;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 80 / 86; grid-row: 62 / 76; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- B103 -->

<!-- HAGDAN SA TABI NG CCS BUILDING -->
<div class="stairs stairs-right" style="grid-column: 80 / 86; grid-row: 76 / 83; margin: 1.5px;"></div>

<!-- STAGE -->
<div class="room no-hover" style="grid-column: 29 / 37; grid-row: 38 / 68; margin: 1.5px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
  Stage
</div>
<!-- 
|--------------------------------------------------------------------------
| COMFORT ROOMS Men
|--------------------------------------------------------------------------
-->

<!-- PWD MEN CR -->
@php
  $id = 12;
  $r  = $rooms[$id] ?? null;

  // remove "(PWD)" only
  $name = $r?->room_name
    ? preg_replace('/\s*\(PWD\)\s*/i', '', $r->room_name)
    : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 86 / 90; grid-row: 32 / 40; margin: 1.5px; position: relative;">

  <span class="room-label"
        style="position: absolute; top: -35px; left: 50%; transform: translateX(-50%); font-size: 10px; text-align: center; white-space: nowrap;">
    {{ $name ?? '' }}
  </span>

  <img src="{{ Vite::asset('resources/images/PWD.png') }}"
     alt="PWD"
     style="position:absolute; top:16px; left:50%; transform:translateX(-50%); width:42px; height:45px; z-index:5;" />

</div>
<!-- PWD MEN CR -->



<!-- CR MEN CCS -->
@php
  $id = 13;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 86 / 90; grid-row: 40 / 48; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- CR MEN CCS -->


<!-- COMFORT ROOMS Women -->

<!-- PWD WOMEN CR -->
@php
  $id = 11;
  $r  = $rooms[$id] ?? null;

  // remove "(2)" and remove "(PWD)" only
  $name = $r?->room_name
    ? preg_replace('/\s*\(PWD\)\s*/i', '', preg_replace('/\s*\(2\)\s*$/', '', $r->room_name))
    : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 86 / 90; grid-row: 67 / 75; margin: 1.5px; position: relative; overflow: visible;">
  <span class="room-label"
        style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); font-size: 10px; text-align: center; white-space: pre-line; width: 100%; line-height: 0.9; pointer-events: none;">
    {{ str_replace(' - ', " -\n", $name) }}
  </span>
  <img src="{{ Vite::asset('resources/images/PWD.png') }}"
     alt="PWD"
     style="position:absolute; top:20px; left:50%; transform:translateX(-50%); width:42px; height:45px; z-index:5;" />
</div>
<!-- PWD WOMEN CR -->
 
<!-- WOMEN CR -->
@php
  $id = 10;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 86 / 90; grid-row: 75 / 83; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- WOMEN CR -->

<!-- STUDY CENTER -->
<div class="room no-hover" style="grid-column: 60 / 75; grid-row: 74 / 82; margin: 1.5px; display: flex; align-items: center; justify-content: center; text-align: center;">
  Study Center
</div>


<!-- 
|--------------------------------------------------------------------------
| CASED AND OFFICES BELOW
|--------------------------------------------------------------------------
-->

<!-- AVR -->
@php
  $id = 41;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 8 / 15; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- AVR -->
 
<!-- H103 -->
@php
  $id = 42;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 15 / 22; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- H103 -->
 

<!-- Business Executive Room -->
@php
  $id = 43;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 22 / 29; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- Business Executive Room -->

<!-- PREMIER POST OFFICE -->
@php
  $id = 44;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 29 / 38; grid-row: 94 / 101; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- PREMIER POST OFFICE -->

<!-- CASED FACULTY -->
@php
  $id = 45;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 38 / 45; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- CASED FACULTY -->
 
<!-- IDCC -->
@php
  $id = 46;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 45 / 52; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- IDCC -->


<!-- MAIN GATE -->
<div class="room no-hover" style="grid-column: 52 / 58; grid-row: 96 / 98; margin: 1.5px;"></div>



<!-- 
|--------------------------------------------------------------------------
| GATE RIGHT SIDE
|--------------------------------------------------------------------------
-->

<!-- STUDENT AFFAIRS -->
@php
  $id = 1;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 58 / 65; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- STUDENT AFFAIRS -->
 

<!-- GUIDANCE OFFICE -->
@php
  $id = 2;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 65 / 74; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- GUIDANCE OFFICE -->
 


<!-- PESCA OFFICE -->
@php
  $id = 3;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 74 / 83; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- PESCA OFFICE -->


<!-- CLINIC -->
@php
  $id = 4;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 83 / 92; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- CLINIC -->


<!-- Campus Youth Ministry -->
@php
  $id = 5;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 92 / 101; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- Campus Youth Ministry -->


<!-- CATECHETICAL -->
@php
  $id = 6;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 101 / 110; grid-row: 90 / 98; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- CATECHETICAL -->


<!-- 
|--------------------------------------------------------------------------
| BACKGROUND
|--------------------------------------------------------------------------
-->

<div class="floor-bg floor1-bg"></div>
<div class="floor-bg floor1-bg-mid"></div>
<div class="floor-bg floor1-bg-bottom"></div>
<!-- Small Patch -->
<div class="floor-bg floor1-bg-rightpatch"></div>



<!-- 
|--------------------------------------------------------------------------
| YELLOW GUIDE (TOP OF GREY LINE)
|--------------------------------------------------------------------------
-->

<!-- 
|--------------------------------------------------------------------------
| GREY LINES
|--------------------------------------------------------------------------
-->

<!-- GATE GREY LINE -->
<div class="path-container" style="grid-column: 54 / 56; grid-row: 86 / 95; position: relative;">

  <img src="{{ Vite::asset('resources/images/RedArrow.png') }}" alt="Red Arrow"
     style="position:absolute; left:-15px; top:0; width:50%; height:100%; object-fit:contain;
              transform: rotate(90deg) scale(3.4); transform-origin:center;">

   <img src="{{ Vite::asset('resources/images/GPSblue.png') }}" alt="GPS Blue"
    style="position:absolute; left:50%; top:80%; width:22px; height:25px; object-fit:contain;
           transform: translate(-50%, -50%);">

  <img src="{{ Vite::asset('resources/images/BlueArrow.png') }}" alt="Blue Arrow"
      style="position:absolute; right:-15px; top:0; width:50%; height:100%; object-fit:contain;
              transform: rotate(-90deg) scale(3.4); transform-origin:center;">
</div>
<!-- GREY "LONG" CONTAINER LINE -->
<div class="horizontal-path" style="grid-column: 11 / 110; grid-row: 85 / 88;"></div>
<div class="path-container" style="grid-column: 27 / 1; grid-row: 5 / 86;"></div>
<div class="path-container" style="grid-column: 77 / 78; grid-row: 27 / 86;"></div>
<div class="horizontal-path" style="grid-column: 15 / 103; grid-row: 26 / 29;"></div>
<div class="path-container" style="grid-column: 108 / 78; grid-row: 27 / 86;"></div>

<!-- GREY "SHORT" BOTTOM PART -->
<div class="path-container" style="grid-column: 61 / 62; grid-row: 85 / 90 ;"></div>
<div class="path-container" style="grid-column: 69 / 70; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 77 / 78; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 87 / 88; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 96 / 97; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 105 / 106; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 107 / 108; grid-row: 83 / 86;"></div>
<div class="path-container" style="grid-column: 48 / 49; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 41 / 42; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 33 / 34; grid-row: 85 / 93;"></div>
<div class="path-container" style="grid-column: 25 / 26; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 18 / 19; grid-row: 85 / 90;"></div>
<div class="path-container" style="grid-column: 13 / 14; grid-row: 85 / 90;"></div>

<!-- ===(GREY CONTAINER LINE) ""CBA""=== -->
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 80 / 83;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 74 / 77;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 68 / 71;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 62 / 65;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 56 / 59;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 50 / 53;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 44 / 47;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 38 / 41;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 32 / 35;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 25 / 28;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 18 / 21;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 12 / 15;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 6 / 9;"></div>

<!-- ===(GREY CONTAINER LINE) ""CCS""=== -->
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 38 / 41;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 53 / 56;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 67 / 70;"></div>
<div class="horizontal-path" style="grid-column: 77 / 80; grid-row: 78 / 81;"></div>
 <div class="horizontal-path" style="grid-column: 75 / 78; grid-row: 36 / 39;"></div>


<!--SMALL PATH TOP PART " -->
<div class="path-container" style="grid-column: 98 / 101; grid-row: 24 / 28;"></div>
<div class="path-container" style="grid-column: 91 / 95; grid-row: 24 / 28;"></div>
<div class="path-container" style="grid-column: 86 / 90; grid-row: 24 / 28;"></div>
<div class="path-container" style="grid-column: 80 / 82; grid-row: 24 / 28;"></div>
<div class="path-container" style="grid-column: 71 / 75; grid-row: 19 / 29;"></div>
<div class="path-container" style="grid-column: 63 / 70; grid-row: 24 / 29;"></div>
<div class="path-container" style="grid-column: 48 / 71; grid-row: 24 / 29;"></div>
<div class="path-container" style="grid-column: 37 / 71; grid-row: 24 / 29;"></div>
<div class="path-container" style="grid-column: 14 / 71; grid-row: 24 / 29;"></div>
<div class="path-container" style="grid-column: 1 / 54; grid-row: 24 / 29;"></div>


<!--TOP LEFT AND LIKOD NG CCS " -->
<div class="horizontal-path" style="grid-column: 15 / 19; grid-row: 8 / 11;"></div>
<div class="horizontal-path" style="grid-column: 15 / 19; grid-row: 17 / 20;"></div>
<div class="horizontal-path" style="grid-column: 94 / 97; grid-row: 71 / 74;"></div>
<div class="horizontal-path" style="grid-column: 94 / 97; grid-row: 64 / 67;"></div>
<div class="horizontal-path" style="grid-column: 94 / 97; grid-row: 56 / 59;"></div>
<div class="horizontal-path" style="grid-column: 94 / 97; grid-row: 48 / 51;"></div>
<div class="horizontal-path" style="grid-column: 94 / 97; grid-row: 40 / 43;"></div>
<div class="horizontal-path" style="grid-column: 94 / 97; grid-row: 32 / 35;"></div>
<div class="horizontal-path" style="grid-column: 90 / 94; grid-row: 70 / 73;"></div>
<div class="horizontal-path" style="grid-column: 90 / 94; grid-row: 78 / 81;"></div>
<div class="horizontal-path" style="grid-column: 90 / 94; grid-row: 35 / 38;"></div>
<div class="horizontal-path" style="grid-column: 90 / 94; grid-row: 43 / 46;"></div>