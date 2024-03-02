<section id="top-section">
    @yield('nav_section')
    <section id="navbar" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7">
                            LOGO
                        </div>
                        <div class="col-md-5 navbar-lists d-flex align-items-center justify-content-between">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <a href="{{ route('frontend.about') }}">About</a>
                            <a href="{{ route('frontend.contact') }}">Contact</a>
                            <a href="{{ route('frontend.events') }}">Events</a>
                            <a href="{{ route('login') }}" class="primary-button">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>