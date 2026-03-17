@extends('layouts.custom')

@section('content')

<div class="container mt-4">

@include("partials.afterlogin")

@include("partials.pills")
<div class="row">
<!-- ACTIVITY FEED -->
<div class="col-md-8">
     @include("partials.buttons")
    <div class="card activity-card p-3 mb-3">
    @livewire('live-dash-activity')
    </div>
<!-- QUICK ACTIONS -->
</div>
@include("partials.sidebar1")
</div>

@endsection