@extends('layouts.custom')

@section('content')

<div class="container mt-4">

@include("partials.afterlogin")

<div class="row">
<!-- ACTIVITY FEED -->
<div class="col-md-12">
    <div class="card activity-card p-3 mb-3">
    <h5>Post Achievement</h5>
        @livewire('live-a-achievement')
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