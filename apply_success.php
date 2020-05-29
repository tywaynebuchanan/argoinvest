<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('functions/insert_apply.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}

if(isset($_SESSION['login_user'])){
    if((time() - $_SESSION['last_time']) > 60)//time in seconds
    {
      header("location:logout.php");
    } 
}

?>

<meta http-equiv="refresh" content="5;landing.php"/>
 <!-- Breadcrumb-->


<div class="pageloader is-active is-link"><span class="title">
Thank you for applying! You will be redirected shortly</span></div>


<!-- <section class="hero is-medium is-link is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-centered">
        <i class="far fa-check-circle fa-10x"></i>
      </h1>
      <h2 class="subtitle has-text-centered">
       
      </h2>
<div class="has-text-centered">
	<a class="button is-large is-outlined is-light" href="landing.php">Home</a>
</div>
    </div>
  </div>
</section> -->

