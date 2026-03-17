<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UserFeed;
use App\Models\PostFeed;
use App\Models\PostLike;
use App\Models\PostComment;
use App\Models\Donation;
use Illuminate\Support\Facades\Storage;
use Auth;

class LiveMyFeed extends Component
{
    use WithFileUploads;
    public $the_feed;
    public $id;
    public $image;
    public $selectedPost;

    protected $rules = [
        'the_feed' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:500' // 2MB
    ];

    public function render(){
        $myfeeds = PostFeed::orderBy('id','DESC')->where('user_id',Auth::user()->id)->limit(5)->get();
        $donation = Donation::where('user_id', Auth::id())->sum('amount');
        $feedcount = count(PostFeed::where('user_id', Auth::id())->get());
        return view('livewire.live-my-feed',[
            'myfeeds' => $myfeeds,
            'donation' => $donation,
            'feedcount' => $feedcount
        ]);
    }

    public function feed(){
        date_default_timezone_set("Asia/Kolkata");
        $imagePath = null;
        date_default_timezone_set("Asia/Kolkata");
        $donation = Donation::where('user_id', Auth::id())->sum('amount');
        $feedcount = count(PostFeed::where('user_id', Auth::id())->get());

        if ($this->image) {
            $imagePath = $this->image->store('feeds', 'public');
        }
        if($feedcount > 5){
            if($donation > 499){
                $postFeed = PostFeed::updateOrCreate(
                    [
                        'id' => $this->id ?? 0,
                        'user_id' => Auth::user()->id
                    ],
                    [
                        'images' => $imagePath,
                        'the_feed' => $this->the_feed
                    ]
                );

                UserFeed::create([
                    'feed_category' => 'post_feed',
                    'the_feed' => $this->the_feed,
                    'user_id' => Auth::user()->id,
                    'feed_id' => $postFeed->id
                ]);
                $this->reset();
            }
            else{
                Session()->flash("message","You are allotted with only 5 Free Posts. Donate 500 or more to be able to post more");
            }
        }
        else{
            $postFeed = PostFeed::updateOrCreate(
                [   'id'=>$this->id ?? 0,
                    'user_id'=>Auth::user()->id
                ],
                [
                    'images' => $imagePath,
                    'the_feed'=>$this->the_feed
                ]
            );
            UserFeed::create([
                'user_id'=>Auth::user()->id,
                'feed_category'=>'post_feed',
                'the_feed'=>$this->the_feed,
                'feed_id' => $postFeed->id
            ]);
            $this->reset();
        }
    }

    public function delete($id){
        $post = PostFeed::findOrFail($id);
        if ($post->images) {
            Storage::disk('public')->delete($post->images);
        }
        $post->delete();
        PostLike::where('post_id', $id)->delete();
        PostComment::where('post_id', $id)->delete();
        $this->reset();
    }
}
?>
