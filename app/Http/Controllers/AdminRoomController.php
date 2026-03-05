<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('floor_number')
            ->orderBy('room_name')
            ->get();

        return view('admin.rooms.index', compact('rooms'));
    }

    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        // Works for BOTH:
        // 1) Modal fetch (JSON) that only sends room_name + room_description
        // 2) Edit page form submit that may send floor_number + is_active too
        $data = $request->validate([
            'room_name' => 'required|string|max:255',
            'room_description' => 'nullable|string',
            'floor_number' => 'sometimes|integer|min:1|max:10',
            'is_active' => 'sometimes|in:0,1',
        ]);

        $room->update($data);

        // If request expects JSON (modal fetch)
        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'room' => $room->only([
                    'room_id',
                    'room_name',
                    'room_description',
                    'floor_number',
                    'is_active'
                ]),
            ]);
        }

        // Normal form submit (edit page)
        return redirect()
            ->route('admin.rooms.index')
            ->with('success', 'Room updated successfully.');
    }
}