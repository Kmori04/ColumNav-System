<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Columban College - Campus Navigation (Admin)</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  @vite([
    'resources/css/homeAdmin.css',
    'resources/css/chat-assistant-card.css',
    'resources/js/app.js',
    'resources/js/chat-assistant-card.js'
  ])

  <style>
    .admin-actions{
      display:flex;
      gap:10px;
      margin-top:12px;
    }

    .admin-btn{
      width:100%;
      padding:10px 12px;
      border-radius:10px;
      border:none;
      cursor:pointer;
      background:#0c3b66;
      color:#fff;
      font-family:'Poppins', sans-serif;
      font-size:14px;
    }

    .admin-btn.secondary{
      background:transparent;
      color:#0f172a;
      border:1px solid rgba(15,23,42,.18);
    }

    .admin-btn:disabled{
      opacity:.5;
      cursor:not-allowed;
    }

    .edit-modal{
      display:none;
      position:fixed;
      inset:0;
      background:rgba(0,0,0,.35);
      z-index:9999;
    }

    .edit-modal-card{
      width:440px;
      max-width:92vw;
      background:#fff;
      border-radius:14px;
      padding:16px;
      margin:12vh auto;
      box-shadow:0 20px 50px rgba(0,0,0,.25);
    }

    .edit-modal-head{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:10px;
      margin-bottom:10px;
    }

    .edit-modal-title{
      margin:0;
      font-size:18px;
      font-weight:700;
      color:#0f172a;
    }

    .edit-modal-sub{
      font-size:12px;
      opacity:.7;
      margin-top:2px;
    }

    .edit-field-label{
      display:block;
      font-size:13px;
      opacity:.75;
      margin:10px 0 6px;
    }

    .edit-input,
    .edit-textarea{
      width:100%;
      padding:10px 12px;
      border:1px solid rgba(15,23,42,.15);
      border-radius:10px;
      outline:none;
      font-family:'Poppins', sans-serif;
      font-size:14px;
    }

    .edit-textarea{
      min-height:120px;
      resize:vertical;
    }

    .edit-modal-actions{
      display:flex;
      gap:10px;
      justify-content:flex-end;
      margin-top:12px;
    }
  </style>
</head>
<body>

@php
  use App\Models\Room;

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
        <a href="{{ route('home') }}">
          <img src="{{ Vite::asset('resources/images/ColumbanCollegeLogo.png') }}" alt="Columban College Logo">
        </a>
      </div>
      <h1 class="cc-title">Columban College - Campus Navigation (Admin)</h1>
    </div>

    <div class="floors-wrap">
      <label class="floors-label" for="floorSelect">Floors</label>
      <select class="floors-select" id="floorSelect">
        <option value="1F" selected>1F</option>
        <option value="2F">2F</option>
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

            <div class="admin-actions">
              <button type="button" class="admin-btn" id="btnEditRoom" disabled>Edit Room</button>

              <form method="POST" action="{{ route('logout') }}" style="margin:0; width:100%;">
                @csrf
                <button type="submit" class="admin-btn secondary">Back to Guest</button>
              </form>
            </div>

            <input type="hidden" id="selectedRoomId" value="">
          </div>
        </section>

        <section class="legend-card">
          <div class="legend-titlebar">
            <span class="legend-titleline"></span>
            <h2 class="legend-titletext">MAP LEGEND</h2>
            <span class="legend-titleline"></span>
          </div>

          <div class="legend-rows">
            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/stairs.png') }}">
              <span class="legend-label">STAIRS</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/GPSblue.png') }}">
              <span class="legend-label">YOUR LOCATION</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/MenWomen.png') }}">
              <span class="legend-label">RESTROOM</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico arrow" src="{{ Vite::asset('resources/images/BlueArrow.png') }}">
              <span class="legend-label">ENTRANCE</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico" src="{{ Vite::asset('resources/images/PWD.png') }}">
              <span class="legend-label">PWD RESTROOM</span>
            </div>

            <div class="legend-cell">
              <img class="legend-ico arrow" src="{{ Vite::asset('resources/images/RedArrow.png') }}">
              <span class="legend-label">EXIT</span>
            </div>
          </div>
        </section>

        <div class="admin-chatbot-wrap">
          @include('components.chat-assistant-card')
        </div>

      </div>
    </aside>

    <section class="content">
      <div class="map-wrapper">
        <div class="map-placeholder">

          <div class="map-grid" id="mapGrid"></div>

          <div class="map-zoom-viewport" id="zoomViewport">
            <div class="map-zoom-layer" id="zoomLayer">
              <div class="map-builder floor-1" id="mapBuilder">
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

<div class="edit-modal" id="editModal" aria-hidden="true">
  <div class="edit-modal-card">
    <div class="edit-modal-head">
      <div>
        <h3 class="edit-modal-title" id="editTitle">Edit Room</h3>
        <div class="edit-modal-sub">Room ID: <span id="editRoomIdText">-</span></div>
      </div>
      <button type="button" class="admin-btn secondary" id="btnCancelEdit" style="width:auto; padding:8px 12px;">X</button>
    </div>

    <label class="edit-field-label" for="editName">Name</label>
    <input class="edit-input" id="editName" type="text" autocomplete="off">

    <label class="edit-field-label" for="editDesc">Description</label>
    <textarea class="edit-textarea" id="editDesc"></textarea>

    <div class="edit-modal-actions">
      <button type="button" class="admin-btn secondary" id="btnCancelEdit2" style="width:auto;">Cancel</button>
      <button type="button" class="admin-btn" id="btnSaveEdit" style="width:auto;">Save</button>
    </div>
  </div>
</div>

<script>
(function () {
  const btnEdit    = document.getElementById('btnEditRoom');
  const hiddenId   = document.getElementById('selectedRoomId');

  const modal          = document.getElementById('editModal');
  const editName       = document.getElementById('editName');
  const editDesc       = document.getElementById('editDesc');
  const editRoomIdText = document.getElementById('editRoomIdText');

  const btnCancel  = document.getElementById('btnCancelEdit');
  const btnCancel2 = document.getElementById('btnCancelEdit2');
  const btnSave    = document.getElementById('btnSaveEdit');

  const roomDescBox  = document.getElementById('roomDescBox');
  const roomDescText = document.getElementById('roomDescText');

  let currentRoomEl = null;

  function openModal() {
    modal.style.display = 'block';
    modal.setAttribute('aria-hidden', 'false');
    setTimeout(() => editName.focus(), 50);
  }

  function closeModal() {
    modal.style.display = 'none';
    modal.setAttribute('aria-hidden', 'true');
  }

  function renderDescFromRoom(roomEl) {
    if (!roomDescText) return;

    const desc = roomEl?.getAttribute('data-desc') || 'No description yet.';
    roomDescText.textContent = desc;

    if (roomDescBox) roomDescBox.style.outline = 'none';
  }

  document.addEventListener('click', function (e) {
    const roomEl = e.target.closest('.room');
    if (!roomEl) return;

    const rid = roomEl.getAttribute('data-id');
    if (!rid) return;

    currentRoomEl = roomEl;
    hiddenId.value = rid;
    btnEdit.disabled = false;

    renderDescFromRoom(roomEl);
  });

  btnEdit.addEventListener('click', function () {
    const rid = hiddenId.value;
    if (!rid || !currentRoomEl) return;

    editRoomIdText.textContent = rid;
    editName.value = currentRoomEl.getAttribute('data-name') || '';
    editDesc.value = currentRoomEl.getAttribute('data-desc') || '';

    openModal();
  });

  btnCancel.addEventListener('click', closeModal);
  btnCancel2.addEventListener('click', closeModal);

  modal.addEventListener('click', function(e){
    if (e.target === modal) closeModal();
  });

  btnSave.addEventListener('click', async function () {
    const rid = hiddenId.value;
    if (!rid || !currentRoomEl) return;

    const payload = {
      room_name: editName.value.trim(),
      room_description: editDesc.value.trim()
    };

    btnSave.disabled = true;
    btnSave.textContent = 'Saving...';

    try {
      const res = await fetch(`/admin/rooms/${rid}`, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Accept': 'application/json'
        },
        body: JSON.stringify(payload)
      });

      if (!res.ok) {
        const text = await res.text();
        alert(`Save failed (${res.status}).\n\n${text}`);
        return;
      }

      currentRoomEl.setAttribute('data-name', payload.room_name);
      currentRoomEl.setAttribute('data-desc', payload.room_description);

      const label = currentRoomEl.querySelector('.room-label');
      if (label) label.textContent = payload.room_name;

      renderDescFromRoom(currentRoomEl);
      closeModal();

    } catch (err) {
      alert('Save failed. Network or server error.');
    } finally {
      btnSave.disabled = false;
      btnSave.textContent = 'Save';
    }
  });

})();
</script>

</body>
</html>