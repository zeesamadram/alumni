<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFeed extends Model
{
    protected $fillable = [
        'user_id',
        'feed_category',
        'the_feed',
        'feed_id'
    ];

    public function cat(){
        return $this->hasOne(FeedCategory::class,'feed_category','feed_category');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function users(){
        return $this->hasOne(User::class,'id','liked_by');
    }

    public function img(){
        return $this->hasOne(PostFeed::class,'id','feed_id');
    }

    public function likes()
    {
        return $this->hasMany(PostLike::class,'post_id','feed_id');
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class,'post_id','feed_id');
    }
}
