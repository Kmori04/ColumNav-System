<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminRoomController;
use App\Models\Room;


Route::get('/home', function () {
    return view('home');
})->name('home');
/*
|--------------------------------------------------------------------------
| GUEST / PUBLIC (no login required)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $rooms = Room::where('is_active', 1)
        ->where('floor_number', 1)
        ->get(['room_id','room_name','room_description'])
        ->keyBy('room_id');

    return view('home', compact('rooms'));
})->name('home');

Route::get('/floor/1', [RoomController::class, 'floor1'])->name('floor.1');
Route::get('/floor/2', [RoomController::class, 'floor2'])->name('floor.2');
Route::get('/floor/3', [RoomController::class, 'floor3'])->name('floor.3');
Route::get('/floor/4', [RoomController::class, 'floor4'])->name('floor.4');

/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.do');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN AREA (must be logged in)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | ADMIN: Rooms Management (bind using room_id)
    |--------------------------------------------------------------------------
    | IMPORTANT: {room:room_id} fixes route-model binding when PK is room_id
    */
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/rooms', [AdminRoomController::class, 'index'])->name('rooms.index');

        Route::get('/rooms/{room:room_id}/edit', [AdminRoomController::class, 'edit'])->name('rooms.edit');

        Route::put('/rooms/{room:room_id}', [AdminRoomController::class, 'update'])->name('rooms.update');

    });

});