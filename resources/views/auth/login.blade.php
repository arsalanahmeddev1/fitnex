@extends('layouts.website.master')
@section('title', $page_title)
<style>
    .log-forms {
    padding: 30px;
    margin: 20px;
    border-radius: 20px;
    background: linear-gradient(315deg, #4ab0f5, #ffffff);
    box-shadow: 18px 20px 20px 0px rgb(0 0 0 / 21%), 0 6px 20px rgb(0 0 0 / 8%);
    }
    .login-sec {
        padding: 50px 0;
    }
</style>
@section('content')
    <!-- BANNER SEC -->
    @if (!empty($banner->image))
        <section class="inner-banner sign-up"
            style="background-image: url('{{ asset('public/admin/assets/images/banner') }}/{{ $banner->image }}');">
        @else
            <section class="inner-banner sign-up"
                style="background-image: url('{{ asset('public/admin/assets/images/images.png') }}');" style="width:100%">
    @endif
    <div class="banner-wrapper position-relative z-1">
        <div class="container">
            <div class="row">
                @include('website.include.social-links')
                <div class="col-lg-10 col-xl-9" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="card">
                        <div class="shape-1"></div>
                        @if (isset($banner))
                            <h1 class="hd-70">{{ $banner->name }}</h1>
                            <p>{!! $banner->short_description !!}</p>
                            <p>{!! $banner->description !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="login-sec pt-b-80">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 login-content">
                    <div>
                        <h4 class="text-uppercase hd-42 heading mb-20"><span>WELCOME</span> TO</h4>
                        <h1 class="login-head hd-20 mb-20 text-capitalize">FITNEX
                        </h1>
                        <p class="hd-20 fw-medium text-capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>
                </div>
                <div class="col-md-6 form-bg card-body" data-aos="flip-left" data-aos-easing="linear"
                data-aos-duration="1500">
                    <div class="log-forms">
                        <h1 class="login-head text-uppercase hd-42 heading mb-20"><span>LOGIN NOW</span></h1>
                        @if (Session::has('error'))
                            <p class="alert alert-danger" id="error-alert">{{ Session::get('error') }}</p>
                        @endif
                        @if (Session::has('message'))
                            <p class="alert alert-success" id="success-alert">{{ Session::get('message') }}</p>
                        @endif
                        <form method="POST" action="{{ route('user.authenticate') }}">
                            @csrf
                            <div class="form-group field-wrap">
                                <input class="input-field" name="email" value="{{ old('email') }}" type="email"
                                    placeholder="Email Address" style="border: 1px solid #cd8904;">
                                <span style="color: red">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group field-wrap">
                                <input class="input-field" type="password" placeholder="Password" name="password" required
                                    autocomplete="current-password" style="border: 1px solid #cd8904;">
                                <span style="color: red">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mx-auto d-flex justify-content-center text-capitalize w-100 mb-20" name="form1">Login</button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="login-head fs-18" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>
                        </form>
                        <div class="form-under-btn">
                            <div class="forgot"><a href="{{ route('forgot-password') }}">Forgot Password?</a></div>
                            <p>Don't have an account? <a href="{{ route('registration') }}">Register</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <!-- BANNER SEC -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            setTimeout(function() {
                errorAlert.style.display = 'none';
            }, 10000); // 10 seconds
        }
    });
</script>
