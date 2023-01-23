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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
        <style>
            /* .item{
                transition: .5s ease-in-out;
            }
            .item:hover {
                filter: brightness(80%);
            } */
            /*--------------------------------------------------------------
            # Sections General
            --------------------------------------------------------------*/
            section {
            padding: 40px 0px 0px 0px;
            overflow: hidden;
            }

            .section-bg {
            background-color: #C8C8C8;
            }

            .section-title {
            text-align: center;
            padding-bottom: 30px;
            }

            .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            color: #37517e;
            }

            .section-title h2::before {
            content: "";
            position: absolute;
            display: block;
            width: 120px;
            height: 1px;
            background: #ddd;
            bottom: 1px;
            left: calc(50% - 60px);
            }

            .section-title h2::after {
            content: "";
            position: absolute;
            display: block;
            width: 40px;
            height: 3px;
            background: #47b2e4;
            bottom: 0;
            left: calc(50% - 20px);
            }

            .section-title p {
            margin-bottom: 0;
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
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
      <script>
        Fancybox.bind("#gallery a", {
          groupAll : true, // Group all items
          on : {
            ready : (fancybox) => {
              console.log(`fancybox #${fancybox.id} is ready!`);
            }
          }
        });
      </script>
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
            <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Career</h2>
              {{-- <form action="#" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="from-group">
                      <label for="name">Your Name:</label>
                      <input type="text" name="name" class="from-control" placeholder="Enter your Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="from-group">
                      <label for="email">Email Address:</label>
                      <input type="text" name="email" class="from-control" placeholder="Enter your Email">
                    </div>
                  </div>
                  <div class="from-group my-2">
                    <label for="message">Your Message</label>
                    <textarea name="message" id="" cols="30" rows="5" class="from-control" placeholder="Enter your message"></textarea>
                  </div>
                </div>
                <input type="submit" value="Send message" class="btn btn-primary">
              </form> --}}
        <style>
          input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }

        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }

        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        .container {
          border-radius: 5px;
          /* background-color: #f2f2f2; */
          /* padding: 20px; */
        }

        .col-15 {
          /* float: left; */
          width: 70%;
          margin-top: 6px;
        }

        .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }

        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        </style>
   
        <div class="container">
          {{-- <form action="dataInsert" method="POST" enctype="multipart/form-data"> --}}
          <form action="/career" method="POST">
            {{-- @csrf --}}
            <div class="row">
              <div class="col-25">
                <label for="Name">Enter Your Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="Name" name="name" placeholder="Your name">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="email">Enter Your Email</label>
              </div>
              <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Your email">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="message">Write Your Cover Letter</label>
              </div>
              <div class="col-75">
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
              </div>
            </div>
            {{-- <div class="row">
              <div class="col-25">
                <label for="message">Attach Your CV</label>
              </div>
              <div class="col-75">
                <input type="file" id="myfile" name="myfile">
              </div>
            </div> --}}
            <div class="row">
              <div class="col-15">
                <input type="submit" class="btn btn-primary">
              </div>
              
            </div>
          </form>
        </div>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
          </div>
    
        </section>
        <!-- End Portfolio Section -->

        {{-- </header> --}}
        <!-- Footer-->
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


