<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('messages.resume') }}</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                @isset($educations)
                    <h3 class="resume-title">{{ __('messages.resume_education') }}</h3>
                    @foreach ( $educations as $education)
                        <div class="resume-item">
                            <h4>{{ $education["name"] }}</h4>
                            <h5>{{ date('Y', strtotime($education["started"])) }} - {{ $education["ended"] ? date('Y', strtotime($education["ended"])) : __('messages.resume_present') }}</h5>
                            <p><em>{{ $education["place"] }}</em></p>
                            <p>{{ __('messages.' . $education["description"]) }}</p>
                        </div>
                    @endforeach

                @endisset
            </div>
            <div class="col-lg-6">
                @isset($jobs)
                    <h3 class="resume-title">{{ __('messages.resume_job') }}</h3>
                    @foreach ( $jobs as $job)
                        <div class="resume-item">
                            <h4>{{ $job["name"] }}</h4>
                            <h5>{{ date('Y', strtotime($job["started"])) }} - {{ $job["ended"] ? date('Y', strtotime($job["ended"])) : __('messages.resume_present') }}</h5>
                            <p><em>{{ $job["place"] }}</em></p>
                            <p>{{ __('messages.' . $job["description"]) }}</p>
                        </div>
                    @endforeach

                @endisset
            </div>
        </div>

    </div>
</section><!-- End Resume Section -->
