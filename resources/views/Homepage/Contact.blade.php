@extends('Layouts.Layout')

@section('title', 'Book Now - Dental Clinic')

@section('content')

    <main>
        <section class="hero">
            <div class="hero-image">
                <div class="hero-text">
                    <h1 class="header">Contacts</h1>
                    <p><a href="/">Home </a> / Contacts</p>
                </div>
            </div>
        </section>

        <section class="contacts-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1>Get in touch</h1>
                        <p>to request a qoute and ask questions, contact us direclty or fill out the form and we will get back to you promplty.</p>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="input" placeholder="Juan Dela Cruz">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="emeail" class="input" placeholder="juandelacruz@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" class="input" placeholder="(63+) 9924401097">
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="input" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit">
                            Submit
                            <div class="arrow-wrapper">
                                <div class="arrow"></div>
                            </div>
                        </button>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contact-right-upper">
                            <img src="../img/service-247-animate.svg" alt="">
                        </div>
                        <div class="contact-right-bottom">
                            <div class="address">
                                <i class="fa-solid fa-location-dot"></i>
                                unit 402, campos rueda building, 101 Urban Ave, Makati, 1206 Metro Manila
                            </div>
                            <div class="calls">
                                <i class="fa-solid fa-phone"></i>
                                63+ 992 4401 097
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>
        </section>





    </main>




@endsection

@section('scripts')
    @parent


@endsection
