@extends('layouts.custom')

@section('content')

<style>

.register-bg{
    background: linear-gradient(135deg,#2e7d32,#43a047,#66bb6a);
    min-height:90vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.register-card{
    background:white;
    border-radius:15px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    width:100%;
    max-width:700px;
}

.form-control{
    border-radius:8px;
    padding:10px;
}

.btn-register{
    background:linear-gradient(90deg,#2e7d32,#43a047);
    border:none;
    padding:12px;
    font-weight:bold;
}

.btn-register:hover{
    background:#1b5e20;
}

.form-title{
    color:#2e7d32;
    font-weight:bold;
    margin-bottom:20px;
}

</style>


<div class="register-bg">

<div class="register-card">

<h3 class="text-center form-title">Alumni Registration</h3>

<form method="POST" action="{{ route('register') }}">

@csrf

<div class="row">

<div class="col-md-6 mb-3">
<label>Full Name</label>
<input type="text" class="form-control" name="name" required>
@error("name")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-md-6 mb-3">
<label>Email</label>
<input type="email" class="form-control" name="email" required>
@error("email")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-md-6 mb-3">
<label>Password</label>
<input type="password" class="form-control" name="password" required>
@error("password")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-md-6 mb-3">
<label>Confirm Password</label>
<input type="password" class="form-control" name="password_confirmation" required>
</div>

<div class="col-md-6 mb-3">
<label>College</label>
<select class="form-control" name="college">

    <option value="-1">-- Select a College --</option>
    @foreach(\App\Models\Location::orderBy('college')->distinct()->get("college") as $college)
    <option value="{{ $college->college }}">{{ $college->college }}</option>
    @endforeach
</select>
@error("college")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-md-6 mb-3">
<label>Department</label>
<input type="text" class="form-control" name="department">
@error("department")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-md-6 mb-3">
<label>Batch / Year of Passing</label>
<input type="number" class="form-control" name="batch">
@error("batch")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-md-6 mb-3">
<label>Current Profession</label>
<input type="text" class="form-control" name="current_profession">
@error("current_profession")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

<div class="col-12 mb-3">
<label>Current Location</label>
<input type="text" class="form-control" name="current_location">
@error("current_location")<span style="color:red; font-size:10px">{{$message}}</span>@enderror
</div>

</div>

<button class="btn btn-register w-100 text-white">
Register
</button>

<div class="text-center mt-3">

Already registered?  
<a href="/login">Login</a>

</div>

</form>

</div>

</div>

@endsection