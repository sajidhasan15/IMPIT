<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IMPIT</title>
        <link rel="icon" type="image/x-icon" href="assets/logo_1.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/9a18e3a5ba.js"></script> --}}
        <!-- Google fonts-->


        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/base.css') }}" rel="stylesheet" />
        {{-- <link href="{{ asset('css/styleMain.css') }}" rel="stylesheet" /> --}}

        <style>
            .hover-zoom{
                transition: transform .2s;
            }
            .hover-zoom:hover {
                transform: scale(1.1);
            }
            .card{
                transition: 0.4s ease-out;
                border-radius: 8px;
                border: 2px solid rgba(0,0,0,0.1);
                /* box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15) ; */
            }

            .card:hover{
                /* transform: translateY(15px); */
                /* box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22); */
                /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
                /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
                box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
                cursor: pointer;
            }

            .card:hover:before{
                opacity: 1;
            }
            .containerGallery{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                margin: 40px 20px 0 20px;
                }

                .containerGallery .headingGallery{
                width: 50%;
                padding-bottom: 50px;
                }
                .containerGallery .headingGallery .display-4{
                font-size: 56px;
                font-weight: bolder;
                padding-bottom: 10px;
                /* border-bottom: 3px solid #222; */
                }

                .containerGallery .headingGallery .display-4 span{
                font-weight: 100;
                }
                .containerGallery .boxGallery{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                }

                .containerGallery .boxGallery .dreamGallery{
                display: flex;
                flex-direction: column;
                width: 32.5%;
                }

                .containerGallery .boxGallery .dreamGallery img{
                width: 100%;
                padding-bottom: 15px;
                border-radius: 5px;
                }

                .containerGallery .btnGallery{
                margin: 40px 0 70px 0;
                background: #222;
                padding: 15px 40px ;
                border-radius: 5px;
                }

                .containerGallery .btnGallery a{
                color: #fff;
                font-size: 1.2em;
                text-decoration: none;
                font-weight: bolder;
                letter-spacing: 3px;
                }

                @media only screen and (max-width: 769px){
                    .containerGallery .boxGallery{
                flex-direction: column;
                }

                .containerGallery .boxGallery .dreamGallery{
                width: 100%;
                }

                }

                @media only screen and (max-width: 643px){
                .containerGallery .headingGallery{
                width: 100%;
                }
                .containerGallery .headingGallery h3{
                font-size: 1em;

                }
                img{
                    max-width: 100%;
                }
                .gallery{
                    /* background-color: #EDCD1F; */
                    padding: 8% 0;
                }
                .gallery img{
                    /* background-color: #EDCD1F; */
                    padding: 3%;
                    width: 100%;
                    box-shadow: 0 0 3% rgba(0,0,0,0.3);
                    cursor: pointer;
                }
                #gallery-modal .modal-img{
                    width: 100%;
                }
            }
                .button-28 {
                appearance: none;
                background-color: transparent;
                border: 2px solid #1A1A1A;
                border-radius: 30px;
                box-sizing: border-box;
                color: #3B3B3B;
                cursor: pointer;
                display: inline-block;
                font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
                font-size: 16px;
                font-weight: 600;
                line-height: normal;
                margin: 0;
                min-height: 60px;
                min-width: 0;
                outline: none;
                padding: 16px 24px;
                text-align: center;
                text-decoration: none;
                transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                width: 40%;
                will-change: transform;
                }

                .button-28:disabled {
                pointer-events: none;
                }

                .button-28:hover {
                color: #fff;
                background-color: #1A1A1A;
                box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
                transform: translateY(-2px);
                }

                .button-28:active {
                box-shadow: none;
                transform: translateY(0);
                }
                /*--------------------------------------------------------------
              # Footer
              --------------------------------------------------------------*/
              #footer {
                font-size: 14px;
                background: #37517e;
              }

              #footer .footer-newsletter {
                padding: 50px 0;
                background: #f3f5fa;
                text-align: center;
                font-size: 15px;
                color: #444444;
              }

              #footer .footer-newsletter h4 {
                font-size: 24px;
                margin: 0 0 20px 0;
                padding: 0;
                line-height: 1;
                font-weight: 600;
                color: #37517e;
              }

              #footer .footer-newsletter form {
                margin-top: 30px;
                background: #fff;
                padding: 6px 10px;
                position: relative;
                border-radius: 50px;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
                text-align: left;
              }

              #footer .footer-newsletter form input[type=email] {
                border: 0;
                padding: 4px 8px;
                width: calc(100% - 100px);
              }

              #footer .footer-newsletter form input[type=submit] {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                border: 0;
                background: none;
                font-size: 16px;
                padding: 0 20px;
                background: #47b2e4;
                color: #fff;
                transition: 0.3s;
                border-radius: 50px;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
              }

              #footer .footer-newsletter form input[type=submit]:hover {
                background: #209dd8;
              }

              #footer .footer-top {
                padding: 60px 0 30px 0;
                background: #fff;
              }

              #footer .footer-top .footer-contact {
                margin-bottom: 30px;
              }

              #footer .footer-top .footer-contact h3 {
                font-size: 28px;
                margin: 0 0 10px 0;
                padding: 2px 0 2px 0;
                line-height: 1;
                text-transform: uppercase;
                font-weight: 600;
                color: #37517e;
              }

              #footer .footer-top .footer-contact p {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 0;
                font-family: "Jost", sans-serif;
                color: #5e5e5e;
              }

              #footer .footer-top h4 {
                font-size: 16px;
                font-weight: bold;
                color: #37517e;
                position: relative;
                padding-bottom: 12px;
              }

              #footer .footer-top .footer-links {
                margin-bottom: 30px;
              }

              #footer .footer-top .footer-links ul {
                list-style: none;
                padding: 0;
                margin: 0;
              }

              #footer .footer-top .footer-links ul i {
                padding-right: 2px;
                color: #47b2e4;
                font-size: 18px;
                line-height: 1;
              }

              #footer .footer-top .footer-links ul li {
                padding: 10px 0;
                display: flex;
                align-items: center;
              }

              #footer .footer-top .footer-links ul li:first-child {
                padding-top: 0;
              }

              #footer .footer-top .footer-links ul a {
                color: #777777;
                transition: 0.3s;
                display: inline-block;
                line-height: 1;
              }

              #footer .footer-top .footer-links ul a:hover {
                text-decoration: none;
                color: #47b2e4;
              }

              #footer .footer-top .social-links a {
                font-size: 18px;
                display: inline-block;
                background: #47b2e4;
                color: #fff;
                line-height: 1;
                padding: 8px 0;
                margin-right: 4px;
                border-radius: 50%;
                text-align: center;
                width: 36px;
                height: 36px;
                transition: 0.3s;
              }

              #footer .footer-top .social-links a:hover {
                background: #209dd8;
                color: #fff;
                text-decoration: none;
              }

              #footer .footer-bottom {
                padding-top: 30px;
                padding-bottom: 30px;
                color: #fff;
              }

              #footer .copyright {
                float: center;
              }

              #footer .credits {
                float: right;
                font-size: 13px;
              }

              #footer .credits a {
                transition: 0.3s;
              }

              @media (max-width: 768px) {
                #footer .footer-bottom {
                  padding-top: 20px;
                  padding-bottom: 20px;
                }

                #footer .copyright,
                #footer .credits {
                  text-align: center;
                  float: none;
                }

                #footer .credits {
                  padding-top: 4px;
                }
              }
              .go-top-btn {
                position: fixed;
                bottom: 35px;
                right: 35px;
                border-radius: 50%;
                cursor: pointer;
                height: 70px;
                width: 70px;
                background: #fff;
                border: 3px solid #333;
                display: none;
                justify-content: center;
                align-items: center;
                z-index: 9999;
                }

                .go-top-btn img {
                width: 50px;
                height: 50px;
                }
        </style>
    </head>
    <body id="page-top" style="background: #C8C8C8">
        <!-- Navigation-->
        {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">
                    <img src="https://static.wixstatic.com/media/a983bc_c9d2a261a7ba4174a898ee09b215ccbd~mv2.png/v1/crop/x_89,y_188,w_351,h_138/fill/w_252,h_99,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/LOGO_1-removebg-preview%20(2).png" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career">Career</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> --}}
        <!-- Masthead-->
        @include('layouts.header')
        
        {{-- <img src="assets/img/2.jpg" class="d-block w-100 h-100" alt="..."> --}}
        <img src="assets/img/IMPIT.jpg" class="w-100" alt="...">
        
        <button class="go-top-btn">
            <img src="assets/img/arrow-up.png" alt="arrow up">
        </button>
        <script>
            const goTopBtn = document.querySelector('.go-top-btn');

            window.addEventListener('scroll', checkHeight)

            function checkHeight(){
            if(window.scrollY > 200) {
                goTopBtn.style.display = "flex"
            } else {
                goTopBtn.style.display = "none"
            }
            }

            goTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            })
            })
        </script>
        <header class="masthead">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                {{-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> --}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    
                    </div>
                    {{-- <div class="carousel-item">
                    <img src="assets/img/1.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/3.jpg" class="d-block w-100 h-100" alt="...">
                    </div> --}}
                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> --}}
            </div>
            {{-- <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Grayscale</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div> --}}
        </header>
               {{-- Services --}}
        <section class="Service-section text-center" style="padding-top: 1%;padding-bottom: 5%; background: #C8C8C8; id="services">
            <div class="container px-4 px-lg-5">
                <div class="row  justify-content-center">
                    <div class="col-lg-8">

            <div class="containerGallery">
                <div class="headingGallery">
                    {{-- <h2 class="display-4 font-bold text-uppercase">Services</h2> --}}
                </div>
            </div>
            <style>
                            .members:hover{
                                transform: translateY(-10px);
                            }
                            
                        </style>
                        {{-- <h2 class="display-4 font-bold text-uppercase">Services</h2> --}}
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col service-business">
                                <div class="card h-100 px-3 members">
                                    <div class="pt-3">
                                        <i class="fa-solid fa-hurricane fa-3x" style="color: #EDCD1F; padding:12%;"></i>
                                    </div>
                                <i class="bi bi-briefcase"></i>
                                <div class="card-body">
                                    <h5 style="text-transform: uppercase; font-weight: 600;" class="card-title">Effective</h5>
                                    <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional content.
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="col service-accounting">
                                <div class="card h-100 px-3 members">
                                    <div class="pt-3">
                                        <i class="fa-solid fa-arrow-up-right-dots fa-3x" style="color: #EDCD1F; padding:12%;"></i>
                                    </div>
                                <div class="card-body">
                                    <h5 style="text-transform: uppercase; font-weight: 600;" class="card-title">Efficiency</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="col service-analysis">
                                <div class="card h-100 px-3 members">
                                    <div class="pt-3">
                                        <i class="fa-solid fa-atom fa-3x" style="color: #EDCD1F; padding:12%;"></i>
                                    </div>
                                <div class="card-body">
                                    <h5 style="text-transform: uppercase; font-weight: 600;" class="card-title">Dynamic</h5>
                                    <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional content.
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                {{-- <img class="img-fluid" src="assets/img/ipad.png" alt="..." /> --}}
            </div>
            @include('pages.notification')
        </section>
        <!-- About-->
        <section class="about section-padding" style=" background: #C8C8C8; padding-bottom: 3%;" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-img"><img alt="" class="img-fluid" src="assets/img/IMPIT.png"></div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                        <div class="about-text">
                            <h2 class="pt-2" style="color: #000" >We Provide the Best Quality<br>
                            Services Ever</h2>
                            <p style="color: #000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <a class="btn btn-warning" href="/about">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                            The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section> --}}
 
        	<!-- team starts -->
	<section class="team section-padding" style="padding-top: 3%; background: #000; padding-bottom: 3%;" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<div class="containerGallery" style="color: #fff;">
                            <div class="" >
                                <h2 class="display-4 font-bold text-uppercase">Our Team</h2>
                            </div>
                        </div>
                        {{-- <div class=""></div> --}}
						{{-- <p>Lorem ipsum dolor sit amet, consectetur<br>
						adipisicing elit. Non, quo.</p> --}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
                        <style>
                            .member:hover{
                                transform: translateY(-10px);
                            }
                            
                        </style>
					<div class="card member text-center">
						<div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
							<img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card member text-center">
						<div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
							<img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card member text-center">
						<div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
							<img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card member text-center">
						<div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
							<img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- team ends -->

            	<!-- gallery starts -->
	<section class="team section-padding" style="padding-top: 3%;" id="gallery">
		<div class="container">

            <div class="containerGallery">
                <div class="headingGallery">
                    <h2 class="display-4 font-bold" style="color: #000">Photo <span>Gallery</span></h2>
                </div>
                <header class="masthead">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/10-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/homeSlider/2-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/homeSlider/3-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>
                {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/1-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/2-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/3-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/3-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/4-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/5-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/6-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                    <img src="assets/img/homeSlider/7-min.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> --}}
       
                   {{-- @include('pages.slider')  --}}
         
                
                    {{-- <section class="gallery ">
                        <div class="container">
                            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/1.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/2.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/3.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/4.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/5.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/6.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/7.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/8.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/9.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/10.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/11.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="assets/img/galleryImg/12.jpg"  class="hover-zoom gallery-item img-fluid" alt="gallery">
                                </div>
                            </div>
                        </div>
                    </section> --}}

                    <!-- Modal -->
                    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="img/1.jpg" class="modal-img img-fluid" alt="modal img">
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="btnGallery">
                        <a href="/gallery">See More</a>
                    </div>
            </div>
		</div>
	</section><!-- gallery ends -->

                	<!-- Career starts -->
	<section class="team section-padding" style="padding-top: 3%; padding-bottom: 0;" id="career">
		<div class="container">

            <div class="containerGallery">
                <div class="headingGallery">
                    <h2 class="display-4 font-bold text-uppercase" style="color: #000">Career</h2>
                </div>
                <div class="container">
                    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                            <p class="text-center" style="color: #000" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi deleniti veniam exercitationem dolore quasi architecto voluptas sed, corporis praesentium quis mollitia excepturi voluptatibus illum molestias voluptatum autem laborum quo repellendus quisquam, consequatur culpa ut magni consectetur recusandae. Esse commodi sequi in quos distinctio similique vel error rem tempora asperiores, quasi debitis blanditiis nesciunt! Tenetur eligendi officia excepturi dicta dolore doloribus!</p>
                            <!-- HTML !-->
                            <button class="button-28" role="button">Join Now</button>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="assets/img/join.png" class="img-fluid" alt="Join Now">
                        </div>
                    </div>
                </div>
                <!-- HTML !-->
                
                {{-- <button class="button-two gradient">Hover</button> --}}

                    {{-- <div class="btnGallery">
                        <a href="#">See More</a>
                    </div> --}}
            </div>
		</div>
	</section><!-- career ends -->
{{-- 
                    <section class="gallery min-vh-100">
                    <div class="container">
                        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/1.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/2.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/3.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/4.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/5.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/6.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/7.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/8.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/9.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/10.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/11.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <img src="assets/img/galleryImg/12.jpg" class="gallery-item img-fluid" alt="gallery">
                            </div>
                        </div>
                    </div>
                </section> --}}

                <!-- Modal -->
                {{-- <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="img/1.jpg" class="modal-img img-fluid" alt="modal img">
                        </div>
                        </div>
                    </div>
                </div> --}}
        {{-- Team --}}
   
                {{-- <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="card text-center">
                                <div style="padding-top: 2%">
                                    <img src="assets/img/profileee .png" class="card-img-top" style="border-radius: 10%; width: 50%;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <div style="padding-top: 2%">
                                    <img src="assets/img/profileee .png" class="card-img-top" style="border-radius: 10%; width: 50%;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <div style="padding-top: 2%">
                                    <img src="assets/img/profileee .png" class="card-img-top" style="border-radius: 10%; width: 50%;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Projects-->
        {{-- <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Shoreline</h4>
                            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Signup-->
        {{-- <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Contact-->
        {{-- <section class="contact-section" style="background-color: #4C4C4C" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">hello@impitbd.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+880170000000</div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div> --}}
            {{-- </div>
        </section> --}}
        <!-- ======= Footer ======= -->
        {{-- <center>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://youtu.be/zYrKvaOwsEQ" allowfullscreen></iframe>
        </div>  
        </center> --}}
        <center style="padding: 3%">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/zYrKvaOwsEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </center>

        
        
        @include('layouts.footer')
        <!-- Footer-->
        {{-- <footer class="footer bg-black small text-center text-white-50"><div class="container px-2 px-lg-3">Copyright &copy; <script>document.write(new Date().getFullYear())</script> IMPIT | Powered by <a class="text-white" style="text-decoration: none;" href="https://cdmitsolutionltd.com/" target="_blank">CDM It Solution Ltd</a></div></footer> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/maingallery.js') }}"></script>

        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
