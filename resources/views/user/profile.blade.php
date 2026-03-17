@extends('layouts.custom')
@section('content')
<style>
/* Dashboard header */
.dashboard-banner{
    background:linear-gradient(135deg,#2e7d32,#43a047,#66bb6a);
    color:white;
    padding:30px;
    border-radius:12px;
    margin-bottom:25px;
}

/* Stats cards */

.stat-card{
    border:none;
    border-radius:12px;
    color:white;
    padding:20px;
    font-weight:bold;
    box-shadow:0 6px 18px rgba(0,0,0,0.2);
    transition:0.3s;
}

.stat-card:hover{
    transform:translateY(-5px);
}

.stat-green{
    background:linear-gradient(135deg,#2e7d32,#66bb6a);
}

.stat-blue{
    background:linear-gradient(135deg,#1565c0,#42a5f5);
}

.stat-orange{
    background:linear-gradient(135deg,#ef6c00,#ffa726);
}

.stat-purple{
    background:linear-gradient(135deg,#6a1b9a,#ab47bc);
}

/* activity */

.activity-card{
    border:none;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

/* quick buttons */

.quick-btn{
    padding:12px;
    border-radius:8px;
    font-weight:bold;
}

.profile-pic{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid rgba(255,255,255,0.5);
}

.banner-wrapper{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
}

.banner-left{
    display:flex;
    align-items:center;
    gap:15px;
}

.logout-btn{
    position:absolute;
    bottom:15px;
    right:20px;
}
</style>

<div class="container mt-4">
<!-- Welcome Banner -->
    <div class="dashboard-banner position-relative">
        <div class="banner-wrapper">
            <div class="banner-left">
                <img src="{{ $user->profile_photo ?? asset('assets/profile_pic.jpg') }}" class="profile-pic">
            <div>
            <h3 class="mb-1">{{ $user->name }}</h3>
            <p class="mb-0">
                Batch: {{ $user->batch }} of {{ $user->college }}
            </p>
            <p class="mb-0">
                Stay connected with fellow alumni of CAU Imphal.
            </p>
        </div>
    </div>
</div>
<button style="background:linear-gradient(135deg,#6a1b9a,#ab47bc); color:white" class="btn btn-sm logout-btn">Add in Circle</button>
</div>
<div class="row">
<!-- ACTIVITY FEED -->
<div class="col-md-8">
    <div class="card activity-card p-3 mb-3">

<h5>Quick Actions</h5>

<div class="row">

<div class="col-md-4 mb-2">
<button class="btn btn-success w-100 quick-btn"
data-bs-toggle="collapse"
data-bs-target="#achievementPanel">
Achievements
</button>
</div>

<div class="col-md-4 mb-2">
<button class="btn btn-primary w-100 quick-btn"
data-bs-toggle="collapse"
data-bs-target="#publicationPanel">
Publications
</button>
</div>

<div class="col-md-4 mb-2">
<button class="btn btn-warning w-100 quick-btn"
data-bs-toggle="collapse"
data-bs-target="#donationPanel">
Donations
</button>
</div>

</div>

<!-- EXPANDABLE PANELS -->

<div class="collapse mt-3" id="achievementPanel">
<div class="card card-body">

<h6>Add Achievement</h6>

<input type="text" class="form-control mb-2" placeholder="Achievement title">

<textarea class="form-control mb-2" placeholder="Description"></textarea>

<button class="btn btn-success">Post Achievement</button>

</div>
</div>


<div class="collapse mt-3" id="publicationPanel">
<div class="card card-body">

<h6>Add Publication</h6>

<input type="text" class="form-control mb-2" placeholder="Publication title">

<input type="text" class="form-control mb-2" placeholder="Journal / Conference">

<button class="btn btn-primary">Submit Publication</button>

</div>
</div>


<div class="collapse mt-3" id="donationPanel">
<div class="card card-body">

<h6>Make a Donation</h6>

<input type="number" class="form-control mb-2" placeholder="Enter Amount">

<textarea class="form-control mb-2" placeholder="Remark"></textarea>

<button class="btn btn-warning">Donate</button>

</div>
</div>

</div>
    <div class="card activity-card p-3 mb-3">
    <h5>Post from {{ $user->name }}</h5>
    <hr>
        @foreach(\App\Models\UserFeed::orderBy('id','DESC')->limit(5)->get() as $feed)
        <p>
        <strong>{{ $feed->user->name }}</strong> {{ $feed->cat->the_category }} <i style="font-size:10px">{{ $feed->created_at }} </i>
        </p>
        @endforeach
    </div>
<!-- QUICK ACTIONS -->
</div>

<!-- SIDEBAR -->

<div class="col-md-4">

<!-- Events -->

<div class="card activity-card p-3 mb-3">
    <h5>Upcoming Events</h5>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
        Alumni Meet 2026
        <br><small>March 30</small>
        </li>
        <li class="list-group-item">
        Agri Innovation Summit
        <br><small>April 12</small>
        </li>
    </ul>

</div>
<!-- Donation Widget -->
    <div class="card activity-card p-3">
        <h5>Donation Progress</h5>
        <p>Goal: ₹5,00,000</p>
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width:65%">
                65%
                </div>
            </div>
        <p>Collected: ₹3,25,000</p>
        <button class="btn btn-warning w-100">
        Donate Now
        </button>
    </div>
</div>
</div>
</div>

@endsection