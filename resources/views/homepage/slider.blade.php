<section id="hero" class="hero">
    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 style="color: #fff">{{ strtoupper(config('app.name')) }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        @if (count($data['homepage_picture_slider']) > 0)
            @foreach ($data['homepage_picture_slider'] as $key => $item)
                <div class="carousel-item {{ $key == 0  ? 'active' : ''}}" style="background-image: url({{ $item }})"></div>
            @endforeach
        @endif
    </div>
</section>
