@extends('Layouts.Layout')

@section('title', 'Dental Clinic - Homepage')

@section('content')

    <main>
        <div class="hero-section">
            <div class="container">
                <div class="hero-div pt-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="right-content">
                                <h1 class="slogan">Trusted <br> <strong>Dental Clinic</strong></h1>
                                <p class="desc">a dental clinic is a specialized healthcare facility that focuses on
                                    diagnosing.</p>
                                <button class="btn btn-primary">Book Now</button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="left-content d-flex justify-content-center">
                                <img src="../logo/dental studio orthodontist logo (1).png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="service-section ">
            <div class="container">
                <div class="service-list">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h4 class="top-title">What we do?</h4>
                            <h1 class="section-title">
                                Quality dental care centered on comfort and patient care.
                            </h1>
                        </div>
                        <div class="col-12 col-md-6 text-end">
                            <button class="btn btn-primary">See more</button>
                        </div>
                    </div>


                    <div class="service-content pt-xl-5">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-6 px-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-md-6">
                                                <h1 class="service-title">Cosmetic Dentistry</h1>
                                                <p class="service-description">Transform your smile with personalized
                                                    cosmetic dentistry, offering tailored treatments that enhance both your
                                                    appearance and confidence, leaving you with a radiant, natural-looking
                                                    smile.</p>
                                                <button class="btn btn-primary">Read more</button>
                                            </div>
                                            <div class="col-md-6 text-center img-service">
                                                <img src="../img/different-types-of-dental-implants-1080x675.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-12 col-md-6 px-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-md-6">
                                                <h1 class="service-title">Root Canal Theraphy</h1>
                                                <p class="service-description">A precise, gentle treatment to save your
                                                    tooth from decay or damage, alleviate pain, and restore dental health.
                                                    Our approach ensures comfort and long-term functionality, helping you
                                                    maintain a healthy, natural smile.</p>
                                                <button class="btn btn-primary">Read more</button>
                                            </div>
                                            <div class="col-md-6 text-center img-service">
                                                <img src="../img/different-types-of-dental-implants-1080x675.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 px-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-md-6">
                                                <h1 class="service-title">Root Canal Theraphy</h1>
                                                <p class="service-description">A precise, gentle treatment to save your
                                                    tooth from decay or damage, alleviate pain, and restore dental health.
                                                    Our approach ensures comfort and long-term functionality, helping you
                                                    maintain a healthy, natural smile.</p>
                                                <button class="btn btn-primary">Read more</button>
                                            </div>
                                            <div class="col-md-6 text-center img-service">
                                                <img src="../img/different-types-of-dental-implants-1080x675.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>

@endsection

@section('scripts')

@endsection
