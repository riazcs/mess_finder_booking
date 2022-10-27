<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function messes()
    {
        return $this->belongsToMany(Property::class, 'mess_id', 'id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }
}
