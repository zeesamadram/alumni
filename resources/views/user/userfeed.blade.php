@extends('layouts.custom')
@section('content')
<div class="container mt-4">

@include("partials.afterlogin")

<div class="row">
    <div class="col-md-12">
        <div class="card activity-card p-3 mb-3">
            <h5></h5>
            @livewire('live-individual-feed',['id' => $id])
            <br>
            <div class="text-center">
               <a href="{{url('/dashboard')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection