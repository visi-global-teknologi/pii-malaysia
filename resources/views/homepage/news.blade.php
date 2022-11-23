<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up"">
        <div class=" section-header">
            <h2>News</h2>
        </div>
        <div class="row gy-5">
            @if (count($data['homepage_lists_news_limit_six']) > 0)
                @foreach ($data['homepage_lists_news_limit_six'] as $item)
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">
                        <div style="height: 350px" class="post-img position-relative overflow-hidden">
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
                        <hr>
                        <a target="_blank" href="{{ route('news.show', $item['id']) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                 </div>
                </div>
                @endforeach
            @endif
       </div>
    </div>
 </section>
