<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
img {
  width: 100%;  
  object-fit: cover;
}

  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }

  html {
    box-sizing: border-box;
  }

  *, *:before, *:after {
    box-sizing: inherit;
  }

  .column {
    float: left;
    width: 50%;
    margin-bottom: 16px;
    padding: 0 8px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }

  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }

  .container {
    padding: 0 16px;
  }

  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .title {
    color: grey;
  }

  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }

  .button:hover {
    background-color: #555;
  }

  @media screen and (max-width: 650px) {
    .column {
      width: 50%;
      display: block;
      float: none;
      margin-left: auto;
      margin-right: auto;
    }
  }
</style>

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
              <a class="nav-link" href="category_page.php">Tournament</a><!--link to category page-->
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about_us.php">About Us</a><!--link to about us page-->
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

<body>

<div id="myCarousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" style="background-image:url(chess_white); ;" width="100%" height="20rem">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
        </svg>
        <div class="container">
          <div class="carousel-caption text-center">
            <h1>About Us</h1>
            <p class="opacity-75">At ChessRoyale, we are dedicated to fostering a community of chess enthusiasts who share a 
            common love for the game's timeless beauty and strategic brilliance. Whether you are a seasoned grandmaster 
            or a novice eager to learn, our event provides a platform for players of all levels to engage in thrilling matches, 
            exchange ideas, and celebrate the enduring legacy of chess.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>
  <h2 class="p-2" style="text-align: center">Our Team</h2>
</div>

<div class="container text-center">
  <div class="row align-items-start">
  <div class="col">
    <div class="card" style="width: 16rem; height: 30rem" >
      <img src="adlin2.jpg" alt="Jane" width="200" height="150" class="m-auto"> <!--format picture from width-->
      <div class="container">
        <h2>Muhd Adlin</h2>
        <p class="title">CEO & Founder</p>
        <p>Meet Adlin, the Visionary Mind Behind ChessRoyale.</p>
        <p>MdAdlin@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card" style="width: 16rem; height: 30rem">
      <img src="kumar2.jpg" alt="Mike" width="200" height="150" class="m-auto">
      <div class="container">
        <h2>Kumar</h2>
        <p class="title">Art Director</p>
        <p>Introducing Kumar, The Creative Genius Behind the Chess Aesthetic at ChessRoyale</p>
        <p>kumaraguru@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card" style="width: 16rem; height: 30rem">
      <img src="amir2.jpg" alt="John" width="200" height="150" class="m-auto">
      <div class="container">
        <h2>Amir Haiqal</h2>
        <p class="title">Designer</p>
        <p>Meet Amir, the Creative Force Redefining Chess Elegance at ChessRoyale.</p>
        <p>AmirZilla@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      
    </div>
    <div class="col">
    <div class="card" style="width: 16rem; height: 30rem">
      <img src="adeem2.jpg" alt="Lisa" width="200" height="150" class="m-auto">
      <div class="container">
        <h2>Kamal Adeem</h2>
        <p class="title">Marketing Manager</p>
        <p>Meet Adeem, the Strategic Architect Behind ChessRoyale's Brand Success.</p>
        <p>kamaladeem@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    <div class="col">
      
    </div>
  </div>
</div>

  


<script src="https://kit.fontawesome.com/966bde08cf.js" crossorigin="anonymous"></script>
</body>
</html>
