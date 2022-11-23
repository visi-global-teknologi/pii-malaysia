@extends('layouts.upconstruction.master')

@section('css')
@endsection

@section('content')
<main id="main">
    @include('front.news.breadcrumb', $data)
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-5">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-img">
                            <img src="{{ $data['news_detail']['url_image'] }}" alt="" class="img-fluid">
                        </div>
                        <h2 class="title">{{ ucwords($data['news_detail']['title']) }}</h2>
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{ $data['news_detail']['date'] }}</time></li>
                            </ul>
                        </div>
                        <div class="content">
                            {!! $data['news_detail']['information'] !!}
                        </div>
                        <div class="meta-bottom">
                            <i class="bi bi-tags"></i>
                            <ul class="cats">
                                <li><a href="#">{{ $data['news_detail']['news_category_name'] }}</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            @if (count($data['news_category']) > 0)
                            <ul class="mt-3">
                                    @foreach ($data['news_category'] as $item)
                                        <li><a href="{{ route('news.get.category', $item['id']) }}">{{ ucwords($item['name']) }} <span>({{ $item['total'] }})</span></a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
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
