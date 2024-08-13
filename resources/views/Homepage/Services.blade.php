@extends('Layouts.Layout')

@section('title', 'Book Now - Dental Clinic')

@section('content')

    <main>
        <section class="hero">
            <div class="hero-image">
                <div class="hero-text">
                    <h1 class="header">Services</h1>
                    <p><a href="/">Home </a> / Services</p>
                </div>
            </div>
        </section>

        <section class="service-section ">
            <div class="container">
                <div class="service-list">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/root-canal.png" alt="">
                                </div>

                                <h1 class="service-title">Root Canal</h1>
                                <p class="service-desc">A root canal is a quick, effective way to stop tooth pain and save
                                    your natural tooth. Our advanced, pain-free procedure gets you back to smiling in no
                                    time!</p>
                            
                            </div>


                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/medical.png" alt="">
                                </div>

                                <h1 class="service-title">Cosmetic Denstist</h1>
                                <p class="service-desc">Our cosmetic dental services offer personalized solutions for a
                                    brighter smile. With advanced techniques and a focus on comfort, we’ll help you achieve
                                    the radiant smile you’ve always wanted.</p>
                            
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/implant.png" alt="">
                                </div>

                                <h1 class="service-title">Dental Implants</h1>
                                <p class="service-desc">Our dental implants provide a durable and natural-looking solution
                                    to replace missing teeth. Enjoy a confident smile and improved function with our
                                    precise, comfortable implant procedures.</p>
                            
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/implant.png" alt="">
                                </div>

                                <h1 class="service-title">Dental Implants</h1>
                                <p class="service-desc">Our dental implants provide a durable and natural-looking solution
                                    to replace missing teeth. Enjoy a confident smile and improved function with our
                                    precise, comfortable implant procedures.</p>
                            
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/implant.png" alt="">
                                </div>

                                <h1 class="service-title">Dental Implants</h1>
                                <p class="service-desc">Our dental implants provide a durable and natural-looking solution
                                    to replace missing teeth. Enjoy a confident smile and improved function with our
                                    precise, comfortable implant procedures.</p>
                            
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-card">
                                <div class="service-img">
                                    <img src="../img/implant.png" alt="">
                                </div>

                                <h1 class="service-title">Dental Implants</h1>
                                <p class="service-desc">Our dental implants provide a durable and natural-looking solution
                                    to replace missing teeth. Enjoy a confident smile and improved function with our
                                    precise, comfortable implant procedures.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

    </main>
 
</main>


@endsection

@section('scripts')
    @parent


@endsection   