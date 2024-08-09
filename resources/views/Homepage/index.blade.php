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

        <section class="solutions-section pt-4">
            <div class="container">
                <div class="solutions">
                    <div class="row p-4">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="solutions-right">
                                <div class="years">
                                    <h1 class="solution-title">25</h1>
                                    <p class="solutions-sub">years of <br> appearance</p>
                                </div>
                                <div class="clients">
                                    <h1 class="solution-title">+50k</h1>
                                    <p class="solutions-sub">satisfied <br> Customer</p>
                                </div>
                            </div>
                            <div class="solutions-right-left">
                                <img src="../img/Female-Dentist-PNG-e1664112114442.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="solutions-left">
                                <h1 class="title">Dr. Giolo Evora</h1>
                                <p class="solutions-slogan">Combines cutting-edge diagnostic and therepuetic technology with his more than 25 years of extensive orthodontic experience, to provide superior treatment. </p>

                                <button class="btn btn-primary">Book Now</button>

                                <p class="solutions-desc">Our extensive experience, beautiful offices, and friendly, talented staff make us your premier  destination for orthodontic treatment in Makati City areas. Contact us today to get started with Dr. Giolo Evora, or book online. We look forward to seing you in our offices.</p>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </section>

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

                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/root-canal.png" alt="">
                                </div>

                                <h1 class="service-title">Root Canal</h1>
                                <p class="service-desc">A root canal is a quick, effective way to stop tooth pain and save your natural tooth. Our advanced, pain-free procedure gets you back to smiling in no time!</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/root-canal.png" alt="">
                                </div>

                                <h1 class="service-title">Root Canal</h1>
                                <p class="service-desc">A root canal is a quick, effective way to stop tooth pain and save your natural tooth. Our advanced, pain-free procedure gets you back to smiling in no time!</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/root-canal.png" alt="">
                                </div>

                                <h1 class="service-title">Root Canal</h1>
                                <p class="service-desc">A root canal is a quick, effective way to stop tooth pain and save your natural tooth. Our advanced, pain-free procedure gets you back to smiling in no time!</p>
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
