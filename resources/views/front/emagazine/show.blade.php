@extends('layouts.upconstruction.master')

@section('css')
@endsection

@section('content')
<main id="main">
    @include('front.emagazine.breadcrumb', $data)
    <section id="project-details" class="project-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="position-relative h-100">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ $data['emagazine_detail']['url_image'] }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>{{ $data['emagazine_detail']['title'] }}</h2>
                    <p>{!! $data['emagazine_detail']['description'] !!}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>{{ $data['emagazine_detail']['emagazine_category_name'] }}</span></li>
                        <li><a target="_blank" href="{{ $data['emagazine_detail']['url_file'] }}" class="btn-visit align-self-start">Visit File</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('bottom')
    @include('layouts.upconstruction.footer', $data)
@endsection

@section('script')
@endsection
