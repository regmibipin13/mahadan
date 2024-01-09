@extends('layouts.app')

@section('nav_section')
    <section id="hero-section-secondary">
        <div class="hero-layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hero-section-text">
                        <h1>
                            Our Donation Events
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
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
