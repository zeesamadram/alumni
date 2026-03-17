@extends('layouts.custom')

@section('content')

<style>

.login-bg{
    background:linear-gradient(135deg,#2e7d32,#43a047,#66bb6a);
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.login-card{
    background:white;
    border-radius:15px;
    box-shadow:0 12px 30px rgba(0,0,0,0.2);
    overflow:hidden;
    max-width:850px;
    width:100%;
}

.login-left{
    background:linear-gradient(135deg,#1b5e20,#43a047);
    color:white;
    padding:40px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.login-right{
    padding:40px;
}

.login-title{
    font-weight:bold;
    margin-bottom:20px;
    color:#2e7d32;
}

.form-control{
    border-radius:8px;
    padding:10px;
}

.btn-login{
    background:linear-gradient(90deg,#2e7d32,#43a047);
    border:none;
    font-weight:bold;
    padding:10px;
}

.btn-login:hover{
    background:#1b5e20;
}

</style>

<div class="login-bg">
    <div class="login-card">
        <div class="row g-0">
        <!-- Left Branding -->
            <div class="col-md-5 login-left">
                <h3>CAU Alumni Portal</h3>
                <p class="mt-3">
                Connect with fellow alumni, share achievements, and support your university community.
                </p>
            </div>
            <!-- Login Form -->
            <div class="col-md-7 login-right">
            <h4 class="login-title">Login</h4>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label">Remember Me</label>
                </div>
                    <button class="btn btn-login w-100 text-white">
                    Login
                    </button>
                <div class="text-center mt-3">
                Don't have an account?  
                <a href="{{ route('register') }}">Register</a>
                <br>
                Forgot Password ?  
                <a href="{{ url('forgot-password') }}">Reset Password</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection