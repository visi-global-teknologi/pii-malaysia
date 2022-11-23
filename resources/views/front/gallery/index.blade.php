@extends('layouts.upconstruction.master')

@section('css')
@endsection

@section('content')
<main id="main">
    @include('front.gallery.breadcrumb', $data)
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @if (count($data['list_gallery']) > 0)
                    @foreach ($data['list_gallery'] as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ $item['url_image'] }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4></h4>
                                    <p></p>
                                    <a href="{{ $item['url_image'] }}" title="" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
