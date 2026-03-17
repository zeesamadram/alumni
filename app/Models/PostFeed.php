<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostFeed extends Model
{
    protected $fillable = [
        'user_id',
        'images',
        'the_feed'
    ];
}
