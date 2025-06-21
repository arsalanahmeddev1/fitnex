<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font google -->
    <!-- slick sldier -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="header bg-black py-[10px]">
        <div class="container">
            <div class="topbar text-end mb-[5px]">
                <a href="" class="text-white font-secondary"><span class="pe-[10px] text-[#0079D4]"><i class="fa-solid fa-envelope"></i></span>youremailhere@.com</a>
            </div>
            <div class="border-b border-bottom"></div>
            <div class="grid grid-cols-2">
                <div class="col-span-1">
                    <nav>
                        <ul class="flex font-secondary text-white justify-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-span-1">
                    <a href="" class="btn primary-btn">Try for FREE</a>
                </div> -->
            </div>
        </div>
    </header>
    <section class="hero-banner" style="background: url('/images/hero-banner.png') no-repeat top/cover;">
        <div class="container">
            <div class="flex justify-center items-center flex-col text-center">
                <div class="label-area">Trusted by 100k+ clients</div>
                <div>
                    <h1 class="text-[100px] text-white font-bold max-w-[650px]">
                        Find Your Perfect Fit with <span class="primary-theme">Fitnex</span>
                    </h1>
                    <p class="text-white font-secondary text-[20px] mb-[20px] max-w-[600px]">
                        Connect with top wellness professionals—from fitness trainers to nutritionists—all in one place.
                    </p>
                    <div class="flex justify-center">
                        <a href="" class="btn primary-btn">Join as a Coach <span class="ps-[10px]"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-slider bg-black pt-[20px] pb-[100px]">
        <ul class="slider-01 bg-white py-[10px] flex justify-between">
            <li class="">
                <span class="text-white">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
        </ul>
        <ul class="slider-02 bg-primary-theme py-[10px] flex justify-between">
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
        </ul>
    </section>
    <section class="our-services bg-black">
        <div class="container">
            <h2 class="sec-hd text-center mb-[10px]">our services</h2>
            <p class="para text-center max-w-[490px] mx-auto para-white mb-[30px]">
                Strong offers 5 popular services to help you make
                comfortable choices that suit your needs.
            </p>
        </div>
        <div class="grid grid-cols-5">
            <div>
                <div class="our-services-item relative">
                    <img src="{{ asset('images/services-01.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="text-white text-[28px] font-bold">
                            Personal Training
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative">
                    <img src="{{ asset('images/services-01.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="text-white text-[28px] font-bold">
                            Personal Training
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative">
                    <img src="{{ asset('images/services-01.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="text-white text-[28px] font-bold">
                            Personal Training
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative">
                    <img src="{{ asset('images/services-01.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="text-white text-[28px] font-bold">
                            Personal Training
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative">
                    <img src="{{ asset('images/services-01.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="text-white text-[28px] font-bold">
                            Personal Training
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fitness-journey bg-black py-[100px]">
        <div class="container">
            <h2 class="sec-hd text-center mb-[10px] max-w-[670px] mx-auto">
                let’s us Transform Your
                Fitness Journey
            </h2>
            <p class="para text-center max-w-[490px] mx-auto para-white mb-[80px]">
                10 years of experience in the fitness industry and trusted by over 100.000 customers.
            </p>
        </div>
        <div class="flex justify-between items-center max-w-[1000px] mx-auto mb-[40px]">
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme">
                    +100k
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Clients
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme">
                    80
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Expert Trainers
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme">
                    8
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Branchs
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme">
                    10
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Year of experience
                </p>
            </div>
        </div>
        <div class="fitness-journey-slider">
            <div>
                <img src="{{ asset('images/journey-01.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/journey-01.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/journey-01.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/journey-01.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/journey-01.png') }}" alt="">
            </div>

        </div>
    </section>
    <section class="about-sec bg-black pb-[100px]">
        <div class="container">
            <div class="grid grid-cols-2 items-center gap-[30px]">
                <div>
                    <h3 class="primary-theme text-[36px] font-bold mb-[20px]">About Fitnex</h3>
                    <p class="para para-white mb-[10px]">
                        Fitnex was born from a passion for fitness and the frustration of navigating a fragmented wellness industry. We’re building an inclusive ecosystem that connects clients with expert coaches, streamlining the journey to better health, performance, and confidence.
                    </p>
                    <div class="flex">
                        <a href="" class="btn primary-btn">Leann More</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/about-sec-right.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="expert-trainers-sec bg-black pb-[100px]" style="background: url('/images/expert-trainers-bg.png') no-repeat top/cover;">
        <div class="container">
            <h2 class="sec-hd text-center mb-[10px]">expert trainers</h2>
            <p class="para text-center max-w-[490px] mx-auto para-white mb-[30px]">
                Achieve your fitness goals with our experienced
                and passionate trainers at strong.
            </p>
        </div>
    </section>
    <section class="testimonials-sec bg-black pb-[100px]">
        <div class="container">
            <h2 class="sec-hd text-center mb-[40px] max-w-[670px] mx-auto">
                What people say
            </h2>
        </div>
        <div class="testimonials-slider">
            <div class="testimonial-item">
                <div class="flex">
                    <div class="w-full">
                        <img src="{{ asset('images/testi-01.png') }}" class="w-full" alt="">
                    </div>
                    <div class="testi-content">
                        <ul class="stars justify-between max-w-[190px] mb-[10px] flex items-center">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <p class="para para-white mb-[10px]">
                            Overcame gym intimidation with strongX's friendly atmosphere. Personalized training plan helped me reach my fitness goals. Feeling stronger and more confident!
                        </p>
                        <span class="text-white font-secondary font-bold">Michael Field</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="flex">
                    <div class="w-full">
                        <img src="{{ asset('images/testi-01.png') }}" class="w-full" alt="">
                    </div>
                    <div class="testi-content">
                        <ul class="stars justify-between max-w-[190px] mb-[10px] flex items-center">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <p class="para para-white mb-[10px]">
                            Overcame gym intimidation with strongX's friendly atmosphere. Personalized training plan helped me reach my fitness goals. Feeling stronger and more confident!
                        </p>
                        <span class="text-white font-secondary font-bold">Michael Field</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="flex">
                    <div class="w-full">
                        <img src="{{ asset('images/testi-01.png') }}" class="w-full" alt="">
                    </div>
                    <div class="testi-content">
                        <ul class="stars justify-between max-w-[190px] mb-[10px] flex items-center">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <p class="para para-white mb-[10px]">
                            Overcame gym intimidation with strongX's friendly atmosphere. Personalized training plan helped me reach my fitness goals. Feeling stronger and more confident!
                        </p>
                        <span class="text-white font-secondary font-bold">Michael Field</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-sec py-[100px]" style="background: url('/images/form-sec-bg.png') no-repeat top/cover;">
        <div class="container">
            <div class="bg-black py-[100px] px-[150px]">
                <div class="grid grid-cols-2 gap-[20px]">
                    <div class="max-w-[500px]">
                        <h3 class="sec-hd mb-[10px]">
                            free 7-day trial
                            signup
                        </h3>
                        <p class="para para-white max-w-[400px] mb-[40px]">
                            Sign up for free 7-day trial with us and
                            experience all of our services for free at
                            Fitnex.
                        </p>
                        <div class="border-b border-bottom"></div>
                    </div>
                    <div>
                        <form action="">
                            <div class="grid grid-cols-2 gap-[20px]">
                                <div class="field-wrap">
                                    <label class="label-field" for="">Name</label>
                                    <input class="input-field" type="text" placeholder="">
                                </div>
                                <div class="field-wrap">
                                    <label class="label-field" for="">Phone number</label>
                                    <input class="input-field" type="text" placeholder="">
                                </div>
                                <div class="field-wrap col-span-2">
                                    <label class="label-field" for="">Email</label>
                                    <input class="input-field" type="text" placeholder="">
                                </div>
                                <div class="field-wrap col-span-2">
                                    <label class="label-field" for="">Sevices</label>
                                    <select class="input-field select-field" name="" id="">
                                        <option value="">Select Services</option>
                                        <option value="">Select Services</option>
                                        <option value="">Select Services</option>
                                        <option value="">Select Services</option>
                                        <option value="">Select Services</option>
                                        <option value="">Select Services</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <button class="btn primary-btn submit-btn w-full">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-sec bg-black pt-[150px] pb-[30px]">
        <div class="container">
            <div class="grid grid-cols-5 pb-[50px]">
                <div class="mx-auto col-span-2">
                    <p class="para para-white">
                        Fitnex was born from a passion for fitness and the frustration of navigating a fragmented wellness industry. We’re building an inclusive ecosystem that connects clients with expert coaches, streamlining the journey to better health, performance, and confidence.
                    </p>
                </div>
                <div class="mx-auto">
                    <h4 class="text-white font-secondary font-bold text-[20px] mb-[20px]">Support</h4>
                    <ul class="footer-links">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Refund policy</a></li>
                    </ul>
                </div>
                <div class="mx-auto">
                    <h4 class="text-white font-secondary font-bold text-[20px] mb-[20px]">Contact</h4>
                    <ul class="footer-links">
                        <li><a href="#"><span class="pe-[10px] primary-theme"><i class="fa-solid fa-envelope"></i></span> youremailhere@gmail.com</a></li>
                        <li><a href="#"><span class="pe-[10px] primary-theme"><i class="fa-solid fa-location-dot"></i></span> 123 Main St, Anytown, USA</a></li>
                    </ul>
                </div>
                <div class="mx-auto">
                    <h4 class="text-white font-secondary font-bold text-[20px] mb-[20px]">Social media</h4>
                    <ul class="footer-links social-icons">
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="border-bottom mb-[30px]"></div>
            <p class="para para-white text-center font-secondary font-bold text-[20px]">
                © Copyright 2024. All rights Reserved
            </p>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</html>