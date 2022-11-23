<section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>E - MAGAZINE</h2>
        </div>
        <div class="row gy-4">
            @if (count($data['homepage_lists_emagazine_limit_six']) > 0)
                @foreach ($data['homepage_lists_emagazine_limit_six'] as $item)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url({{ $item['url_image_emagazine'] }});"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                <h4 class="card-title"><a target="_blank" href="{{ route('emagazines.show', $item['id']) }}">{{ ucwords($item['title']) }}</a></h4>
                                    <p>{{ ucwords(strip_tags($item['description'])) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
