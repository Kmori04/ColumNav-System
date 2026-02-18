<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
    public $timestamps = false;

    protected $fillable = [
        'room_name',
        'room_description',
        'floor_number',
        'is_active',
    ];

    protected $casts = [
        'floor_number' => 'integer',
        'is_active' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'room_id';
    }

    public function scopeActive($q)
    {
        return $q->where('is_active', 1);
    }
}