@extends('layouts.app')

@section('nav_section')
    <section id="hero-section-secondary">
        <div class="hero-layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hero-section-text">
                        <h1>
                            {{ $event->title }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="event" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-3">
                    <h1>{{ $event->title }}</h1>
                </div>
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/slider1.avif') }}" class="d-block w-100" alt="..."
                                    height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/slider2.avif') }}" class="d-block w-100"
                                    alt="..."height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/slider3.avif') }}" class="d-block w-100"
                                    alt="..."height="500">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-8">
                    <div class="amount mb-4">
                        <h2 class="text-primary">Amount Raised : <span class="text-success">Rs.
                                {{ $event->amount_raised }}</span> Out of
                            <span class="text-danger"> {{ $event->target_amount }}</span>
                        </h2>
                    </div>
                    <p>
                        {!! $event->description !!}
                    </p>

                    <h4>Total Donations: 104</h4>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Donation Box
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="donor_name">Donor Name</label>
                                    <input type="text" placeholder="Donor Name" class="form-control" name="donor_name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="amount">Amount (Rs.)</label>
                                    <input type="number" placeholder="Amount" class="form-control" name="amount"
                                        id="amount">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="payment_method">Payment Method</label>
                                    <select name="payment_method" id="payment_method" class="form-control">
                                        <option value="esewa">Esewa</option>
                                        <option value="khalti">Khalti</option>
                                    </select>
                                </div>

                                <div class="d-grid">
                                    <button class="primary-button">Pay Rs. 1000</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Comments and Reviews</h3>
                </div>
                <div class="col-md-12">
                    <x-comments :model="$event" />

                </div>
            </div>
        </div>
    </section>
@endsection
