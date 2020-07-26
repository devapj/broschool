@extends('welcome')

@section('content')
<div class="title-section dark-bg grey-bg">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-padding-y">
                <div class="title-section-text">
                    <h1>Contact Us</h1>
                </div>
            </div><!-- Top Columns /-->

        </div>
    </div><!-- Grid Container /-->
</div>
<!-- Title Section /-->

<div class="contact-page module">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12 col-padding-y">
                <div class="contact-map">
                  <iframe src="https://maps.google.com/maps?q=Brotherhood+Matriculation+School&t=&z=13&ie=UTF8&iwloc=&output=embed" height="270"></iframe>
                </div><!-- map ends here -->
            </div><!-- Columns /-->

            <div class="col-sm-12 col-lg-6 col-md-6 col-padding-y">
                <div class="comment-form">
                    <h2>Your Feedback</h2>
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <input type="text" class="form-control" placeholder="First name"  required="">
                              <div class="valid-tooltip">Accepted</div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <input type="text" class="form-control" placeholder="E-mail" required="">
                              <div class="valid-tooltip">Accepted</div>
                            </div>
                            <div class="col-md-12 Textarea-btn">
                              <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="5" placeholder="Your review..."></textarea>
                              <button class="btn btn-secondary btn-padding btn-dark-animated" href="" type="submit">Send Message</button>
                            </div>
                        </div><!-- Form Row /-->
                    </form>
                </div>
            </div><!-- Columns /-->

            <div class="col-sm-12 col-lg-3 col-md-4 offset-lg-2 offset-md-1 col-padding-y">
                <div class="contact-address">
                  <i class="fas fa-mobile-alt"></i>
                    <h6>Phone</h6>
                    <p> +91-044-2449 0133</p>
                </div>

                <div class="contact-address">
                  <i class="fas fa-map-marker-alt"></i>
                    <h6>address</h6>
                    <p>3/387,Kazura Garden 2nd Street, Neelankarai, 2nd St, Kazura Garden, Neelankarai, Tamil Nadu 600041</p>
                </div>
            </div><!-- Columns /-->
        </div>
    </div><!-- Grid Container /-->
</div>
<!-- Contact Page /-->
@endsection
