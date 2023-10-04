@extends('layouts.app')



@section('mehul')


                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End Here -->
<!-- Begin Mobile Menu Area -->
<div class="mobile-menu-area d-lg-none d-xl-none col-12">
    <div class="container">
        <div class="row">
            <div class="mobile-menu">
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End Here -->
</header>
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="home">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
            <!-- Login Form s-->
            <form action="/login" method="POST" >
                @csrf
                {{-- @dd($request); --}}
                @endphp
                <div class="login-form">
                    <h4 class="login-title">Login</h4>
                    <div class="row">
                        <div class="col-md-12 col-12 mb-20">
                            <label>Email Address*</label>
                            <input class="mb-0" type="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="col-12 mb-20">
                            <label>Password</label>
                            <input class="mb-0" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-8">
                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                <input type="checkbox" id="remember_me">
                                <label for="remember_me">Remember me</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                            <a href="#"> Forgotten pasward?</a>
                        </div>
                        <div class="col-md-12">
                            <button class="register-button mt-0">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
            <form action="" method="POST">
                @csrf{{-- a token mate kam ma avse jo different user same time e same vastu login kare to --}}
                <div class="login-form">
                    <h4 class="login-title">Register</h4>
                    <div class="row">
                        @csrf
                        <div class="col-md-6 col-12 mb-20">
                            <label>Full Name</label>
                            <input class="mb-0" type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="col-md-6 col-12 mb-20">
                            <label>User Name</label>
                            <input class="mb-0" type="text" name="username" placeholder="User Name">
                        </div>
                        <div class="col-md-12 mb-20">
                            <label>Email Address*</label>
                            <input class="mb-0" type="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="col-md-6 mb-20">
                            <label>Mobile No</label>
                            <input class="mb-0" type="password" name="mobile" placeholder="Mobile NO">
                        </div>
                        <div class="col-md-6 mb-20">
                            <label>Password</label>
                            <input class="mb-0" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button name ="register" class="register-button mt-0">Register </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Login Content Area End Here -->

@endsection
