<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>{{ env('USER_NAME') }}</h1>
        <p>{{ ucfirst(__('messages.im'))}} <span class="typed" data-typed-items="{{__('messages.descriptions')}}"></span></p>
        <div class="social-links">
            @include('partials.socialLinks')
        </div>
    </div>
</section><!-- End Hero -->
