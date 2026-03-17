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
                <a href="#" data-bs-toggle="modal" data-bs-target="#profile"><img src="{{ auth()->user()->profile_photo ?? asset('assets/profile_pic.jpg') }}" class="profile-pic"></a>
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

<div class="row">
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-green d-flex justify-content-between align-items-center">
            <div>
                <h4>1,245</h4>
                Total Alumni
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-blue d-flex justify-content-between align-items-center">
            <div>
                <h4>18</h4>
                Upcoming Events
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-orange d-flex justify-content-between align-items-center">   
            <div>
                <h4>₹3,25,000</h4>
                Donations
            </div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#donations"><i class="bi bi-arrows-angle-expand fs-4"></i></a>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-purple d-flex justify-content-between align-items-center">
            <div>
                <h4>96</h4>
                Achievements
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="donations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background:linear-gradient(135deg,yellow,orange);">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Donation Perks</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <H3>These are donation perks</H3>
        <ol>
            <li>Donate 500 : Post Update</li>
            <li>Donate 1000: Profile Update Once</li>
            <li>Donate 3000: Profile Update 5 Times</li>
            <li>Donate 5000: Profile Update unlimited</li>
            <li>Donate 10000: Photo/Image Upload</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="row">

<!-- ACTIVITY FEED -->

<div class="col-md-8">

    @yield('act')

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