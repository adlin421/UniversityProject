<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="feedback_photo.css">
  
  <title>ChessRoyale</title>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }


    .btnnav {
      border-radius: 50%;
      height: 4rem;
      width: 4rem;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #7777;
      color: black;
    }

    .btn-bd-primary {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #7777;
      color: black;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }

  </style>
</head>

<body>
<div class="bg-secondary-subtle">

  <!--Navigation Bar-->
  <header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="landing_page.php">
          <i class="fa-solid fa-chess"></i> CHESS ROYALE</a><!--link to homepage-->
        </button>
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="landing_page.php">Home</a> <!--link to homepage-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category_page.php">Tournament</a><!--link to category page-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a><!--link to about us page-->
            </li>
          </ul>
        </div>
        <button class="btn btn-warning rounded-4" type="submit" onclick="window.location.href='current_profile.php';">
        
        <?php
              session_start(); 

            
            if (isset($_COOKIE['username'])) {
                $current_username = $_COOKIE['username'];
                echo "Welcome, $current_username!";
            } else {
                
                echo "Welcome, Guest!";
            }
        ?>

        </button><!--link to edit profile-->
      </div>
      <a class="navbar-brand" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffae00;"></i></a><!--logout button link-->
    </nav>
  </header>

  <!--Carousel header-->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" style="background-image:url(chess_big.png);" width="100%" height="20rem"
          xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Chess Royale 2023!</h1>
            <p class="opacity-75">Come and join us!</p>
            <p><a class="btn btn-lg btn-primary" href="register_form.html">Sign up today</a></p><!--sign up link-->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" style="background-image:url(chess_hand.jpeg);" width="100%" height="20rem"
          xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>About Us</h1>
            <a class="btn btn-lg btn-primary" href="about_us.php">Learn more</a></p><!--link to about us page-->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <!--company moto-->
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">"Where Every Move Matters, Every Game Inspires. 
            Strategize Your Success with Us!"</h1>
        <p class="lead">"Welcome to CHESS ROYALE, where we believe that life, much like a game of chess, is a series of strategic
            moves that shape our destinies. At Checkmate, we are not just orchestrators of events; we are architects of 
            unforgettable experiences, weaving the threads of meticulous planning, seamless execution, 
            and a touch of strategic brilliance to create moments that resonate long after the last piece is placed on the board.</p>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="gold_chess.jpg" alt="" width="720">
      </div>
    </div>
  </div>

    <!--feedback photo-->
    <section>
        <div class="container">
            <div class="carousel">
                <input type="radio" name="slides" checked="checked" id="slide-1">
                <input type="radio" name="slides" id="slide-2">
                <input type="radio" name="slides" id="slide-3">
                <input type="radio" name="slides" id="slide-4">
                <input type="radio" name="slides" id="slide-5">
                <input type="radio" name="slides" id="slide-6">
                <ul class="carousel__slides">
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="feedback photos/malaysia_chess.jpg" alt="">
                            </div>
                            <figcaption>
                                Cambodian chess players hit new heights
                                as Malaysian takes top prize.
                            </figcaption>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="feedback photos/malaysia_chess(2).jpg" alt="">
                            </div>
                            <figcaption>
                                Talented chess players on Red Rock Hotel, for the 10th Penang
                                Heritage City International Chess Open.                           
                            </figcaption>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="feedback photos/malaysia_chess(3).jpg" alt="">
                            </div>
                            <figcaption>
                                13-year old MalaysianBeats 64-year old Slovakian Grandmaster at his very first 
                                Olympiad.                  
                            </figcaption>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="feedback photos/malaysia_chess(4).jpg" alt="">
                            </div>
                            <figcaption>
                                Three out of the five chess "Ok Chaktrong" players who will be representing Malaysia in this year’s 
                                SEA Games in Cambodia from Penang.                        
                            </figcaption>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="feedback photos/malaysia_chess(5).jpg" alt="">
                            </div>
                            <figcaption>
                                Novendra Priasmoro scored 7.5/9 to successfully retain his Dato Arthur Tan Malaysian 
                                Open Chess Championship 2022 in the 17th edition.                     
                            </figcaption>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="feedback photos/malaysia_chess(6).jpg" alt="">
                            </div>
                            <figcaption>
                                Kejohanan Catur Anak Malaysia at DPulze Centre                          
                            </figcaption>
                        </figure>
                    </li>
                </ul>    
                <ul class="carousel__thumbnails">
                    <li>
                        <label for="slide-1"><img src="feedback photos/malaysia_chess.jpg" alt="feedback_photo" style="height: 100pt;"></label>
                    </li>
                    <li>
                        <label for="slide-2"><img src="feedback photos/malaysia_chess(2).jpg" alt="feedback_photo" style="height: 100pt"></label>
                    </li>
                    <li>
                        <label for="slide-3"><img src="feedback photos/malaysia_chess(3).jpg" alt="feedback_photo" style="height: 100pt"></label>
                    </li>
                    <li>
                        <label for="slide-4"><img src="feedback photos/malaysia_chess(4).jpg" alt="feedback_photo" style="height: 100pt"></label>
                    </li>
                    <li>
                        <label for="slide-5"><img src="feedback photos/malaysia_chess(5).jpg" alt="feedback_photo" style="height: 100pt"></label>
                    </li>
                    <li>
                        <label for="slide-6"><img src="feedback photos/malaysia_chess(6).jpg" alt="feedback_photo" style="height: 100pt"></label>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--company advertisement-->
    <div style="background-color: white;">
        <marquee behavior="scroll" direction="left">
            <img src="company_logos/capermint.png" alt="capermint" style="height: 60pt; margin-right:40pt;">
            <img src="company_logos/comfygen.jpg" alt="comfygen" style="height: 60pt; margin-right:40pt;">
            <img src="company_logos/mtm_wood.jpg" alt="mtm_wood" style="height: 60pt; margin-right:40pt;">
            <img src="company_logos/artoon_solutions.jpg" alt="artoon_solutions" style="height: 60pt; margin-right:40pt;">
            <img src="company_logos/world_chess.png" alt="world_chess" style="height: 60pt; margin-right:40pt;">
            <img src="company_logos/epic_games.jpg" alt="epic_games " style="height: 60pt; margin-right:40pt;">
        </marquee>
    </div>
        

  <!--footer-->
  <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    <h5>CONTACT US: 01115171995<br/>
      EMAIL: adlinyuzaimi@gmail.com
    </h5>
  </div>

</div>
  <script src="https://kit.fontawesome.com/966bde08cf.js" crossorigin="anonymous"></script>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>