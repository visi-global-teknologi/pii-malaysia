@extends('layouts.upconstruction.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('libs/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
<main id="main">
    @include('front.contact.breadcrumb', $data)
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p>{{ array_key_exists('contact_address', $data['homepage_lists_contact']) ? strip_tags($data['homepage_lists_contact']['contact_address']) : "" }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>{{ array_key_exists('contact_email', $data['homepage_lists_contact']) ? strip_tags($data['homepage_lists_contact']['contact_email']) : "" }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>{{ array_key_exists('contact_phone_number', $data['homepage_lists_contact']) ? strip_tags($data['homepage_lists_contact']['contact_phone_number']) : "" }}</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mt-1">
                <div class="col-lg-6 ">
                    @if (array_key_exists('contact_gmaps', $data['homepage_lists_contact']))
                        <iframe src="{{ $data['homepage_lists_contact']['contact_gmaps'] }}" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    @endif
                </div>
                <div class="col-lg-6">
                    {!! Form::open(['route' => ['api.message.store'], 'method' => 'post', 'class' => 'php-email-form', 'id' => 'form-message', 'role' => 'form']) !!}
                        <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Your Phone Number" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="subject" class="form-control" id="email" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button id="btnSubmit" type="submit">Send Message</button>
                        </div>
                    {!! Form::close() !!}
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
    <script src="{{ URL::asset('app/js/store-message.js') }}"></script>
@endsection
