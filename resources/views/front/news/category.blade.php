@extends('layouts.upconstruction.master')

@section('css')
@endsection

@section('content')
<main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ url('upconstruction/assets/img/breadcrumbs-bg.jpg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>NEWS</h2>
        </div>
    </div>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 posts-list">
                @if ($total > 0)
                    @foreach ($data['homepage_lists_news_by_category_id']['items'] as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ $item['url_image'] }}" class="img-fluid" alt="">
                                <span class="post-date">{{ $item['date'] }}</span>
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">{{ ucwords($item['title']) }}</h3>
                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">{{ ucwords($item['category']) }}</span>
                                    </div>
                                </div>
                                {!! $item['information'] !!}
                                <hr>
                                <a href="{{ route('news.show', $item['id']) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            <br/>
            {!! $news->links() !!}
        </div>
    </section>
</main>
@endsection

@section('bottom')
@endsection

@section('script')
@endsection
