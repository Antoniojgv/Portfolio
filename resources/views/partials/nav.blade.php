<!-- ======= Mobile nav toggle button ======= -->
<i class="fa-solid fa-bars mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="fa-solid fa-user"></i><span>{{ __('messages.about') }}</span></a></li>
            <li><a href="#skills" class="nav-link scrollto"><i class="fa-solid fa-code"></i><span>{{ __('messages.skills') }}</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="fa-solid fa-file"></i><span>{{ __('messages.resume') }}</span></a></li>
            <!--<li><a href="#portfolio" class="nav-link scrollto"><i class="fa-solid fa-list-check"></i><span>Portfolio</span></a></li>-->
            @isset($coindesk_data)
            <li><a href="#coindesk" class="nav-link scrollto"><i class="fa-brands fa-bitcoin"></i><span>Bitcoin API</span></a></li>
            @endisset
            <li><a href="#contact" class="nav-link scrollto"><i class="fa-solid fa-address-card"></i><span>{{ __('messages.contact') }}</span></a></li>
            @if( App::currentLocale() == 'es' )
            <li><a href="{{ route('changeLanguage') }}?language=en" class="nav-link scrollto"><i class="fa-solid fa-language"></i><span>Translate to English</span></a></li>
            @else
            <li><a href="{{ route('changeLanguage') }}?language=es" class="nav-link scrollto"><i class="fa-solid fa-language"></i><span>Traducir a Castellano</span></a></li>
            @endif
        </ul>
    </nav>

</header>
