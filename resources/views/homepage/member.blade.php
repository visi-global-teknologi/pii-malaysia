<section id="users" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>PII Perwakilan Luar Negeri Malaysia</h2>
        </div>
        <div class="slides-2 swiper">
            <div class="swiper-wrapper">
                @foreach ($data['homepage_lists_member'] as $item)
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item"> <img width="90" height="90" src="{{ $item['url_photo'] }}" class="testimonial-img" alt="">
                            <h3>{{ ucwords($item['name']) }}</h3>
                            <h4>{{ ucwords($item['job']) }}</h4>
                            <p> <i class="bi bi-quote quote-icon-left"></i> {{ ucwords(strip_tags($item['quote'])) }} <i class="bi bi-quote quote-icon-right"></i> </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach
            </div>
        </div>
    </div>
</section>
