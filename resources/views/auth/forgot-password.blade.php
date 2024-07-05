<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="sign-in-page">
        <div class="container mt-5 p-0 bg-white">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-1"><strong>Reset Password</strong></h1>
                        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="d-inline-block w-100">

                                <button type="submit" class="btn btn-primary float-right">Email Password Reset Link</button>
                            </div>

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
</x-guest-layout>
