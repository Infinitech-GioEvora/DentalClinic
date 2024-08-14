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
            <div class="contact_us_6">
                <div class="responsive-container-block container">
                  <form class="contact-form">
                    <div class="container-block form-wrapper" style="margin-right: 20px">
                      <div class="mob-text" style="text-align: center">
                        <p class="text-blk contactus-head">
                          Get in Touch
                        </p>
                        <p>
                            Reach Out and Connect with Us—We’re Always Just a Message or Call Away!
                        </p>
                      </div>
                      <div class="responsive-container-block" >
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="">
                          <p class="text-blk input-title">
                            Name
                          </p>
                          <input class="input" name="name" placeholder="Please enter first name...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="">
                          <p class="text-blk input-title">
                            Email
                          </p>
                          <input class="input" name="email" placeholder="Please enter email...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="">
                          <p class="text-blk input-title">
                            Phone Number
                          </p>
                          <input class="input" name="phone" placeholder="Please enter phone number...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="">
                          <p class="text-blk input-title">
                            Message
                          </p>
                          <textarea class="textinput"name="message" placeholder="Please enter your message..."></textarea>
                        </div>
                      </div>
                      <button class="submit" type="submit">
                        Submit
                      </button>
                    </div>
                  </form>
                  <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
                    <div class="map-part">
                      <p class="text-blk map-contactus-head" >
                        Reach us at
                      </p>
                      <div class="col-md-6 maps-block" style="margin-top: 20px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.686618330031!2d121.01093307590381!3d14.559904978070104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b830e5f29%3A0x89fe307dfecd3c0d!2sCampos%20Rueda%20Building!5e0!3m2!1sen!2sph!4v1721716690771!5m2!1sen!2sph" width="700" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      <div class="address" style="margin-top: 15px">
                        <i class="fa-solid fa-location-dot"></i>
                        unit 402, campos rueda building, 101 Urban Ave, Makati, 1206 Metro Manila
                    </div>
                    <div class="calls">
                        <i class="fa-solid fa-phone"></i>
                        63+ 992 4401 097
                    </div>
                      <div class="social-media-links mob" style="margin-top: 10px">
                        <ul class="social-icons">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <a href="https://www.facebook.com/profile.php?id=61562146592005" class="fa fa-facebook"></a>
                            <a href="mailto:infinitechcorp.ph@gmail.com" class="fa fa-envelope"></a>
                            <a href="tel:+639622530149" class="fa fa-telegram"></a>
                            <a href="tel:0270016157" class="fa fa-phone"></a>
                         </ul>
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
