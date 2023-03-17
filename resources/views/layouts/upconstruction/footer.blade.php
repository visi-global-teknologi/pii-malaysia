<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>{{ strtoupper(config('app.name')) }}</h3>
                        <p>{{ array_key_exists('contact_address', $data['homepage_lists_contact']) ? strip_tags($data['homepage_lists_contact']['contact_address']) : "" }}<br><br><strong>Phone:</strong> {{ array_key_exists('contact_phone_number', $data['homepage_lists_contact']) ? strip_tags($data['homepage_lists_contact']['contact_phone_number']) : "" }}<br> <strong>Email:</strong> {{ array_key_exists('contact_email', $data['homepage_lists_contact']) ? strip_tags($data['homepage_lists_contact']['contact_email']) : "" }}<br> </p>
                        <div class="social-links d-flex mt-3"> <a href="{{ array_key_exists('contact_twitter', $data['homepage_lists_contact']) ? $data['homepage_lists_contact']['contact_twitter'] : "" }} " class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a> <a href="{{ array_key_exists('contact_facebook', $data['homepage_lists_contact']) ? $data['homepage_lists_contact']['contact_facebook'] : "" }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a> <a href="{{ array_key_exists('contact_instagram', $data['homepage_lists_contact']) ? $data['homepage_lists_contact']['contact_instagram'] : "" }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a></div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright"> &copy; Copyright <strong><span>{{ ucwords(config('app.name')) }}</span></strong>. All Rights Reserved </div>
            <div class="credits">
            </div>
        </div>
    </div>
</footer> <!-- End Footer -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div> <!-- Vendor JS Files -->
