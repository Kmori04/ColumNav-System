{{-- Floor: 3F --}}
{{-- Put ONLY the map blocks here --}}

<!-- Floor 3 -->

<!-- 
|--------------------------------------------------------------------------
| TOP LEFT CR
|--------------------------------------------------------------------------
-->
<div class="stairs stairs-left" style="grid-column: 2 / 8; grid-row: 8 / 14; margin: 1.5px;"></div>

<!-- FEMALE CR -->
@php
  $id = 88;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 2 / 8; grid-row: 14 / 22; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
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
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 5 / 11; grid-row: 22 / 34; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A306 -->


 <!-- LEFT A305 -->
@php
  $id = 86;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 5 / 11; grid-row: 34 / 46; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A305 -->

 <!-- LEFT A304 -->
{{-- ID 85 --}}
@php
  $id = 85;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 5 / 11; grid-row: 46 / 58; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A304 -->


 <!-- LEFT A302/A303 -->
@php
  $id = 118;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 5 / 11; grid-row: 58 / 70; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- LEFT A302/A303 -->


 <!-- LEFT A301 -->
@php
  $id = 84;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 5 / 11; grid-row: 70 / 82; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
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
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 16 / 25; grid-row: 13 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- C301 -->

 <!-- C302 -->
@php
  $id = 90;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 25 / 34; grid-row: 13 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- C302 -->

 <!-- C303 -->
@php
  $id = 91;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 34 / 43; grid-row: 13 / 20; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- C303 -->

 <!-- C304 -->
@php
  $id = 92;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 43 / 52; grid-row: 19 / 26; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- C304 -->

 
<!-- 
|--------------------------------------------------------------------------
| CCS
|--------------------------------------------------------------------------
-->
 
 <!-- B301 -->
@php
  $id = 97;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 81 / 87; grid-row: 26 / 38; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- B301 -->


 <!-- B302 -->
@php
  $id = 96;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 81 / 87; grid-row: 38 / 50; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- B302 -->


 <!-- B303 -->
@php
  $id = 95;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 81 / 87; grid-row: 50 / 61; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- B303 -->


<!-- B304 -->
@php
  $id = 94;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 81 / 87; grid-row: 61 / 70; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label" style="font-size: 0.58rem;">{{ $name ?? '' }}</span>
</div>
<!-- B304 -->


 <!-- B305 -->
@php
  $id = 93;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 81 / 87; grid-row: 70 / 83; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
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
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 88 / 93; grid-row: 26 / 37; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- B300 -->
  
<!-- 3rd floor CR -->
@php
  $id = 119;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 88 / 93; grid-row: 78 / 89; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
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
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 103 / 115; grid-row: 9 / 20; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
 <!-- V307 -->


 <!-- V306 -->
@php
  $id = 99;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 108 / 114; grid-row: 20 / 34; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V306 -->


<!-- V305 -->
@php
  $id = 100;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 108 / 114; grid-row: 34 / 47; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V305 -->


<!-- V304 -->
@php
  $id = 101;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 108 / 114; grid-row: 47 / 61; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V304 -->


<!-- V303 -->
@php
  $id = 102;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 108 / 114; grid-row: 61 / 75; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V303 -->


<!-- V302 -->
@php
  $id = 103;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 108 / 114; grid-row: 75 / 87; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- V302 -->

<div class="stairs" style="grid-column: 99 / 103; grid-row: 85 / 94; margin: 1.5px;"></div>

<!-- V301 -->
@php
  $id = 104;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ?? null;
@endphp
<div class="room"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 103 / 110; grid-row: 87 / 94; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
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