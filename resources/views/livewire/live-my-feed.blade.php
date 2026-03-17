<div>
    <div class="row">
        <div class="col-6">
            <span style="color:red; font-size:12px">You have @if($donation > 499) Unlimited @else {{5 - $feedcount}} free @endif post</span>
            <form wire:submit.prevent="feed" class="d-flex g-3">
                <input type="text" wire:model.defer="the_feed" class="form-control" placeholder="Type something to post" />
                @if($donation > 9999)
                <input type="file" wire:model="image" class="form-control">
                @endif
                <button class="btn btn-primary" type="submit">Post</button>
            </form>
            @if(Session::has('message'))
                <span style="color:red; font-size:12px">{{Session::get('message')}}</span>
            @endif
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" width="150">
                @endif
        </div>
        <div class="col-6">
            
            <h5>Feed Post History</h5>
                <div class="row">
                    <div class="col-3">Sl.No.</div>
                    <div class="col-3">Post</div>
                    <div class="col-3">Image</div>
                    <div class="col-3">Action</div>
                </div>
                @foreach($myfeeds as $key=>$myfeed)
                <div class="row">
                    <div class="col-3">{{$key+1}}</div>
                    <div class="col-3"><a href="#" class="text-decoration-none">{{ $myfeed->the_feed }}</a></div>
                    <div class="col-3">@if($myfeed->images)<img src="{{ asset('storage/'.$myfeed->images)}}" height="100px" width="100px">@endif</div>
                    <div class="col-3"> <a href="#" wire:click="delete({{$myfeed->id}})" class="badge bg-danger text-decoration-none">Delete</a> </div>
                </div>
                @endforeach
            </table>
        </div>
    </div>
</div>