<!DOCTYPE html>
<html>
<head>
<title>CAU Alumni Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"><style>
html, body {
    height: 100%;
}

body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.main-content {
    flex: 1;
}

.card{
    border:none;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-4px);
}

/* Update cards */

.update-card img{
    border-radius:10px;
}

/* donation */

.progress{
    height:20px;
}

/* sidebar title */

.sidebar-title{
    font-weight:bold;
    color:#2e7d32;
    margin-bottom:10px;
}
.navbar{
    background: linear-gradient(90deg,orange,purple,#66bb6a);
}

/* Menu style */

.navbar-nav .nav-link{
    color:white !important;
    font-weight:500;
    padding:12px 18px;
}

.navbar-nav .nav-link:hover{
    color:#ffd54f !important;
}

/* Dropdown menu */

.dropdown-menu{
    border-radius:10px;
    border:none;
    box-shadow:0 6px 20px rgba(0,0,0,0.15);
}

/* Show dropdown on hover */

.nav-item.dropdown:hover > .dropdown-menu{
    display:block;
    margin-top:0;
}

/* Submenu */

.dropdown-submenu{
    position:relative;
}

.dropdown-submenu .dropdown-menu{
    top:0;
    left:100%;
    margin-top:-1px;
}

/* Show submenu on hover */

.dropdown-submenu:hover > .dropdown-menu{
    display:block;
}

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
@livewireStyles
</head>

<body>

    @include('partials.navbar')

    <div class="main-content">
        @yield('content')
    </div>

    @include('partials.footer')

@livewireScripts
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>