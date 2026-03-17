@extends("layouts.custom")
@section("content")
<style>
    a{
        text-decoration:none;
        color:black;
    }
    a:hover{
        color:blue;
    }
</style>
<div class="page-content">
<div class="container-fluid mt-4">

<div class="row">

<!-- LEFT SIDEBAR -->

<div class="col-md-3">

    <div class="card mb-3 p-3">

        <div class="sidebar-title">Quick Links</div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{url('login')}}">Already a Member? Login</a></li>
                <li class="list-group-item"><a href="{{url('register')}}">Register as Alumni</a></li>
                <li class="list-group-item">Submit Achievement</li>
                <li class="list-group-item">Alumni Directory</li>
                <li class="list-group-item">Job Board</li>

            </ul>

    </div>

<div class="card p-3">

    <div class="sidebar-title">Upcoming Events</div>

        <ul class="list-group list-group-flush">

            <li class="list-group-item">
            Alumni Meet 2026
            <br><small>30 March</small>
            </li>

            <li class="list-group-item">
            Agri Innovation Summit
            <br><small>12 April</small>
            </li>

        </ul>

    </div>

</div>

<!-- MAIN CONTENT -->

<div class="col-md-6">

    <div class="card p-3 mb-3">

        <h5>Latest Updates</h5>

    </div>

<!-- Update Card -->

    <div class="card update-card p-3 mb-3">

        <img src="https://cau.ac.in/wp-content/uploads/2020/12/NewCAULogo.gif" width="200px" class="img-fluid mb-3">

        <h5>Annual Alumni Meet Announced</h5>

        <small>Posted by Admin | Mar 10</small>

            <p>
            The Central Agricultural University Alumni Association has announced the Annual Alumni Meet 2026.
            </p>

            <button class="btn btn-success btn-sm">Read More</button>

    </div>

    <div class="card update-card p-3 mb-3">

        <h5>Alumni Achievement</h5>

        <small>Posted by Admin</small>

            <p>
            Dr. Rahul Singh received the National Agriculture Innovation Award.
            </p>

        <button class="btn btn-success btn-sm">Read More</button>

    </div>
</div>
<!-- RIGHT SIDEBAR -->

    <div class="col-md-3">

        <div class="card p-3 mb-3">

            <div class="sidebar-title">Active Alumni</div>

                <ul class="list-group list-group-flush">
                    @foreach(\App\Models\User::orderBy('id','DESC')->limit(5)->get() as $user)
                    <li class="list-group-item"><a href="{{url($user->name.'/profile/'.$user->id)}}">{{ $user->name }}</a></li>
                    @endforeach
                </ul>

            </div>

        <!-- Donation Widget -->

            <div class="card p-3">

                <div class="sidebar-title">Alumni Donation Fund</div>

                <p>Goal: ₹5,00,000</p>

                    <div class="progress mb-2">

                        <div class="progress-bar bg-success" style="width:65%">

                            65%

                        </div>

                    </div>

                <p>Collected: ₹3,25,000</p>

                    <button class="btn btn-warning w-100">Donate Now</button>

                </div>

            </div>

        </div>

    </div>
@endsection