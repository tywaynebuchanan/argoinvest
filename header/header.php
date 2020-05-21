<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Agro Invest</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma-extensions@4.0.0/dist/css/bulma-extensions.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.7/dist/js/bulma-extensions.min.js" integrity="sha256-q4zsxO0fpPm6VhtL/9QkCFE5ZkNa0yeUxhmt1VO1ev0=" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>




<body class="has-background-grey-lighter main">
<nav class="navbar" role="navigation" aria-label="main navigation">
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
      <a class="navbar-item" href="landing.php">
        Home
      </a>

      <a href="landing.php" class="navbar-item">
        View Leases
      </a>

      <a href="addlesse.php" class="navbar-item">
       Add a Lessee
      </a>

        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
         
          
        <div class="buttons">
          <a class="button is-success">
            User <?php echo $login_session ?>
          </a>
          <a class="button is-success" href="functions/logout.php">
            Log Out
          </a>

        </div>
      </div>
    </div>
  </div>
</nav>
</body>