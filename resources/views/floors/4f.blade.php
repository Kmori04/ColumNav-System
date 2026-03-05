{{-- Floor: 4F --}}

<!-- 
|--------------------------------------------------------------------------
| CCS
|--------------------------------------------------------------------------
-->

<!-- B401 -->
@php
  $id = 108;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(4\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 90 / 98; grid-row: 16 / 38; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- B401 -->

<!-- B402 -->
@php
  $id = 107;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(4\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 90 / 98; grid-row: 38 / 60; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- B402 -->

<!-- B403 -->
@php
  $id = 106;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(4\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 90 / 98; grid-row: 60 / 82; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- B106 -->

<div class="stairs stairs-right" style="grid-column: 92 / 98; grid-row: 82 / 89; margin: 1.5px;"></div>





<!-- 
|--------------------------------------------------------------------------
|  CR CCS
|--------------------------------------------------------------------------
-->

<!-- men Cr -->
@php
  $id = 124;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 100 / 105; grid-row: 16 / 27; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- men Cr -->

<!-- Women Cr -->
@php
  $id = 125;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(3\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 100 / 105; grid-row: 78 / 89; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- Women Cr -->

<!-- 
|--------------------------------------------------------------------------
|   Convery
|--------------------------------------------------------------------------
-->

<!-- Convery -->
@php
  $id = 123;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(\d+\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 10 / 26; grid-row: 36 / 86; margin: 1.5px;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- Convery -->


<!-- WOMEN CR CONVERY -->
@php
  $id = 121;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(\d+\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 10 / 16; grid-row: 18 / 27; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
</div>
<!-- WOMEN CR CONVERY -->


<!-- MEN CR CONVERY -->
@php
  $id = 122;
  $r  = $rooms[$id] ?? null;
  $name = $r?->room_name ? preg_replace('/\s*\(\d+\)\s*$/', '', $r->room_name) : null;
@endphp
<div class="room"
     data-id="{{ $id }}"
     data-name="{{ $name ?? 'Unknown Room' }}"
     data-desc="{{ $r?->room_description ?? 'No description yet.' }}"
     style="grid-column: 10 / 16; grid-row: 27 / 36; margin: 1.5px; border: 1.5px solid #6b93a3; background: white;">
  <span class="room-label">{{ $name ?? '' }}</span>
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

