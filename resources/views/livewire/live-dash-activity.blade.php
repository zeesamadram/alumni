<div>
    <h5>Latest Alumni Activity</h5>
    <hr>
    @foreach($feeds as $feed)
    <div class="card mb-3 p-3">
        <p>
            <strong>{{ $feed->user->name }}</strong> 
            {{ $feed->the_feed }}
                @if($feed->feed_category == "post_feed")
                <a href="{{url('userfeed/'. \Illuminate\Support\Facades\Crypt::encryptString($feed->id))}}" class="badge bg-warning text-decoration-none">
                {{ $feed->cat->the_category }}
                </a>
                @else
                {{ $feed->cat->the_category }}
                @endif
        <i style="font-size:10px">{{ $feed->created_at }}</i>
        </p>
        @if($feed->feed_category == "post_feed")
        <div class="d-flex gap-3">
            <a href="#" wire:click="like_feed({{$feed->feed_id}})" class="btn btn-sm btn-outline-primary">
            👍 Like ({{ $feed->likes->count() }})
            </a>
            <button class="btn btn-sm btn-outline-secondary"
            data-bs-toggle="collapse"
            data-bs-target="#comments{{ $feed->id }}">
            💬 Comment ({{ $feed->comments->count() }})
            </button>
            <button class="btn btn-sm btn-outline-success"
            data-bs-toggle="collapse"
            data-bs-target="#likes{{ $feed->id }}">
            👥 Likes
            </button>
        </div>
    {{-- Likes List --}}
        <div class="collapse mt-2" id="likes{{ $feed->id }}">
            @foreach($feed->likes as $like)
                <span class="badge bg-light text-dark">
                {{ optional($like->user)->name }} Liked on <span style="font-size:9px;">{{ $like->updated_at }}</span>
                </span>
            @endforeach
        </div>
    {{-- Comments --}}
        <div class="collapse mt-2 shadow-sm small" id="comments{{ $feed->id }}"  wire:ignore.self>
            @foreach($feed->comments as $comment)
                <div class="border rounded p-2 mb-2">
    
                    <strong>{{ $comment->user->name }}</strong>

                    <div class="d-flex justify-content-between">
                        <span>{{ $comment->the_comment }}</span>
                        <i class="text-muted" style="font-size:9px">{{ $comment->updated_at }}</i>
                    </div>

                </div>
            @endforeach
            <form wire:submit.prevent="commentadd({{$feed->feed_id}})" class="d-flex gap-2">
                <input type="text" class="form-control form-control-sm" wire:model.defer="my_comment" placeholder="Write comment...">
                <button type="submit" class="btn btn-sm btn-success">Post</button>
            </form>
        </div>
        @endif
    </div>
    @endforeach
</div>
