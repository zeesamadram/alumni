<!-- Welcome Banner -->
 @php
 $donation = \App\Models\Donation::where('user_id',Auth::user()->id)->sum('amount');
 $st="";
 if($donation > 9999){
    $st = "gold";
    }
elseif($donation > 4999){
    $st = "silver";
}
else{
    $st = "gray";
}
 @endphp
    <div class="dashboard-banner position-relative">
        <div class="banner-wrapper">
            <div class="banner-left">
                <a href="#" data-bs-toggle="modal" data-bs-target="#profile">
                    <img style="border:6px solid {{$st}};" src="{{ auth()->user()->profile_photo ?? asset('assets/profile_pic.jpg') }}" class="profile-pic">
                </a>
            <div>
            <h3 class="mb-1">Welcome Back, {{ auth()->user()->name }}</h3>
            <p class="mb-0">
                Stay connected with fellow alumni of CAU Imphal.
            </p>
        </div>
    </div>
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(135deg,yellow,orange);">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profile Picture</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>When your donated amount reaches Rs.1000, you can update profile, once!</h4>
                <h4>When you donate at least Rs.5000, you have unlimited profile update facility.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{ route('logout') }}" class="logout-btn">
@csrf
<i class="bi bi-cloud-plus"></i>
<button style="background:linear-gradient(135deg,#6a1b9a,#ab47bc); color:white" class="btn btn-sm">
Logout
</button>
</form>

</div>