<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('functions/insert_apply.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}

?>

<meta http-equiv="refresh" content="5;home_page.php"/>

<div class="pageloader is-active is-link"><span class="title">
Thank you for applying! You will be redirected shortly</span></div>
