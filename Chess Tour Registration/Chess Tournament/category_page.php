<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>ChessRoyale</title>

  <style>
    .jumbo, td{
      border: 2px solid ; 
      border-color: white;
      background-color: grey;
      margin: 1px;
      border-style: outset;
    }

  

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

    button.funny-button{
      --bs-btn-bg : green;
      --bs-btn-hover-bg: green;
      
    }

    button.funnier-button{
      --bs-btn-bg:red;
      --bs-btn-hover-bg:red;
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
              <a class="nav-link" aria-current="page" href="landing_page.php">Home</a> <!--link to homepage-->
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="category_page.php">Tournament</a><!--link to category page-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a><!--link to about us page-->
            </li>
          </ul>
        </div>

        <button class="btn btn-warning rounded-4" type="submit" onclick="window.location.href='edit_profile.php';">
        
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
            <p><a class="btn btn-lg btn-primary" href="register_form.html">Sign up today</a></p>
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
            <h1>More Detail On Chess</h1>
            <a class="btn btn-lg btn-primary" href="https://www.chess.com/today">Learn more</a></p>
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

  <!--jumbo-->
  <div class="row align-items-md-stretch" style="margin-top: 5%;">
    <div class="col-md-6">
      <div class="h-100 margin-left ms-5 p-5 text-bg-dark rounded-3"
        style="background-image:url(chess_clock.jpg); background-size:100% ; opacity:1  ; background-repeat: no-repeat;">
        <div style="background-color: rgb(48, 45, 45); padding: 10pt;">
          <h2>Enter Rapid Tournament <i class="fa-regular fa-clock"></i></h2>
          <p>
            <table class="jumbo">
              <tr>
                <td width="200pt">Date:</td>
                <td>&nbsp 24/04/24</td>
              </tr>
              <tr>
                <td>Tournament Type:</td>
                <td>&nbsp Open</td>
              </tr>
              <tr>
                <td>Maximum participants: &nbsp</td>
                <td>&nbsp 20</td>
              </tr>
              <tr>
                <td>Venue:</td>
                <td>&nbsp Matrix International School, Seremban </td>
              </tr>
              <tr>
                <td>Difficulty:</td>
                <td>&nbsp
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i></td>
              </tr>
            </table>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <h2>What is Rapid?</h2>
      <p> 
      <b>Rapid chess is a balanced and dynamic variant of the classic game, offering players a bit more time for thoughtful moves.</b> <br>
        <b>1. Time Control: </b> <br>
        Each player has a total time limit for the entire game. Common time controls include 15 minutes with a 10-second increment per move.
        The clock starts counting down from the beginning of the game. <br>
        <b>2. Move Completion: </b> <br>
        Players must complete each move within their allocated time. Failure to do so results in time penalties.
        A move is considered complete when the player presses the clock after making the move.
      </p>
        <button onclick="registerRapid()" class="btn btn-success" type="button">Register Now</button>
        <button onclick="leaveRapid()" class="btn btn-danger" type="button">Cancel Register</button>
    </div>
  </div>



  <div class="row align-items-center justify-content-end p-5 mb-2 bg-warning text-emphasis-warning" style="margin-top: 5%;">
    <div class="col-md-5 rounded-3">
      <h2>What is Blitz?</h2>
        <p>
        <b>Blitz chess is a fast-paced and exciting variant of the classic game.</b><br/>
        <b>1. Time Control:</b> <br/>
        Each player has a total time limit for the entire game. Common time controls include 3 minutes with a 2-second increment per move.
        The clock starts counting down from the beginning of the game. <br/>
        <b>2. Move Completion:</b> <br/>
        Players must complete each move within their allocated time. Failure to do so results in time penalties.
        A move is considered complete when the player presses the clock after making the move. <br/>
        </p>
        <button onclick="registerBlitz()" class="btn btn-success" type="button">Register Now</button>
        <button onclick="leaveBlitz()" class="btn btn-danger" type="button">Cancel Register</button>
    </div>
    <div class="col-md-6">
      <div class="h-100 p-5 text-bg-dark rounded-3"
        style="background-image:url(blitz.jpeg); background-size:100% ; opacity: 1; background-repeat: no-repeat;">
        <div class="bg-dark" style="padding: 10pt;">
          <h2>Enter Blitz Tournament <i class="fa-sharp fa-solid fa-bolt-lightning" style="color: #eeff00;"></i></h2>
          <p>
            <table class="jumbo">
              <tr>
                <td>Date:</td>
                <td width="300pt">&nbsp 26/05/24</td>
              </tr>
              <tr>
                <td>Tournament Type:</td>
                <td>&nbsp Open</td>
              </tr>
              <tr>
                <td>Maximum participants: &nbsp</td>
                <td>&nbsp 20</td>
              </tr>
              <tr>
                <td>Venue:</td>
                <td>&nbsp University Tenaga Nasional, Putrajaya</td>
              </tr>
              <tr>
                <td>Difficulty:</td>
                <td>&nbsp
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i></td>
              </tr>
            </table>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row align-items-center bg-dark text-emphasis-warning" style="margin-top: 5%;">
    <div class="col-md-6" >
      <div class="h-100 margin-left ms-5 p-5 text-bg-dark rounded-3"
        style="background-image:url(unsplash_chess.jpg); background-size:100% ; opacity: 1; background-repeat: no-repeat;">
        <div style="background-color: rgb(48, 45, 45); padding: 10pt;">
          <h2>Enter Bullet Tournament <i class="fa-solid fa-fire" style="color: #ff8800;"></i></h2>
          <table class="jumbo">
              <tr>
                <td>Date:</td>
                <td  width="300">&nbsp 17/08/24</td>
              </tr>
              <tr>
                <td>Tournament Type: </td>
                <td>&nbsp Open</td>
              </tr>
              <tr>
                <td>Maximum participants: &nbsp</td>
                <td>&nbsp 20</td>
              </tr>
              <tr>
                <td>Venue:</td>
                <td>&nbsp Online, Chess.com </td>
              </tr>
              <tr>
                <td>Difficulty:</td>
                <td>&nbsp
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #fbff00;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i></td>
              </tr>

          </table>
        </div>
      </div>
    </div>
    <div class="col-md-5 p-5 text-white">
      <h2>What is Bullet?</h2>
      <p> <b>Bullet chess is an intense and rapid variant of the classic game, designed for quick and thrilling matches.</b> <br>
        <b>1. Time Control: </b> <br>
        Each player has an extremely limited time for the entire game. Common time controls include 1 minute per player with no increment.
        The clock starts counting down from the beginning of the game. <br>
        <b>2. Move Completion: </b> <br>
        Players must complete each move within their allocated time. Failure to do so results in time penalties.
        A move is considered complete when the player presses the clock after making the move.</p>
        <button onclick="registerBullet()" class="btn btn-success" type="button">Register Now</button>
        <button onclick="leaveBullet()" class="btn btn-danger" type="button">Cancel Register</button>
    </div>
  </div>

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
  <script>

  function registerRapid() {
    window.location.href = 'user_add_rapid.php'; 
  }

  function leaveRapid() {
    window.location.href = 'user_remove_rapid.php'; 
  }

  function registerBullet() {
    window.location.href = 'user_add_bullet.php'; 
  }

  function leaveBullet() {
    window.location.href = 'user_remove_bullet.php'; 
  }

  function registerBlitz() {
    window.location.href = 'user_add_blitz.php'; 
  }

  function leaveBlitz() {
    window.location.href = 'user_remove_blitz.php'; 
  }

  </script>
  <script src="https://kit.fontawesome.com/966bde08cf.js" crossorigin="anonymous"></script>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>