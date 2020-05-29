<?php
  // include ('functions/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Agro Invest</title>
  <!-- <meta http-equiv="refresh" content="120" > -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma-extensions@4.0.0/dist/css/bulma-extensions.min.css">
  <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
  <script src="js/script.js"></script>
  <script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.7/dist/js/bulma-extensions.min.js" integrity="sha256-q4zsxO0fpPm6VhtL/9QkCFE5ZkNa0yeUxhmt1VO1ev0=" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
</head>

<body class="has-background-grey-lighter main">

<nav class="navbar is-link">
<div class="container">  
   <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class = "navbar-item">
        Promoting and Facilitating Agri-Business Investments
    </div>
  </div>
  <div class="navbar-end">
      <div class="navbar-item">
            <span class="icon">
          <i class="fas fa-phone"></i>
        </span>
            <span>(876) 923-0086/(876) 764-8365</span>
        </div>

        <div class="navbar-item">
          <span class="icon">
          <i class="fab fa-instagram fa-lg"></i>
        </span>
        </div>

        <div class="navbar-item">
        <span class="icon">
          <i class="fab fa-facebook fa-lg"></i>
        </span>
        </div>

        <div class="navbar-item">
         <span class="icon">
          <i class="fab fa-twitter"></i>
        </span>
      </div>  
        </div>
      </div>
    </div>
</div>
</nav>

<nav class="navbar is-spaced" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
      <img src="img/logo.png" width="112" height="112">
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="home_page.php">
        <span class="icon has-text-link">
          <i class="fas fa-home"></i>
        </span>
        <span>Home</span>
      </a>
     <a class="navbar-item" href="pro_profile.php">
        <span class="icon has-text-link">
          <i class="fas fa-book"></i>
        </span>
        <span>Property Profile</span>
      </a>
       <a class="navbar-item" href="apply_form.php">
        <span class="icon has-text-link">
          <i class="fas fa-layer-group"></i>
        </span>
        <span>Add a Lease/Apply for Land</span>
      </a>
        </div>
      </div>
    </div>

    
    <div class="navbar-end">
    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          <span class="icon has-text-link">
          <i class="fas fa-user"></i>
        </span>
             <span><?php echo $login_session ?></span>
        </a>
        <div class="navbar-dropdown">
          <a class="navbar-item has-text-weight-medium">
            <span class="icon has-text-link">
          <i class="fas fa-user"></i>
          </span>
            <span><?php UserInfo();?></span>
          </a>
          <a class="navbar-item" href="user_profile.php">
            User Profile
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a href="functions/logout.php">
            <span class="icon">
          <i class="fas fa-external-link-square-alt"></i>
          </span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
    </div>
  </div>
          
        </div>
      </div>
    </div>
  </div>
</nav>
</body>