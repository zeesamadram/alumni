<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{

    protected $fillable = [
        'post_id',
        'emoticon_type',
        'liked_by'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'liked_id','id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','liked_by');
    }
}
