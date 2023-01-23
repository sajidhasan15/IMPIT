<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IMPIT</title>
        <link rel="icon" type="image/x-icon" href="assets/logo_1.ico" />
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
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

            section {
            padding: 40px 0px 0px 0px;
            overflow: hidden;
            }
            .contact .info .email:hover i,
            .contact .info .address:hover i,
            .contact .info .phone:hover i {
              background: #47b2e4;
              color: #fff;
            }
            
          /*--------------------------------------------------------------
          # Contact
          --------------------------------------------------------------*/
          .contact .info {
            border-top: 3px solid #47b2e4;
            border-bottom: 3px solid #47b2e4;
            padding: 30px;
            background: #fff;
            width: 100%;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
          }

          .contact .info i {
            font-size: 20px;
            color: #47b2e4;
            float: left;
            width: 44px;
            height: 44px;
            background: #e7f5fb;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
          }

          .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #37517e;
          }

          .contact .info p {
            padding: 0 0 10px 60px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #6182ba;
          }

          .contact .info .email p {
            padding-top: 5px;
          }

          .contact .info .social-links {
            padding-left: 60px;
          }

          .contact .info .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #333;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            margin-right: 10px;
          }

          .contact .info .social-links a:hover {
            background: #47b2e4;
            color: #fff;
          }

          .contact .info .email:hover i,
          .contact .info .address:hover i,
          .contact .info .phone:hover i {
            background: #47b2e4;
            color: #fff;
          }

          .contact .php-email-form {
            width: 100%;
            border-top: 3px solid #47b2e4;
            border-bottom: 3px solid #47b2e4;
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
          }

          .contact .php-email-form .form-group {
            padding-bottom: 8px;
          }

          .contact .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
          }

          .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
          }

          .contact .php-email-form .error-message br+br {
            margin-top: 25px;
          }

          .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
          }

          .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
          }

          .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
          }

          .contact .php-email-form .form-group {
            margin-bottom: 20px;
          }

          .contact .php-email-form label {
            padding-bottom: 8px;
          }

          .contact .php-email-form input,
          .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            border-radius: 4px;
          }

          .contact .php-email-form input:focus,
          .contact .php-email-form textarea:focus {
            border-color: #47b2e4;
          }

          .contact .php-email-form input {
            height: 44px;
          }

          .contact .php-email-form textarea {
            padding: 10px 12px;
          }

          .contact .php-email-form button[type=submit] {
            background: #47b2e4;
            border: 0;
            padding: 12px 34px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
          }

          .contact .php-email-form button[type=submit]:hover {
            background: #209dd8;
          }

          @-webkit-keyframes animate-loading {
            0% {
              transform: rotate(0deg);
            }

            100% {
              transform: rotate(360deg);
            }
          }

          @keyframes animate-loading {
            0% {
              transform: rotate(0deg);
            }

            100% {
              transform: rotate(360deg);
            }
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
    <body id="page-top">
        <!-- Navigation-->
        {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">
                    <img src="https://static.wixstatic.com/media/a983bc_c9d2a261a7ba4174a898ee09b215ccbd~mv2.png/v1/crop/x_89,y_188,w_351,h_138/fill/w_252,h_99,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/LOGO_1-removebg-preview%20(2).png" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
        @include('layouts.header2')
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
            <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Contact</h2>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="fa-solid fa-location-dot fa-2x"></i>
                  <h4>Location:</h4>
                  <p>6th Floor, House-262/263, 1229 Road-1, Dhaka 1229</p>
                </div>

                <div class="email">
                  <i class="fa-regular fa-envelope fa-2x"></i>
                  <h4>Email:</h4>
                  <p>info@impitbd.com</p>
                </div>

                <div class="phone">
                  <i class="fa-solid fa-phone fa-2x"></i>
                  <h4>Call:</h4>
                  <p>+88017758888888</p>
                </div>
                  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1602659892983!2d90.42355441545283!3d23.812899392301773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7116152776d%3A0x1b55bc6966099b15!2sIMPIT%20LTD!5e0!3m2!1sen!2sbd!4v1671538223883!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

              </div>

              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->

        {{-- </header> --}}
        <!-- Footer-->
          <!-- ======= Footer ======= -->
        @include('layouts.footer')
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


