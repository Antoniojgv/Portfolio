
<section id="contact" class="contact">
    <div class="container px-4 px-lg-0" data-aos="fade-up">

        <div class="section-title">
            <h2 class="text-light">{{ __('messages.contact') }}</h2>
        </div>

        <div class="row mt-1">

            @if(session()->has('success'))
                <div class="alert alert-success text-center rounded">
                    {{session()->get('success')}}
                </div>
            @endif

            <div class="col-lg-4 d-flex flex-column">

                <div class="info">

                    <div class="address">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4 class="border-bottom">{{ __('messages.contact_location') }}:</h4>
                        <p>{{ env('USER_DIRECTION') }}</p>
                    </div>

                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <h4 class="border-bottom">{{ __('messages.contact_email') }}:</h4>
                        <p>{{ env('USER_EMAIL') }}</p>
                    </div>

                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <h4 class="border-bottom">{{ __('messages.contact_phone') }}:</h4>
                        <p>{{ env('USER_PHONE') }}</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="{{route('home')}}" method="post" role="form" class="">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.contact_your_name') }}" value="{{ old('name') }}" required />
                            {!! $errors->first('name', "<p class='alert-danger p-1 mt-1 text-center rounded'>:message</p>"); !!}
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('messages.contact_your_phone') }}" value="{{ old('phone') }}" />
                            {!! $errors->first('phone', "<p class='alert-danger p-1 mt-1 text-center rounded'>:message</p>"); !!}
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.contact_your_email') }}" value="{{ old('email') }}" required />
                            {!! $errors->first('email', "<p class='alert-danger p-1 mt-1 text-center rounded'>:message</p>"); !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" name="subject" id="subject" placeholder="{{ __('messages.contact_subject') }}" value="{{ old('subject') }}" required />
                        {!! $errors->first('subject', "<p class='alert-danger p-1 mt-1 text-center rounded'>:message</p>"); !!}
                    </div>
                    <div class="form-group">
                        <textarea class="form-control mb-3" name="message" rows="5" placeholder="{{ __('messages.contact_message') }}" required  >{{ old('message') }}</textarea>
                        {!! $errors->first('message', "<p class='alert-danger p-1 mt-1 text-center rounded'>:message</p>"); !!}
                    </div>
                    <div class="text-center php-email-form my-2"><button class="button btn" type="submit">{{ __('messages.contact_send') }}</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@if( $errors->any() )
<script>
    $(document).ready(function () {
        $('html,body').animate({ scrollTop: $("#contact").offset().top }, 'slow');
    });
</script>
@endif
