<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ADMIN: CRUD (ONLY FOR ADMIN)
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $q = Room::query();

        if ($request->filled('floor')) {
            $q->where('floor_number', (int) $request->floor);
        }

        if ($request->filled('active')) {
            $q->where('is_active', (int) $request->active);
        }

        $rooms = $q->orderBy('floor_number')
                   ->orderBy('room_name')
                   ->get();

        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'room_name' => 'required|string|max:255',
            'room_description' => 'nullable|string',
            'floor_number' => 'required|integer|min:1|max:20',
            'is_active' => 'nullable|boolean',
        ]);

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        Room::create($data);

        return redirect()->route('admin.rooms.index')->with('success', 'Room added!');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $data = $request->validate([
            'room_name' => 'required|string|max:255',
            'room_description' => 'nullable|string',
            'floor_number' => 'required|integer|min:1|max:20',
            'is_active' => 'nullable|boolean',
        ]);

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        $room->update($data);

        return redirect()->route('admin.rooms.index')->with('success', 'Room updated!');
    }

    public function destroy(Room $room)
    {
        $room->update(['is_active' => 0]);

        return redirect()->route('admin.rooms.index')->with('success', 'Room deactivated!');
    }

    /*
    |--------------------------------------------------------------------------
    | PUBLIC: FLOOR PAGES (MAP)
    |--------------------------------------------------------------------------
    */

    // ✅ Returns rooms keyed by room_id so $rooms[$id] works on ALL floors
    private function floorRooms(int $floor)
    {
        return Room::where('floor_number', $floor)
            ->where('is_active', 1)
            ->get(['room_id', 'room_name', 'room_description'])
            ->keyBy('room_id');
    }

    public function floor1(Request $request)
    {
        $rooms = $this->floorRooms(1);

        // Debug: /floor/1?debug=1
        if ($request->boolean('debug')) {
            dd([
                'floor' => 1,
                'count' => $rooms->count(),
                'has_48' => $rooms->has(48),
                'keys_sample' => $rooms->keys()->take(30),
                'room_48' => $rooms[48] ?? null,
            ]);
        }

        return view('floors.1f', compact('rooms'));
    }

    public function floor2(Request $request)
    {
        $rooms = $this->floorRooms(2);

        // Debug: /floor/2?debug=1
        if ($request->boolean('debug')) {
            dd([
                'floor' => 2,
                'count' => $rooms->count(),
                'has_48' => $rooms->has(48),
                'keys_sample' => $rooms->keys()->take(30),
                'room_48' => $rooms[48] ?? null,
            ]);
        }

        return view('floors.2f', compact('rooms'));
    }

    public function floor3(Request $request)
    {
        $rooms = $this->floorRooms(3);

        // Debug: /floor/3?debug=1
        if ($request->boolean('debug')) {
            dd([
                'floor' => 3,
                'count' => $rooms->count(),
                'has_48' => $rooms->has(48),
                'keys_sample' => $rooms->keys()->take(30),
                'room_48' => $rooms[48] ?? null,
            ]);
        }

        return view('floors.3f', compact('rooms'));
    }

    public function floor4(Request $request)
    {
        $rooms = $this->floorRooms(4);

        // Debug: /floor/4?debug=1
        if ($request->boolean('debug')) {
            dd([
                'floor' => 4,
                'count' => $rooms->count(),
                'has_48' => $rooms->has(48),
                'keys_sample' => $rooms->keys()->take(30),
                'room_48' => $rooms[48] ?? null,
            ]);
        }

        return view('floors.4f', compact('rooms'));
    }
}