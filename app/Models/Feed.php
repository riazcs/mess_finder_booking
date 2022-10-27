<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Models\User;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'details',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
       
    }
}
