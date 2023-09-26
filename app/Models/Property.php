<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Models\User;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'details',
        'image',
        'title',
        'room',
        'seat',
        'floar',
        'price',
        'location',
        'updated_at',
        'created_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
       
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'bookings');
    }
}
