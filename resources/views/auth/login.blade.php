
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container bg-white mt-5 p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0 dark-signin">Sign in</h1>
                        <p>Enter your email address and password to access the portal.</p>
                        <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2 bg-white p-2" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                @if (Route::has('password.request'))    
                                    <a href="{{ route('password.request') }}" class="float-right">Forgot password?</a>
                                @endif
                                <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" name="password"
                                required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 bg-white p-2" />
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Sign in</button>
                            </div>
                            {{-- <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div> --}}
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('assets/images/valasys/valasys-logo.png') }}" class="img-fluid" alt="logo"></a>
                        <div class="slick-slider11" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="{{ asset('assets/images/valasys/login-banner.png') }}" class="img-fluid mb-4" alt="logo">
                                {{-- <h4 class="mb-1 text-white">Manage your orders</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p> --}}
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/valasys/login-banner-2.png') }}" class="img-fluid mb-4" alt="logo">
                                {{-- <h4 class="mb-1 text-white">Manage your orders</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p> --}}
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/valasys/login-banner-3.png') }}" class="img-fluid mb-4" alt="logo">
                                {{-- <h4 class="mb-1 text-white">Manage your orders</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
</x-guest-layout>
