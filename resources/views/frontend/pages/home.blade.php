@extends('layouts.app')
@section('nav_section')
    <section id="hero-section-primary">
        <div class="hero-layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hero-section-text">
                        <h1>
                            Your Contribution <br>
                            Their Brighter Future
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolore obcaecati sint
                            alias
                            hic non aut maxime fuga eaque? Nam, unde incidunt! Error officia nam magni nulla magnam
                            repellat
                            dicta!
                        </p>
                        <div class="row py-3">
                            <div class="col-md-4 d-flex align-items-center justify-content-between m-auto">
                                <a class="primary-button primary-button-lg" href="">Join Us Now</a>
                                <a class="primary-button-outline primary-button-lg" href="">Learn More</a>
                            </div>
                        </div>

                        <div class="row py-5 mt-4 hero-footer">
                            <div class="col-md-4">
                                <div class="icon">
                                    <i class="fi fi-rr-calendar-day"></i>
                                </div>
                                <div class="text-box">
                                    120 + Events Completed
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon">
                                    <i class="fi fi-rr-hands-heart"></i>
                                </div>
                                <div class="text-box">
                                    1200 + Volunteers around in the world
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon">
                                    <i class="fi fi-rr-calendar-day"></i>
                                </div>
                                <div class="text-box">
                                    30 + Countries Included
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Mahadan</h1>
                </div>
                <div class="col-md-12">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere debitis error, assumenda recusandae
                        nihil iusto incidunt quaerat, rerum ratione aliquid pariatur qui. Voluptate modi quaerat quos soluta
                        ipsum rerum accusamus?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magnam
                        eum eos excepturi. Modi temporibus aliquid repellat, hic id amet in, repellendus possimus accusamus
                        deleniti velit, molestias praesentium veniam omnis.
                    </p>
                </div>
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/MG3jGHnBVQs?si=N1ayheHx-mHdTUYs" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="volunteers" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center py-3">
                    <h1>Our Volunters</h1>
                </div>
                <div class="col-md-4">
                    <div class="card volunter-card">
                        <img src="{{ asset('images/v1.avif.crdownload') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Saksham Tiwari</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card volunter-card">
                        <img src="{{ asset('images/v2.avif.crdownload') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Saksham Tiwari</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card volunter-card">
                        <img src="{{ asset('images/v3.avif.crdownload') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Saksham Tiwari</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-3">
                    <h1>Our Donation Causes and Events</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/cause1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Help Us to Find Food</h3>
                            <div class="money-raised my-2">
                                <span class="font-weight-1000"><strong> 2,02,020 Raised / 3,00,000</strong></span>
                            </div>
                            <p class="card-text">The passage is attributed to an
                                unknown typesetter in the century
                                who is thought</p>
                            <div class="d-grid">
                                <a href="{{ route('frontend.event', 'asd') }}" class="primary-button text-center">View
                                    More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/cause1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Help Us to Find Food</h3>
                            <div class="money-raised my-2">
                                <span class="font-weight-1000"><strong> 2,02,020 Raised / 3,00,000</strong></span>
                            </div>
                            <p class="card-text">The passage is attributed to an
                                unknown typesetter in the century
                                who is thought</p>
                            <div class="d-grid">
                                <a href="{{ route('frontend.event', 'asd') }}" class="primary-button text-center">View
                                    More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/cause1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Help Us to Find Food</h3>
                            <div class="money-raised my-2">
                                <span class="font-weight-1000"><strong> 2,02,020 Raised / 3,00,000</strong></span>
                            </div>
                            <p class="card-text">The passage is attributed to an
                                unknown typesetter in the century
                                who is thought</p>
                            <div class="d-grid">
                                <a href="{{ route('frontend.event', 'asd') }}" class="primary-button text-center">View
                                    More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/cause1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Help Us to Find Food</h3>
                            <div class="money-raised my-2">
                                <span class="font-weight-1000"><strong> 2,02,020 Raised / 3,00,000</strong></span>
                            </div>
                            <p class="card-text">The passage is attributed to an
                                unknown typesetter in the century
                                who is thought</p>
                            <div class="d-grid">
                                <a href="{{ route('frontend.event', 'asd') }}" class="primary-button text-center">View
                                    More</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
