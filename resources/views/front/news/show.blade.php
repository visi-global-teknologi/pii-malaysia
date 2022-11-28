@extends('layouts.upconstruction.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('libs/sweetalert2/sweetalert2.min.css') }}">
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
                                <li><a href="{{ route('news.get.category', $data['news_detail']['news_category_id']) }}">{{ $data['news_detail']['news_category_name'] }}</a></li>
                            </ul>
                        </div>
                    </article>
                    <div class="comments">
                        <h4 class="comments-count">8 Comments</h4>
                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            {!! Form::open(['route' => ['api.news.comment.store'], 'method' => 'post', 'id' => 'form-comment']) !!}
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input required name="name" type="text" class="form-control" placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input required name="email" type="email" class="form-control" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="website" type="url" class="form-control" placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea required name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
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
    <script src="{{ URL::asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('app/js/store-comment.js') }}"></script>
@endsection
