@extends('layouts.custom')

@section('content')

<style>

.forgot-bg{
background:linear-gradient(135deg,#2e7d32,#43a047,#66bb6a);
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.forgot-card{
background:white;
border-radius:15px;
padding:40px;
box-shadow:0 12px 30px rgba(0,0,0,0.2);
max-width:500px;
width:100%;
}

.forgot-title{
color:#2e7d32;
font-weight:bold;
margin-bottom:20px;
}

.btn-reset{
background:linear-gradient(90deg,#2e7d32,#43a047);
border:none;
font-weight:bold;
}

.btn-reset:hover{
background:#1b5e20;
}

</style>

<div class="forgot-bg">

<div class="forgot-card">

<h4 class="forgot-title text-center">Forgot Password</h4>

<p class="text-muted text-center mb-4">
Enter your email address and we will send you a password reset link.
</p>

@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}">

@csrf

<div class="mb-3">

<label>Email Address</label>

<input 
type="email" 
name="email" 
class="form-control"
required
>

</div>

<button class="btn btn-reset w-100 text-white">

Send Reset Link

</button>

</form>

<div class="text-center mt-3">

<a href="{{ route('login') }}">
Back to Login
</a>

</div>

</div>

</div>

@endsection