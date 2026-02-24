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
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 16 / 22; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C201 -->

<!-- C202 -->
@php
  $id = 49;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 22 / 29; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C202 -->

<!-- C203 -->
@php
  $id = 50;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 29 / 38; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C203 -->

<!-- C204 -->
@php
  $id = 51;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 38 / 46; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C204 -->
 
    <div class="stairs" style="grid-column: 46 / 51; grid-row: 6 / 14; margin: 1.5px;"></div>

<!-- MIS OFFICE -->
@php
  $id = 52;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp

<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 40 / 46; grid-row: 19 / 25; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- MIS OFFICE -->


<!-- C206 -->
@php
  $id = 53;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 51 / 57; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C206 -->


<!-- C207 -->
@php
  $id = 54;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 57 / 64; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C207 -->

<!-- C208 -->
@php
  $id = 55;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 64 / 71; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C208 -->

<!-- C209 -->
@php
  $id = 56;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(2\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 71 / 78; grid-row: 8 / 14; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- C209 -->

    <div class="stairs" style="grid-column: 78 / 83; grid-row: 6 / 14; margin: 1.5px;"></div>

    
    <div class="room" style="grid-column: 83 / 89; grid-row: 6 / 12; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 89 / 97; grid-row: 6 / 12; border: 1.5px solid #6b93a3; background: white;"></div>


    <!-- LEFT SIDE 2ND FLOOR -->
    <div class="stairs stairs-left" style="grid-column: 2 / 9; grid-row: 4 / 10;"></div>
    <div class="room" style="grid-column: 1 / 7; grid-row: 10 / 16; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 5 / 9; grid-row: 16 / 25; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 2 / 7; grid-row: 25 / 33; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 4 / 10; grid-row: 33 / 40; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 4 / 10; grid-row: 40 / 47; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 4 / 10; grid-row: 47 / 54; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 1 / 7; grid-row: 54 / 60; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 1 / 7; grid-row: 60 / 66; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 4 / 10; grid-row: 66 / 72; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="stairs stairs-left" style="grid-column: 4 / 10; grid-row: 72 / 77;"></div>
    <div class="room" style="grid-column: 4 / 10; grid-row: 77 / 83; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 4 / 10; grid-row: 83 / 89; border: 1.5px solid #6b93a3; background: white;"></div>

     <!-- Left side ng library -->
    <div class="room" style="grid-column: 8 / 16;  grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 16 / 24; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 24 / 32; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 32 / 40; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 40 / 48; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 48 / 56; grid-row: 89 / 95; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 56 / 66; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 66 / 74; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 74 / 82; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 82 / 90; grid-row: 89 / 96; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 90 / 106; grid-row: 89 / 98; border: 1.5px solid #6b93a3; background: white;"></div>
    


    <!-- Taas ng Library -->
    <div class="room" style="grid-column: 96 / 105; grid-row: 12 / 24; border: 1.5px solid #6b93a3; background: white;"></div>

    <!-- below (no hover) -->
    <div class="room" style="grid-column: 92 / 106; grid-row: 24 / 51; border: 1.5px solid #6b93a3; background: white; pointer-events: none;"></div>

    <!-- ID -->
    <div class="room" style="grid-column: 92 / 98; grid-row: 51 / 78; border: 1.5px solid #6b93a3; background: white;"></div>

    <!-- stairs on the right side of the room -->
    <div class="stairs" style="grid-column: 98 / 103; grid-row: 68 / 78; margin: 1.5px;"></div>
    <!-- Library-->
    <div class="room" style="grid-column: 106 / 118; grid-row: 24 / 94; border: 1.5px solid #6b93a3; background: white;"></div>



     <!-- CCS -->
    <div class="room" style="grid-column: 75 / 81; grid-row: 23 / 36; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 75 / 81; grid-row: 36 / 49; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 75 / 81; grid-row: 49 / 62; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="room" style="grid-column: 75 / 81; grid-row: 62 / 75; border: 1.5px solid #6b93a3; background: white;"></div>
    <div class="stairs stairs-right" style="grid-column: 75 / 81; grid-row: 75 / 82; margin: 1.5px;"></div>

    <!-- CCS CR MEN -->
    <div class="room" style="grid-column: 81 / 85; grid-row: 23 / 34; border: 1.5px solid #6b93a3; background: white;"></div>

    <!-- CCS CR WOMEN -->
    <div class="room" style="grid-column: 81 / 85; grid-row: 63 / 75; border: 1.5px solid #6b93a3; background: white;"></div>
    
    

</div>

<!-- GREY "LONG" CONTAINER LINE -->
<div class="horizontal-path" style="grid-column: 11 / 106; grid-row: 85 / 88;"></div>
<div class="path-container" style="grid-column: 27 / 1; grid-row: 5 / 86;"></div>
<div class="path-container" style="grid-column: 72 / 74; grid-row: 17 / 86;"></div>
<div class="horizontal-path" style="grid-column: 15 / 95; grid-row: 15 / 18;"></div>
<div class="path-container" style="grid-column: 105 / 75; grid-row: 17 / 86;"></div>
<div class="path-container" style="grid-column: 54 / 22; grid-row: 17 / 24;"></div>

<!-- GREY "SHORT" BOTTOM PART -->
<div class="path-container" style="grid-column: 61 / 62; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 69 / 70; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 77 / 78; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 87 / 88; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 96 / 99; grid-row: 87 / 89;"></div>
<div class="path-container" style="grid-column: 96 / 105; grid-row: 87 / 78;"></div>
<div class="path-container" style="grid-column: 48 / 49; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 41 / 42; grid-row: 85 / 89;"></div>

<div class="path-container" style="grid-column: 33 / 34; grid-row: 86 / 89;"></div>

<div class="path-container" style="grid-column: 25 / 26; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 18 / 19; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 13 / 14; grid-row: 85 / 89;"></div>
<div class="path-container" style="grid-column: 82 / 84; grid-row: 87 / 75;"></div>

<!-- ===(GREY CONTAINER LINE) ""CBA""=== -->
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 79 / 82;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 73 / 76;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 67 / 70;"></div>
<div class="horizontal-path" style="grid-column: 8 / 15; grid-row: 62 / 65;"></div>
<div class="horizontal-path" style="grid-column: 8 / 15; grid-row: 56 / 59;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 49 / 52;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 42 / 45;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 35 / 38;"></div>
<div class="horizontal-path" style="grid-column: 8 / 15; grid-row: 28 / 31;"></div>
<div class="horizontal-path" style="grid-column: 11 / 15; grid-row: 19 / 22;"></div>
 <div class="horizontal-path" style="grid-column: 8 / 15; grid-row: 12 / 15;"></div>
<div class="horizontal-path" style="grid-column: 10 / 15; grid-row: 6 / 9;"></div>
 

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
<div class="path-container" style="grid-column: 37 / 71; grid-row: 14 / 18;"></div> 
<div class="path-container" style="grid-column: 26 / 71; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 14 / 71; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 5 / 62; grid-row: 14 / 18;"></div>
<div class="path-container" style="grid-column: 1 / 49; grid-row: 14 / 18;"></div>
<div class="horizontal-path" style="grid-column: 38/ 40; grid-row: 21 / 24;"></div>

<!--TOP LEFT AND LIKOD NG CCS " -->
<div class="horizontal-path" style="grid-column: 88 / 92; grid-row: 36 / 39;"></div>
<div class="horizontal-path" style="grid-column: 88 / 92; grid-row: 64 / 67;"></div>
 