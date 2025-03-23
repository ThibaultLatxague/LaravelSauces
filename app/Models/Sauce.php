<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    protected $fillable = [
        'name',
        'manufacturer',
        'description',
        'mainPepper',
        'imageUrl',
        'heat',
        'likes',
        'dislikes',
        'usersLiked',
        'usersDisliked'
    ];
}
