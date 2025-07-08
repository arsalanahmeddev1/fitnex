@extends('layouts.website.master')
@section('title', $page_title)
@section('content')

<section class="inner-banner listing-banner" style="background: url(' {{ asset('/assets/website/images/trainer-banner.webp') }}') no-repeat center/cover;">
    <div class="container">
        <h1 class="relative mx-auto text-[50px] text-white font-bold leading-[1.1] lg:max-w-[680px] xxl:max-w-[860px] k+pfr5Wx@I8MPO@UuY'2"
            data-aos="flip-right"
            data-aos-easing="linear"
            data-aos-duration="1500">
            Book Your Trainer Session at <span class="italic uppercase font-black"><span class="primary-theme">FIT</span>NEX</span>
        </h1>
    </div>
</section>
<section class="trainer-details-sec py-[50px] md:py-[100px] bg-black text-white">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-x-12 items-center">
            <div class="lg:col-span-2 trainer-image-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('/admin/assets/images/trainers/'.$trainer->image) }}" alt="{{ $trainer->name }}" class="rounded-lg trainer-details-img">
            </div>
            <div class="lg:col-span-3 trainer-info-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                <h2 class="text-4xl font-bold font-secondary">{{ $trainer->name }}</h2>
                <p class="text-xl text-[#0079D4] font-secondary mb-4">{{ $trainer->trainer_type }}</p>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <span class="ml-2 text-white">(4.0/5.0)</span>
                </div>
                <p class="para para-white mb-6">
                    {!! $trainer->description !!}
                </p>
                <h3 class="text-2xl font-bold font-secondary mb-3">Specialties</h3>
                <ul class="list-disc list-inside space-y-2 mb-6">
                    <li>Strength & Conditioning</li>
                    <li>Bodybuilding</li>
                    <li>Functional Training</li>
                    <li>Weight Loss</li>
                </ul>
                <div class="flex items-center justify-between">
                    <p class="text-3xl font-bold font-secondary"><span class="primary-theme">${{ $trainer->price }}</span> <span class="text-base font-normal">/ session</span></p>
                    <a href="#" class="btn primary-btn">Book a Session</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection