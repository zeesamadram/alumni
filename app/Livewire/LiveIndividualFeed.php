<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserFeed;
use App\Models\PostComment;
use Auth;

class LiveIndividualFeed extends Component
{
    public $id;
    public $my_comment;
    public $limit = 5;
    public $post;

    public function loadMore()
    {
        $this->limit += 5;
    }
    public function mount($id)
    {
        $this->id = $id;
        $this->post = UserFeed::find($this->id);
    }

    protected $rules = [
        'my_comment'=> 'required',
    ];

    public function render()
    {
        $post = UserFeed::find($this->id);
        $comments = PostComment::where('post_id', $this->id)
            ->latest()
            ->take($this->limit)
            ->get();
        return view('livewire.live-individual-feed', compact(['post','comments']));
    }

    public function commentadd(){
        date_default_timezone_set("Asia/Kolkata");
        PostComment::create([
            'post_id'=>$this->id,
            'the_comment' => $this->my_comment,
            'commented_by' => Auth::user()->id
        ]);
    }
}
