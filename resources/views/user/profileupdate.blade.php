@extends('layouts.custom')

@section('content')

<div class="container mt-4">

@include("partials.afterlogin")

<div class="row">
<!-- ACTIVITY FEED -->
<div class="col-md-12">
    <div class="card activity-card p-3 mb-3">
    <h5>Profile Update</h5>
        <div class="row">
            <div class="col-4">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" />
            </div>
            <div class="col-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}" />
            </div>
            <div class="col-4">
                <label for="contact">Contact number</label>
                <input type="text" class="form-control" name="contact" placeholder="Contact Number" />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender">
                    <option>-- Select a Gender --</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-4">
                <label for="category">Category</label>
                <select class="form-control" name="gender">
                    <option>-- Select a Category --</option>
                    <option>ST</option>
                    <option>SC</option>
                    <option>OBC</option>
                    <option>EWS</option>
                    <option>GEN</option>
                </select>
            </div>
            <div class="col-4">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" placeholder="Date of Birth" />
            </div>
        </div>
        <hr>
        <h5>Association History</h5>
        <div class="row">
            <div class="col-4">
                <label for="name">Passed out from</label>
                <select class="form-control" name="college">
                    <option>-- Select a College --</option>
                    @foreach(\App\Models\Location::orderBy('college')->distinct()->get("college") as $college)
                    <option value="{{ $college->college }}">{{ $college->college }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="email">Program</label>
                <select class="form-control" name="programme">
                    <option>-- Select a Program --</option>
                    @foreach(\App\Models\Location::orderBy('programme')->distinct()->get("programme") as $programme)
                    <option value="{{ $programme->programme }}">{{ $programme->programme }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="email">Year of Passing</label>
                <input type="text" class="form-control" name="email" placeholder="Year of Passing" />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="contact">OGPA</label>
                <input type="text" class="form-control" name="contact" placeholder="OGPA/CGPA" />
            </div>
            <div class="col-8">
                <label for="annual_income">Thesis/Project Title</label>
                <input type="text" class="form-control" name="annual_income" placeholder="Thesis/Project Title" />
            </div>
        </div>
        <hr>
        <h5>Present Status</h5>
        <div class="row">
            <div class="col-4">
                <label for="occupation">Current Occupation</label>
                <input type="text" class="form-control" name="occupation" placeholder="Current Occupation" />
            </div>
            <div class="col-4">
                <label for="annual_income">Annual Income</label>
                <input type="text" class="form-control" name="annual_income" placeholder="Annual Income" />
            </div>
        </div>
    </div>
<!-- QUICK ACTIONS -->
</div>
<div class="card activity-card p-3 mb-3">
    <div class="text-center">
        <a href="{{url('/dashboard')}}" class="btn btn-info">Back</a>
    </div>
</div>
</div>

@endsection