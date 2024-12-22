@extends('layouts.app')

@section('content')
    <section class="hero"
        style="background-image: url('https://source.unsplash.com/1600x900/?travel'); height: 100vh; background-size: cover; color: white; display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="hero-content">
            <h1>Discover Your Next Adventure</h1>
            <p>Find the best deals on flights, hotels, and car rentals.</p>
            <form class="search-form">
                <input type="text" class="form-control" placeholder="Where do you want to go?" required>
                <input type="date" class="form-control" required>
                <input type="number" class="form-control" placeholder="Number of travelers" required>
                <button type="submit" class="btn btn-primary">Start Your Adventure</button>
            </form>
        </div>
    </section>

    <section class="features py-5">
        <div class="container">
            <h2 class="text-center">Why Choose Us?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Easy Booking</h5>
                            <p class="card-text">Book your travel in just a few clicks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Best Prices</h5>
                            <p class="card-text">We offer the best prices in the market.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">24/7 Support</h5>
                            <p class="card-text">Our support team is here to help you anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
