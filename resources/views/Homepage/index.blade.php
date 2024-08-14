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
                                <button class="btn btn-primary"><a href="dental/book-now">Book Now</a></button>
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
                                <p class="service-desc">A root canal is a quick, effective way to stop tooth pain and save
                                    your natural tooth. Our advanced, pain-free procedure gets you back to smiling in no
                                    time!</p>
                                <button class="service-explore">Explore</button>
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
                                <button class="service-explore">Explore</button>
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
                                <button class="service-explore">Explore</button>
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

        <section class="testemonials-section">
            <div class="container">
                <div class="testimony-content text-center pt-xl-5">
                    <h4 class="top-title">Testemonials</h4>
                    <h1 class="section-title">
                        Exceptionally high standards of dentistry
                    </h1>

                    <div class="row no-gutters pt-xl-5 mb-xl-5">
                        <div class="col-12 col-md-4 px-0">
                            <div class="card">
                                <img src="../img/user (1).png" alt="">
                                <div class="card-body">
                                    <h1 class="test-name">Giolo Evora</h1>
                                    <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium sint minima
                                        eaque veniam reprehenderit aliquam velit, sunt dolorum dicta nemo quaerat tempora
                                        aliquid neque, odio corrupti eveniet non, excepturi quo"
                                    </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 px-0">
                            <div class="card">
                                <img src="../img/user (1).png" alt="">
                                <div class="card-body">
                                    <h1 class="test-name">Giolo Evora</h1>
                                    <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium sint minima
                                        eaque veniam reprehenderit aliquam velit, sunt dolorum dicta nemo quaerat tempora
                                        aliquid neque, odio corrupti eveniet non, excepturi quo"
                                    </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 px-0">
                            <div class="card">
                                <img src="../img/user (1).png" alt="">
                                <div class="card-body">
                                    <h1 class="test-name">Giolo Evora</h1>
                                    <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium sint minima
                                        eaque veniam reprehenderit aliquam velit, sunt dolorum dicta nemo quaerat tempora
                                        aliquid neque, odio corrupti eveniet non, excepturi quo"
                                    </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary">
                        See More Testemonials
                    </button>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="row">
                <div class="col-12 col-md-6 about-left">
                    <div class="about-left-content">
                        <h4 class="top-title">Who we are?</h4>
                        <h1 class="section-title">
                            Why choose Smile clinic for all your dental treatments?
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptates velit mollitia, expedita
                            laborum magni laboriosam impedit tempora odio quod aliquid aliquam maiores nesciunt officiis
                            accusantium eos tenetur iusto voluptatibus!</p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> Top quality dental team</li>
                            <li><i class="fa-solid fa-check"></i> State of the art dental services</li>
                            <li><i class="fa-solid fa-check"></i> Discount on all dental treatment</li>
                            <li><i class="fa-solid fa-check"></i> Enrollment is quick and easy</li>
                        </ul>
                    </div>

                </div>
                <div class="col-12 col-md-6 about-right">
                    <img src="../img/AdobeStock_95303225__1639598171_94498.jpg" alt="">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa-solid fa-phone"></i>
                            <span><strong> Call Today </strong><br>1 800-123-4567</span>
                        </div>
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

        <section class="blogs-section">
            <div class="container">
                <div class="sectionTitle">
                    <h4 class="top-title">Blog</h4>
                    <h1 class="section-title ">
                       Get updated to <br> our latest news and updates
                    </h1>
                </div>

                <div class="row no-gutters d-flex justify-content-center pt-xl-5">
                    <div class="col-12 col-md-3 px-0 blog-card">
                        <div class="post">
                            <div class="header_post p-0">
                                <img src="https://images.pexels.com/photos/2529973/pexels-photo-2529973.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="">
                            </div>
                            <div class="body_post">
                                <div class="post_content">
    
                                    <h1>Lorem Ipsum</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi assumenda cumque
                                        deserunt
                                        dolorum ex exercitationem.</p>
    
                                    <div class="container_infos">
                                        <div class="postedBy">
                                            <span>author</span>
                                            John Doe
                                        </div>
    
                                        <div class="container_tags">
                                            <span>tags</span>
                                            <div class="tags">
                                                <ul>
                                                    <li>design</li>
                                                    <li>front end</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 px-0 blog-card">
                        <div class="post">
                            <div class="header_post p-0">
                                <img src="https://images.pexels.com/photos/2529973/pexels-photo-2529973.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="">
                            </div>
                            <div class="body_post">
                                <div class="post_content">
    
                                    <h1>Lorem Ipsum</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi assumenda cumque
                                        deserunt
                                        dolorum ex exercitationem.</p>
    
                                    <div class="container_infos">
                                        <div class="postedBy">
                                            <span>author</span>
                                            John Doe
                                        </div>
    
                                        <div class="container_tags">
                                            <span>tags</span>
                                            <div class="tags">
                                                <ul>
                                                    <li>design</li>
                                                    <li>front end</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 px-0 blog-card">
                        <div class="post">
                            <div class="header_post p-0">
                                <img src="https://images.pexels.com/photos/2529973/pexels-photo-2529973.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="">
                            </div>
                            <div class="body_post">
                                <div class="post_content">
    
                                    <h1>Lorem Ipsum</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi assumenda cumque
                                        deserunt
                                        dolorum ex exercitationem.</p>
    
                                    <div class="container_infos">
                                        <div class="postedBy">
                                            <span>author</span>
                                            John Doe
                                        </div>
    
                                        <div class="container_tags">
                                            <span>tags</span>
                                            <div class="tags">
                                                <ul>
                                                    <li>design</li>
                                                    <li>front end</li>
                                                </ul>
                                            </div>
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
