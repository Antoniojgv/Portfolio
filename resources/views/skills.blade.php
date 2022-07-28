<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2 class="text-light">{{ __('messages.skills') }}</h2>
        <p class="text-light">{{ __('messages.skills_description') }}</p>
        </div>

        <div class="row skills-content">
        @isset($skills)
        @foreach ( $skills as $skill)
            <div class="col-lg-6">
                <div class="progress">
                <span class="skill">{{ $skill["name"] }} <i class="val">{{ $skill["percent"] }}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill["percent"] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>
        @endforeach
        @endisset
        </div>

    </div>
</section><!-- End Skills Section -->
