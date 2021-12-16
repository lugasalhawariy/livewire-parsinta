<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ambil model tweet
use App\Models\User;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['body'];


    //relasi to tweet (user memiliki banyak tweet)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
