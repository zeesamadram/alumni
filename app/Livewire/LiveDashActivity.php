<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserFeed;
use App\Models\PostFeed;
use App\Models\PostComment;
use App\Models\PostLike;
use Auth;

class LiveDashActivity extends Component
{
    public $my_comment;

    public function render()
    {
        $feeds = UserFeed::orderBy('id','DESC')->limit(5)->get();
        return view('livewire.live-dash-activity', compact('feeds'));
    }

    public function commentadd($feed_id){
        date_default_timezone_set("Asia/Kolkata");
        PostComment::create([
            'post_id'=>$feed_id,
            'the_comment' => $this->my_comment,
            'commented_by' => Auth::user()->id
        ]);
    }

    public function like_feed($feed_id){
        date_default_timezone_set("Asia/Kolkata");
        PostLike::updateOrCreate(
            [
                'post_id'=>$feed_id,
                'liked_by' => Auth::user()->id
            ],
            [
                'emoticon_type' => "like",
            ]
        );
    }
}
