<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\RoomController;
use App\Models\Room;

/*
|--------------------------------------------------------------------------
| PUBLIC (USER)
|--------------------------------------------------------------------------
*/

// HOME (public) - loads FLOOR 1 rooms keyed by room_id (for box mapping like $rooms[30])
Route::get('/', function () {
    $rooms = Room::where('is_active', 1)
        ->where('floor_number', 1)
        ->get(['room_id', 'room_name', 'room_description'])
        ->keyBy('room_id'); // ✅ key = room_id (used to match boxes)

    return view('home', compact('rooms'));
})->name('home');

// Floors (map pages)
Route::get('/floor/1', [RoomController::class, 'floor1'])->name('floor.1');
Route::get('/floor/2', [RoomController::class, 'floor2'])->name('floor.2');
Route::get('/floor/3', [RoomController::class, 'floor3'])->name('floor.3');
Route::get('/floor/4', [RoomController::class, 'floor4'])->name('floor.4');

/*
|--------------------------------------------------------------------------
| ADMIN AUTH (public)
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

/*
|--------------------------------------------------------------------------
| ADMIN (protected)
|--------------------------------------------------------------------------
*/

Route::middleware('admin.auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Rooms CRUD (admin only)
    Route::resource('rooms', RoomController::class)->except(['show']);
});