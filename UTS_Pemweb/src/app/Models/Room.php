<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ['room_id', 'status'];

    public function tenants()
    {
        return $this->hasMany(Tenant::class, 'room_id');
    }
}
