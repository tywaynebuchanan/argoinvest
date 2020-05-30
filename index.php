<?php ob_start();?>
<?php include ('functions/login.php');
if(isset($_SESSION['login_user'])){
  header("location:home_page.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
 <script src="js/script.js"></script>
</head>
<body>

<section class="hero has-background-grey-lighter is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <div class="box">
          <h3 class="title has-text-link">Property And Fixed <br> Asset Department</h3>
         
            <hr class="login-hr">
            <p class="subtitle has-text-black">Please login to proceed.</p>
            
            <form action="" enctype="multipart/form-data" method="POST">
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded" type="text"  id="username" name="username" placeholder="Username" onchange="UpdateUser()">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
              </p>
            </div>

              <div class="hide-content space" id="error1">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> You did not enter a username
              </div>
            </div>
  
            <div class="field">
              <p class="control has-icons-left">
                <input class="input is-rounded" type="password" id="password" name="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>

            <div class="hide-content space" id="error2">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> You did not enter a password
              </div>
            </div>

            <div class="hide-content space" id="error">
              <div class="notification is-danger">
                <button class="delete"></button>
                <strong>Opp!</strong> We can not proceed without a username and password
              </div>
            </div>
            <div class="field">
              <p class="control">
                <button class="button is-rounded is-block is-info is-fullwidth" name="submit" onclick="return showError()">
                  Login
                  <span>
                  <i class="fas fa-sign-in-alt"></i>
                </span>
                </button>
              </p>
            </form>
          </div>
          <!-- <div class="space has-text">
            <p class="has-text-light">
                        <a href="register.php">Sign Up</a> &nbsp;·&nbsp;
                        <a href="forgetpassword.php">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="#">Need Help?</a>
                    </p>
        </div> -->
        </div>
        </div> 
    </div>
  </section>
</div>
</body>
</html>

