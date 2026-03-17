<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = [
        'post_id',
        'the_comment',
        'commented_by'
    ];

    public function user(){
        return $this->hasOne(User::class,'id','commented_by');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
