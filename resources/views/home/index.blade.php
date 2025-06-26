<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fitnex</title>

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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="header bg-black py-[10px]">
        <div class="container" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="topbar text-end mb-[5px]">
                <a href="#" class="text-white font-secondary "><span class="pe-[10px] text-[#0079D4]"><i class="fa-solid fa-envelope"></i></span>youremailhere@.com</a>
            </div>
            <div class="border-b border-bottom mb-[10px]"></div>
            <div class="grid grid-cols-4 lg:grid-cols-3 items-center justify-between">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <div class="">
                    <nav>
                        <ul class="flex  primary-navs font-secondary text-white justify-between">
                            <div class="close-icon">
                                <i class="fa-solid fa-xmark menu-toggle"></i>
                            </div>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li>
                                <select name="" id="">
                                    <option value="" selected>Services</option>
                                    <option value="">Services</option>
                                    <option value="">Services</option>
                                    <option value="">Services</option>
                                    <option value="">Services</option>
                                    <option value="">Services</option>
                                    <option value="">Services</option>
                                </select>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="text-end">
                    <a href="" class="btn primary-btn border border-transparent">Try for FREE</a>
                </div>
                <div class="menu-icon flex justify-end">
                    <i class="fa-solid fa-bars menu-toggle"></i>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-banner" style="background: url('/images/hero-banner.png') no-repeat top/cover;">
        <div class="container">
            <div class="flex justify-center items-center flex-col text-center">
                <div class="label-area c" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">Trusted by 100k+ clients</div>
                <div>
                    <h1 class="relative text-[50px] md:text-[70px] lg:text-[80px] xxl:text-[100px] text-white font-bold leading-[1.1] max-w-[650px] k+pfr5Wx@I8MPO@UuY'2"
                        data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        Find Your Perfect Fit with <div class="banner-logo  absolute right-[22px] bottom-[10px] sm:right-[110px] md:right-[-138px] lg:bottom-[20px] lg:right-[-70px]">
                            <img src="{{ asset('images/logo-lg.png') }}" class="max-w-[94px] sm:max-w-[120px] md:max-w-[150px] lg:max-w-[244px]" alt=""></div>
                    </h1>

                    <p class="text-white font-secondary text-[20px] mb-[20px] max-w-[600px]" data-aos="fade-right"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        Connect with top wellness professionals—from fitness trainers to nutritionists—all in one place.
                    </p>
                    <div class="flex justify-center" data-aos="fade-up"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <a href="" class="btn primary-btn border border-transparent">Join as a Coach <span class="ps-[10px]"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-slider bg-black pb-[150px] relative z-[1]">
        <ul class="slider-01 bg-white py-[30px]">
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
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
            <li class="">
                <span class="text-black">Personal Training</span>
                <div class="md-circle bg-black"></div>
            </li>
        </ul>
        <ul class="slider-02 bg-primary-theme py-[30px] flex justify-between" dir="rtl">
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
            <li class="">
                <span class="text-white">Nutrition Coaching</span>
                <div class="md-circle bg-white"></div>
            </li>
        </ul>
    </section>
    <section class="our-services bg-black">
        <div class="container">
            <h2 class="sec-hd text-center mb-[10px]"
                data-aos="flip-right"
                data-aos-easing="linear"
                data-aos-duration="1500">our services</h2>
            <p class="para text-center max-w-[490px] mx-auto para-white mb-[30px]"
                data-aos="fade-right"
                data-aos-easing="linear"
                data-aos-duration="1500">
                Strong offers 5 popular services to help you make
                comfortable choices that suit your needs.
            </p>
        </div>
        <div class="grid grid-cols-1 justify-items-center md:grid-cols-3 lg:grid-cols-5 gap-y-[20px]">
            <div>
                <div class="our-services-item relative"
                    data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="400"
                    >
                    <img src="{{ asset('images/services-01.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="">
                            Personal Training
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative"
                    data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="500">
                    <img src="{{ asset('images/services-02.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="">
                            Nutrition Coaching
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative"
                    data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="600">
                    <img src="{{ asset('images/services-03.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="">
                            Sports Performance
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative"
                    data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="700">
                    <img src="{{ asset('images/services-04.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="">
                            Mental Wellness
                        </h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-services-item relative" data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="800">
                    <img src="{{ asset('images/services-05.png') }}" class="relative z-[1]" alt="">
                    <div class="our-services-content">
                        <h4 class="">
                            Custom Goal-Based Plans
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fitness-journey bg-black py-[50px] md:py-[100px]">
        <div class="container">
            <h2 class="sec-hd text-center mb-[10px] max-w-[670px] mx-auto"
                data-aos="flip-right"
                data-aos-easing="linear"
                data-aos-duration="1500">
                let's us Transform Your
                Fitness Journey
            </h2>
            <p class="para text-center max-w-[490px] mx-auto para-white mb-[80px]"
                data-aos="fade-right"
                data-aos-easing="linear"
                data-aos-duration="1500">
                10 years of experience in the fitness industry and trusted by over 100.000 customers.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 justify-between items-center max-w-[1000px] mx-auto mb-[40px]"
            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme count" data-number="100000">
                    +100k
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Clients
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme count" data-number="80">
                    80
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Expert Trainers
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme count" data-number="8">
                    8
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Branchs
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-[48px] font-bold primary-theme count" data-number="10">
                    10
                </h4>
                <p class="text-white font-secondary text-[20px]">
                    Year of experience
                </p>
            </div>
        </div>
        <div class="fitness-journey-slider">
            <div>
                <img src="{{ asset('images/journey-01.png') }}" class="w-full h-full object-cover" alt="">
            </div>
            <div>
                <img src="{{ asset('images/journey-02.png') }}" class="w-full h-full object-cover" alt="">
            </div>
            <div>
                <img src="{{ asset('images/journey-03.png') }}" class="w-full h-full object-cover" alt="">
            </div>
        </div>
    </section>
    <section class="about-sec bg-black pb-[50px] md:pb-[100px]">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-[30px]">
                <div class="text-center md:text-start" data-aos="fade-right"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h3 class="sec-hd mb-[20px]">About Fitnex</h3>
                    <p class="para para-white mb-[10px]">
                        Fitnex was born from a passion for fitness and the frustration of navigating a fragmented wellness industry. We're building an inclusive ecosystem that connects clients with expert coaches, streamlining the journey to better health, performance, and confidence.
                    </p>
                    <div class="flex justify-center md:justify-start">
                        <a href="" class="btn primary-btn">Leann More</a>
                    </div>
                </div>
                <div
                    data-aos="fade-left"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="{{ asset('images/about-sec-right.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>
    <div id="cursor-card" class="fixed top-0 left-0 w-64 bg-primary-theme text-white p-4 rounded-lg shadow-2xl pointer-events-none z-50 opacity-0 scale-0 transform-gpu" style="transform-origin: center center;">
        <!-- <img id="cursor-card-img" src="" alt="" class="w-full h-40 object-cover rounded-t-lg"> -->
        <div class="p-4">
            <h3 id="cursor-card-title" class="text-xl font-bold text-white mb-[10px]"></h3>
            <p id="cursor-card-description" class="text-sm text-white"></p>
            <span id="cursor-card-price" class="text-sm text-white font-bold"></span>
        </div>
    </div>
    <section class="expert-trainers-sec relative bg-black py-[50px] md:py-[100px]">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://framerusercontent.com/images/A1Yi2CbcmDfGLrAKZpFKVI8A4.jpg');"></div>
        <div class="absolute inset-0 bg-black opacity-70"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h3 class="sec-hd"
                    data-aos="flip-right"
                    data-aos-easing="linear"
                    data-aos-duration="1500">expert trainers</h3>
                <p class="para para-white max-w-[490px] mx-auto"
                    data-aos="fade-right"
                    data-aos-easing="linear"
                    data-aos-duration="1500">Achieve your fitness goals with our experienced
                    and passionate trainers at strong. </p>
            </div>

            <div class="">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-16 justify-items-center max-w-5xl mx-auto">
                    <!-- replace all twitter icons with fa-brands fa-x-twitter -->

                    <div class="trainer-card flex" data-title="Gym Trainer" data-description="Personalized workout plans and strength training sessions tailored to your fitness goals, whether you're a beginner or advanced." data-price="Price: $40"
                        data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <div class="relative overflow-hidden rounded-lg h-[450px] w-[300px] flex-shrink-0">
                            <img src="{{ asset('images/expert-trainers-01.png') }}" class="w-full h-full object-cover object-top" alt="Liam Daniel">
                            <div class="absolute top-5 left-5 flex flex-col space-y-2">
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-x-twitter"></i></a>
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-rotate">
                        <h4>Liam Daniel</h4>
                        <span>Gym Trainer</span>
                    </div>
                    <div class="trainer-card flex mt-[70px] mx-auto" data-title="Yoga Trainer" data-description="Guided yoga sessions focusing on flexibility, mindfulness, and relaxation for all skill levels, from beginners to experienced yogis." data-price="Price: $35"
                        data-aos="flip-left"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <div class="relative overflow-hidden rounded-lg h-[450px] w-[300px] flex-shrink-0">
                            <img src="{{ asset('images/expert-trainers-02.png') }}" class="w-full h-full object-cover object-top" alt="William Garcia">
                            <div class="absolute top-5 left-5 flex flex-col space-y-2">
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-x-twitter"></i></a>
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-rotate mt-[70px] mx-auto"
                        data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h4>Amelia Rose</h4>
                        <span>Yoga Trainer</span>
                    </div>

                    <div class="trainer-card flex" data-title="Kickfit Trainer" data-description="High-energy kickboxing fitness classes designed to boost your cardio, coordination, and strength while burning calories." data-price="Price: $45"
                        data-aos="flip-left"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <div class="relative overflow-hidden rounded-lg h-[450px] w-[300px] flex-shrink-0">
                            <img src="{{ asset('images/expert-trainers-03.png') }}" class="w-full h-full object-cover object-top" alt="Amelia Rose">
                            <div class="absolute top-5 left-5 flex flex-col space-y-2">
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-x-twitter"></i></a>
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-rotate"
                        data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h4>William Garcia</h4>
                        <span>Kickfit Trainer</span>
                    </div>

                    <div class="trainer-card flex items-center mt-[70px] mx-auto" data-title="Group-X Trainer" data-description="Motivating group exercise classes including aerobics, dance, and functional training to keep you energized and socially connected." data-price="Price: $30"
                        data-aos="flip-left"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <div class="relative overflow-hidden rounded-lg h-[450px] w-[300px] flex-shrink-0">
                            <img src="{{ asset('images/expert-trainers-04.png') }}" class="w-full h-full object-cover object-top" alt="Evelyn Clarke">
                            <div class="absolute top-5 left-5 flex flex-col space-y-2">
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-x-twitter"></i></a>
                                <a href="#" class="bg-white text-black w-8 h-8 rounded-md flex justify-center items-center no-underline transition-all duration-300 expoert-traning-card hover:text-white hover:scale-110"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-rotate mt-[70px] mx-auto">
                        <h4>Evelyn Clarke</h4>
                        <span>Group-X Trainer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-sec bg-black py-[50px] md:py-[100px]">
        <div class="container">
            <h2 class="sec-hd text-center mb-[40px] max-w-[670px] mx-auto"
                data-aos="flip-right"
                data-aos-easing="linear"
                data-aos-duration="1500">
                What people say
            </h2>
        </div>
        <div class="testimonials-slider">
            <div class="testimonial-item">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full">
                        <img src="{{ asset('images/testi-01.png') }}" class="w-full h-full object-cover" alt="">
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
                <div class="flex flex-col md:flex-row">
                    <div class="w-full">
                        <img src="{{ asset('images/testi-01.png') }}" class="w-full h-full object-cover" alt="">
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
                <div class="flex flex-col md:flex-row">
                    <div class="w-full">
                        <img src="{{ asset('images/testi-01.png') }}" class="w-full h-full object-cover" alt="">
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
    <section class="form-sec py-[50px] md:py-[100px]" style="background: url('/images/form-sec-bg.png') no-repeat top/cover;">
        <div class="container">
            <div class="bg-black py-[100px] px-[10px] lg:px-[150px]">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px]">
                    <div class="max-w-[500px]"
                        data-aos="fade-right"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h3 class="sec-hd text-center md:text-start mb-[10px]">
                            free 7-day trial
                            signup
                        </h3>
                        <p class="para para-white max-w-[400px] mb-[40px] text-center md:text-start">
                            Sign up for free 7-day trial with us and
                            experience all of our services for free at
                            Fitnex.
                        </p>
                        <div class="border-b border-bottom"></div>
                    </div>
                    <div data-aos="fade-left"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
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
                                    <div class="custom-select-wrapper relative">
                                        <select class="input-field select-field" name="" id="">
                                            <option value="">Select Services</option>
                                            <option value="">Select Services</option>
                                            <option value="">Select Services</option>
                                            <option value="">Select Services</option>
                                            <option value="">Select Services</option>
                                            <option value="">Select Services</option>
                                        </select>
                                        <span class="custom-arrow"><i class="fas fa-chevron-down"></i></span>
                                    </div>
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
    <footer class="footer-sec bg-black pt-[50px] md:pt-[150px] pb-[30px]">
        <div class="container">
            <div class="md:grid flex gap-y-[20px] justify-start flex-col md:grid-cols-5 pb-[50px]" 
            data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500"
            >
                <div class="mx-auto col-span-2">
                    <div class="footer-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <p class="para para-white">
                        Fitnex was born from a passion for fitness and the frustration of navigating a fragmented wellness industry. We're building an inclusive ecosystem that connects clients with expert coaches, streamlining the journey to better health, performance, and confidence.
                    </p>
                </div>
                <div class="md:mx-auto">
                    <h4 class="text-white font-secondary font-bold text-[20px] mb-[20px]">Support</h4>
                    <ul class="footer-links">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Refund policy</a></li>
                    </ul>
                </div>
                <div class="md:mx-auto">
                    <h4 class="text-white font-secondary font-bold text-[20px] mb-[20px]">Contact</h4>
                    <ul class="footer-links">
                        <li><a href="mailto:youremailhere@gmail.com"><span class="pe-[10px] primary-theme"><i class="fa-solid fa-envelope"></i></span> youremailhere@gmail.com</a></li>
                        <li><a href="#"><span class="pe-[10px] primary-theme"><i class="fa-solid fa-location-dot"></i></span> 123 Main St, Anytown, USA</a></li>
                    </ul>
                </div>
                <div class="md:mx-auto">
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
                © Copyright 2025. All rights Reserved
            </p>
        </div>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</html>