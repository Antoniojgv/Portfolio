<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('messages.about') }}</h2>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <img src="assets/img/profile-img.jpg" class="d-block mx-auto img-fluid" style="max-height:400px;" alt="" />
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3>{{ __('messages.about_title') }}</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="fa-solid fa-chevron-right"></i> <strong>{{ __('messages.about_born') }}:</strong> <span>17 {{ __('messages.about_born_month') }} 1990</span></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <strong>{{ __('messages.about_phone') }}:</strong> <span>{{ env('USER_PHONE') }}</span></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <strong>{{ __('messages.about_email') }}:</strong> <span>{{ env('USER_EMAIL') }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="fa-solid fa-chevron-right"></i> <strong>{{ __('messages.about_age') }}:</strong> <span>{{ Carbon::parse("1990-12-17 01:00:00")->diff(Carbon::now())->y; }}</span></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <strong>{{ __('messages.about_city') }}:</strong> <span>{{ env('USER_DIRECTION') }}</span></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <strong>{{ __('messages.about_formation') }}:</strong> <span>DAM <small>({{ __('messages.about_formation_degree') }})</small></span></li>
                        </ul>
                    </div>
                </div>
                <p>{{ __('messages.about_description_1')}}</p>
                <p>{{ __('messages.about_description_2')}}</p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
