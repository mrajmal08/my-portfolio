<?php
$this->extend('layouts/app');
$this->section('content');
?>

<div class="preloader">
    <div class="preloader-bar">
        <div class="preloader-progress"></div>
    </div>

    <h1 class="title v-middle">
        <span class="percent ">0</span>
        <span class="text-strok">Ajmal</span>
        <span class="text-fill">Ajmal</span>
    </h1>
</div>

<div class="site-header">
    <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
        <div class="inner-header p-relative">
            <div class="main-logo">
                <a href="<?php base_url('/') ?>" data-dsn="parallax">
                    <img class="dark-logo" src="assets/img/logocode.png" alt="" />
                    <img class="light-logo" src="assets/img/logocode.png" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>

<main class="main-root">
    <div id="dsn-scrollbar">
        <!--==================== Header ====================-->
        <header data-dsn-header="parallax">
            <div class="header-master">
                <div class="p-absolute w-100 h-100 over-hidden before-z-index" data-overlay="5">
                    <img id="dsn-hero-parallax-img" class="cover-bg-img transform-3d header-scale-hero"
                         src="assets/img/agency-1.jpg" alt="">
                </div>
                <div class="container h-100">
                    <div class="row align-items-center justify-content-center h-100">
                        <div id="dsn-hero-parallax-title"
                             class="content p-relative text-center header-no-scale-hero">
                            <div class="metas meta-personal p-relative">
                                <h6 class="title"> Muhammad Ajmal </h6>
                            </div>
                            <span class="description"> I'm a Czech Republic based Php (Laravel, Codeigniter) Backend Web Developer focused on updated & user‑friendly experiences</span>
                        </div>
                    </div>
                </div>

                <div class="social-network-box text-center">
                    <div class="social-network">
                        <ul>
                            <li><a class="link-hover" href="#" data-hover-text="Github">Github</a></li>
                            <li><a class="link-hover" href="#" data-hover-text="Linked In">Linked In</a></li>
                            <li><a class="link-hover" href="#" data-hover-text="instagram">instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="scroll-d p-absolute animation-rotate">
                    <img src="assets/img/scroll_down.svg" alt="">
                </div>

            </div>
        </header>
        <!--==================== End Header ====================-->

        <div class="wrapper">

            <!--==================== About ====================-->
            <section class="about-me dsn-under-header p-relative mb-section">
                <div class="content p-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box">
                                    <h5 class="title-block">I am a fully passionate and need to make the world more
                                        diverse and more
                                        human.</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="box">
                                    <p>Passionate Website & Software developer who loves simplicity in things and crafts
                                        beautiful
                                        user-friendly sites with love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-bg p-absolute">
                    <div class="after-bg p-absolute w-100 h-100 cover-bg" data-image-src="assets/img/pattern.png">
                    </div>
                </div>
            </section>
            <!--==================== End About ====================-->

            <!--==================== Service ====================-->
            <section class="service section-margin">
                <div class="container section-title-2">
                    <h2>My Services</h2>
                    <p>WHAT I am Special At</p>
                </div>


                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 service-content dsn-up">
                            <div class="services-item d-flex p-relative background-section">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="assets/img/pattern.png"></div>
                                <div class="icon">
                                    <img src="assets/img/services/graph.svg" alt="">
                                </div>

                                <div class="content">
                                    <span class="theme-color">01</span>
                                    <h4 class="title-block ">Website Development</h4>
                                    <p>Write modern, performant, maintainable code for a
                                        diverse array of client and internal projects.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 service-content dsn-up">
                            <div class="services-item d-flex p-relative background-section">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="assets/img/pattern.png"></div>
                                <div class="icon">
                                    <img src="assets/img/services/layout.svg" alt="">
                                </div>

                                <div class="content">
                                    <span class="theme-color">02</span>
                                    <h4 class="title-block">Mobile App Development</h4>
                                    <p>Modern Mobiles Dashboard with Rest Api to communicate with mobiles
                                        applications with clean code.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 service-content dsn-up">
                            <div class="services-item d-flex p-relative background-section">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="assets/img/pattern.png"></div>
                                <div class="icon">
                                    <img src="assets/img/services/idea.svg" alt="">
                                </div>

                                <div class="content">
                                    <span class="theme-color">03</span>
                                    <h4 class="title-block">Rest Apis Development</h4>
                                    <p>Innovative Rest Apis for any type of mobile applications
                                    and for other creative web applications.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 service-content dsn-up">
                            <div class="services-item d-flex p-relative background-section">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="assets/img/pattern.png"></div>
                                <div class="icon">
                                    <img src="assets/img/services/layout.svg" alt="">
                                </div>

                                <div class="content">
                                    <span class="theme-color">04</span>
                                    <h4 class="title-block">Database Design</h4>
                                    <p>Creative database design to implement and maintain
                                        the big enterprise data and CMS projects.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </section>
            <!--==================== End Service ====================-->

            <!--==================== Skill ====================-->
            <section class="skills-personal  background-section p-relative section-padding section-margin"
                     data-dsn-animate="sections">
                <div class="skills-inner container p-relative ">

                    <div class="container no-padding section-title-2">
                        <h2>My Skills</h2>
                        <p>I Am Best At</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-text">
                                <h3 class="title-h2 dsn-text">I provide smart and flexible Web services
                                </h3>

                                <div class="accordion">
                                    <div class="accordion__wrapper">

                                        <div class="accordion__item dsn-up">
                                            <div class="accordion__question p-relative">
                                                <h4 class="sm-title-block">Website & Software Developer</h4>
                                            </div>
                                            <div class="accordion__answer">
                                                <p>
                                                    New Innovation in website with creative database design to build
                                                    a lot of software , CMS, E-Commerce Stores and may more in PHP (Laravel, Codeignetir)
                                                    and VueJs
                                                </p>
                                            </div>
                                        </div>

                                        <div class="accordion__item dsn-up">
                                            <div class="accordion__question p-relative">
                                                <h4 class="sm-title-block ">Dashboard & Mobile App Apis</h4>
                                            </div>
                                            <div class="accordion__answer">
                                                <p>Creative mobile apps dashboard with productive Rest Apis to communicate with
                                                    mobile application in Php(laravel)</p>
                                            </div>
                                        </div>

                                        <div class="accordion__item dsn-up">
                                            <div class="accordion__question p-relative">
                                                <h4 class="sm-title-block ">Ecommerce Store in Wordpress</h4>
                                            </div>
                                            <div class="accordion__answer">
                                                <p>Fully responsive woocommerce online store with creative
                                                    designs and payment gateways using Updated themes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="skills-wapper">
                                <div class="skills-item">
                                    <h4 class="sm-title-block">PHP (Laravel)</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="80%">
                                                    <span class="number">80%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>

                                <div class="skills-item">
                                    <h4 class="sm-title-block">PHP (Codegniter4)</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="60%">
                                                    <span class="number">60%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>

                                <div class="skills-item">
                                    <h4 class="sm-title-block">Vue Js</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="50%">
                                                    <span class="number">50%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>
                                <div class="skills-item">
                                    <h4 class="sm-title-block">Rest Apis</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="80%">
                                                    <span class="number">80%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--==================== End Skill ====================-->

            <!--==================== Our Work ====================-->
            <section class="work-inner work-masonry p-relative section-margin ">
                <div class="container section-title-2">
                    <h2>Awesome Portfolio</h2>
                    <p>Looking for quality features</p>
                </div>

                <div class="container">
                    <div class="filterings-t">
                        <div class="filtering-wrap">
                            <div class="filtering">
                                <button type="button" data-filter="*" class="active">
                                    All
                                </button>
                                <button type="button" data-filter=".fashion">Websites</button>
                                <button type="button" data-filter=".photography">Mobile Apps</button>
                            </div>
                        </div>
                    </div>

                    <div class="projects-list p-relative w-100 gallery-portfolio ">
<!--                        Websites-->
                        <div class="work-item-box p-relative brand  fashion">
                            <div class="work-item p-relative over-hidden">
                                <a href="assets/img/project/project1/1.jpg">
                                    <div class="img-next-box " data-overlay="2">
                                        <img class="cover-bg-img" src="assets/img/project/project1/1.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="https://lms.greconlive.com/" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">School Management System</h5>
                                        <h4>Grecon</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-item-box p-relative brand  fashion">
                            <div class="work-item p-relative over-hidden">
                                <a href="assets/img/project/project1/1.jpg">
                                    <div class="img-next-box " data-overlay="2">
                                        <img class="cover-bg-img" src="assets/img/project/project1/1.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="cannapylife.com" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">Seed Production Management System</h5>
                                        <h4>Seed Production</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-item-box p-relative brand  fashion">
                            <div class="work-item p-relative over-hidden">
                                <a href="assets/img/project/project1/1.jpg">
                                    <div class="img-next-box " data-overlay="2">
                                        <img class="cover-bg-img" src="assets/img/project/project1/1.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="Oneclod.com" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">E-Commerce Online Store</h5>
                                        <h4>Oneclod</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-item-box p-relative brand  fashion">
                            <div class="work-item p-relative over-hidden">
                                <a href="assets/img/project/project1/1.jpg">
                                    <div class="img-next-box " data-overlay="2">
                                        <img class="cover-bg-img" src="assets/img/project/project1/1.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="https://crosstex.com.pk/en" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">E-Commerce Online Store</h5>
                                        <h4>Crosstex</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>


<!--                        Mobile Apps-->
                        <div class="work-item-box p-relative photography  brand">
                            <div class="work-item p-relative over-hidden">
                                <a href="assets/img/project/project4/1.jpg">
                                    <div class="img-next-box" data-overlay="5">
                                        <img class="cover-bg-img" src="assets/img/project/project4/1.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="https://www.servo.com.ly/" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">Mobile App</h5>
                                        <h4>Servo</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-item-box p-relative photography  brand">
                            <div class="work-item p-relative over-hidden">
                                <a href="assets/img/project/project2/1.jpg">

                                    <div class="img-next-box " data-overlay="5">
                                        <img class="cover-bg-img" src="assets/img/project/project2/1.jpg" alt=""
                                             data-dsn-position="38%">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="https://axylgroup.com/" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">Mobile App</h5>
                                        <h4>Axyl</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-item-box p-relative photography  brand">
                            <div class="work-item  p-relative over-hidden">
                                <a href="assets/img/project/project6/1.jpg">
                                    <div class="img-next-box " data-overlay="5">
                                        <img class="cover-bg-img" src="assets/img/project/project6/1.jpg" alt=""
                                             data-dsn-position="57%">
                                    </div>
                                </a>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="https://obidoo.idcmarketing.net/en" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">
                                        <h5 class="cat">Mobile App</h5>
                                        <h4>Obidoo</h4>
                                        <span><span>View Project</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--==================== End Our Work ====================-->

            <!--==================== ImageWith Box Center ====================-->
            <div class="box-seat box-seat-center box-seat-qute section-margin" >
                <div class="container-fluid no-padding">
                    <div class="inner-img" data-dsn-grid="move-up" data-overlay="5">
                        <img class="has-bigger-scale" src="assets/img/personal.jpg" alt="">
                    </div>
                    <div class="pro-text text-center dsn-z-index-2" data-dsn-animate="section">
                        <h3 class="dsn-up">Help Hundreds To Bring <br> There Creative Projects To Life</h3>
                        <p class="dsn-up">
                            I am thoughtful about presenting these projects in a way where I could also tell the story of
                            the individual..
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters.
                        </p>
                    </div>
                </div>
            </div>
            <!--==================== End ImageWith Box Center ====================-->



            <section class="facts p-relative section-margin have-dsn-animate-number">
                <div class="bg-section p-absolute w-100 h-100 over-hidden">
                    <div class="h-100 before-z-index" data-dsn-grid="move-up" data-overlay="5">
                        <img class="cover-bg-img " src="assets/img/agency.jpg" alt="">
                    </div>
                </div>

                <div class="container h-100 align-items-center dsn-z-index-2 p-relative">
                    <div class="row align-items-center justify-content-center h-100">
                        <div class="col-lg-5">
                            <div class="section-title-2 no-bg">
                                <h2>I am proud of myself</h2>
                                <p>MY PEOJECTS</p>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="facts-inner d-flex">
                                <div class="fact-item p-relative">

                                    <div class="box-number p-relative">
                                        <span class="number odometer has-animate-number">18</span>
                                    </div>

                                    <div class="box-title p-relative">
                                        <h5>Finished projects</h5>
                                    </div>

                                </div>

                                <div class="fact-item p-relative">

                                    <div class="box-number p-relative">
                                        <span class="number has-animate-number">30</span>
                                    </div>

                                    <div class="box-title p-relative">
                                        <h5>Happy customers</h5>
                                    </div>

                                </div>

                                <div class="fact-item p-relative">

                                    <div class="box-number p-relative">
                                        <span class="number has-animate-number">0</span>
                                    </div>

                                    <div class="box-title p-relative">
                                        <h5>Awards won</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="root-contact">
                <div class="container section-margin">
                    <div class="section-title text-center">
                        <p>Currently I’m looking for new opportunities as Web Developer, my inbox is always open. Whether you have a question or just want to say hi, I’ll try my best to get back to you!
                        </p><br>
                        <h2>Lets Talk</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <form id="contact-form" class="form" method="post" action="contact.php"
                                      data-toggle="validator">
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Your name *</label>
                                                        <input id="form_name" type="text" name="name"
                                                               placeholder="Type your name" required="required"
                                                               data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Your E-Mail *</label>
                                                        <input id="form_email" type="email" name="email"
                                                               placeholder="Type your Email Address"
                                                               required="required"
                                                               data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>What's up?</label>
                                                        <textarea id="form_message" class="form-control"
                                                                  name="message"
                                                                  placeholder="Tell us about you and the world"
                                                                  required="required"
                                                                  data-error="Please,leave us a message."></textarea>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block"
                                                         data-dsn="parallax">
                                                        <button class="btn-form">
                                                            <span class="label">Send Message</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-1 p-relative background-section">
            <div class="container">
                <div class="footer-links p-relative">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-block-inner">
                            <div class="footer-block">
                                <div class="footer-logo">
                                    <a href="">
                                        <img src="assets/img/logocode.png" alt="" class="logo-dark">
                                        <img src="assets/img/logocode.png" alt="" class="logo-light">
                                    </a>
                                </div>

                                <div class="textwidget">
                                    <p>A Web Developer with an experience in developing web application using 
                                    Php(Laravel, Codeigniter4, Vue Js), certificaied gradute from University of Gujrat, Pakistan.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-block-inner">
                            <div class="footer-block col-menu">
                                <h4 class="footer-title">Check Profiles</h4>

                                <div class="footer-social p-relative">
                                    <ul>
                                        <li class="over-hidden">
                                            <a href="#" data-dsn="parallax" target="_blank"
                                               rel="nofollow">Github</a>
                                        </li>
                                        <li class="over-hidden">
                                            <a href="#" data-dsn="parallax" target="_blank"
                                               rel="nofollow">Linked In</a>
                                        </li>

                                        <li class="over-hidden">
                                            <a href="#" data-dsn="parallax" target="_blank"
                                               rel="nofollow">Twitter.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-block-inner">
                            <div class="footer-block col-contact">
                                <h4 class="footer-title">Contact</h4>
                                <p class="over-hidden" ><strong>T</strong> <span>:</span><a class="link-hover" data-hover-text="+92 304 4300620" href="#">+92 304 4300620</a></p>
                                <p class="over-hidden"><strong>E</strong> <span>:</span><a class="link-hover"
                                                                                           data-hover-text="ajmalg08@gmail.com" href="#">ajmalg08@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-block-inner">
                            <div class="col-address">
                                <h4 class="footer-title">Address</h4>

                                <p>Sialkot, 51310 <br>
                                    Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="text-center">
                    <div class="copright-text over-hidden">Designed by <a class="link-hover"
                                                                          data-hover-text="DSN Grid" href="https://www.linkedin.com/in/mrajmal" target="_blank">Mr. Ajmal</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</main>

<div class="scroll-to-top">
    <img src="assets/img/scroll_top.svg" alt="">
    <div class="box-numper">
        <span>10%</span>
    </div>
</div>

<div class="cursor">

    <div class="cursor-helper">
        <span class="cursor-drag">Drag</span>
        <span class="cursor-view">View</span>
        <span class="cursor-open"><i class="fas fa-plus"></i></span>
        <span class="cursor-close">Close</span>
        <span class="cursor-play">play</span>
        <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
        <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
    </div>

</div>

<div class="day-night">
    <div class="night active" data-dsn-theme="dark">
        <svg width="48" height="48" viewBox="0 0 48 48">
            <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
            <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"
                  height="2.6"></rect>
            <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
            <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"
                  height="1"></rect>
            <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
            <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"
                  height="2.6"></rect>
            <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
            <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"
                  height="1"></rect>
            <path
                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
            </path>
        </svg>
    </div>
    <div class="moon" data-dsn-theme="night">
        <svg width="48" height="48" viewBox="0 0 48 48">
            <path
                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
            </path>
        </svg>
    </div>
</div>

<?php $this->endSection('content'); ?>