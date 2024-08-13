@extends('Layouts.Layout')

@section('title', 'Book Now - Dental Clinic')

@section('content')

    <main>
        <section class="hero">
            <div class="hero-image">
                <div class="hero-text">
                    <h1 class="header">About Us</h1>
                    <p><a href="/">Home </a> / About Us</p>
                </div>
            </div>
        </section>

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
                                <h1 class="title">Dental Clinic</h1>
                                <p class="solutions-slogan">Combines cutting-edge diagnostic and therepuetic technology with
                                    his more than 25 years of extensive orthodontic experience, to provide superior
                                    treatment. </p>

                                <button class="btn btn-primary">Book Now</button>

                                <p class="solutions-desc">Our extensive experience, beautiful offices, and friendly,
                                    talented staff make us your premier destination for orthodontic treatment in Makati City
                                    areas. Contact us today to get started with Dr. Giolo Evora, or book online. We look
                                    forward to seing you in our offices.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="choose-section mb-xl-5">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 chooseleft px-0">
                    <div class="chooseleft-content">
                        <h4 class="top-title">Book Now</h4>
                        <h1 class="section-title">
                            We’re welcoming new patients and can’t wait to meet you.
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi distinctio libero eos expedita
                            illum
                            delectus natus voluptates voluptatibus facilis? Sapiente adipisci exercitationem expedita. Vitae
                            officiis laudantium debitis voluptate excepturi sit?</p>
                        <button class="btn btn-secondary">Book Online</button>
                    </div>

                </div>

                <div class="col-12 col-md-6 px-0">
                    <div class="chooseright">
                        <img class="choose1" src="../img/Drupal-web_AS_188818511.jpg" alt="">
                    </div>

                </div>


            </div>

        </section>

        <section class="staff-section">
            <div class="container">
                <div class="sectionTitle text-center">
                    <h4 class="top-title">Our Staff</h4>
                    <h1 class="section-title">
                        Meet our specialists
                    </h1>
                </div>

                <div class="staff-content text-center">
                    <div class="row mb-xl-5">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="../img/istockphoto-1371009338-612x612.jpg" alt="Avatar" style="width:100%">
                                <div class="container text-center">
                                    <h2 class="staff-name">Giolo Evora</h2>
                                    <p>Dental Implant Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="../img/istockphoto-1371009338-612x612.jpg" alt="Avatar" style="width:100%">
                                <div class="container text-center">
                                    <h2 class="staff-name">Giolo Evora</h2>
                                    <p>Dental Implant Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="../img/istockphoto-1371009338-612x612.jpg" alt="Avatar" style="width:100%">
                                <div class="container text-center">
                                    <h2 class="staff-name">Giolo Evora</h2>
                                    <p>Dental Implant Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="../img/istockphoto-1371009338-612x612.jpg" alt="Avatar" style="width:100%">
                                <div class="container text-center">
                                    <h2 class="staff-name">Giolo Evora</h2>
                                    <p>Dental Implant Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary">More Staff</button>
                </div>

            </div>
        </section>
    </main>
 
</main>


@endsection

@section('scripts')
    @parent


@endsection   