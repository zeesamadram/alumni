<div>
    <style>
        .zoom-img{
            cursor: zoom-in;
            transition: transform 0.3s ease;
        }
        .feed-img{
            max-width:400px;
        }
        .zoom-img.zoomed{
            transform: scale(4);
            position: relative;
            z-index: 1000;
        }
    </style>
    <div class="row">
        <div class="col-4">
            {{$post->the_feed}}
        </div>
        <div class="col-4">
            <img src="{{ asset('storage/'.optional($post->img)->images ?? '' )}}" width="150px" class="img-fluid rounded zoom-img"
            onclick="toggleZoom(this)">
        </div>
        <div class="col-4">
            <h5>Comments</h5>
            @foreach($comments as $comment)
                <div class="card shadow-sm">
                    <div class="card-body p-1 small">
                        <strong>{{ $comment->user->name }}</strong><br> {{ $comment->the_comment }} <span style="color:blue; font-size:9px">{{ $comment->updated_at }}</span>
                    </div>
                </div>
            @endforeach
            <a href="#" wire:click="loadMore" class="text-decoration-none">
                Show More...
            </a>
            <form wire:submit.prevent="commentadd" class="d-flex gap-2">
                <input type="text" wire:model.defer="my_comment" class="form-control">
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function toggleZoom(img){
            img.classList.toggle('zoomed');
        }
    </script>
</div>
