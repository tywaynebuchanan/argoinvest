<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");}

?>


<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
       Property & Fixed Asset Department
      </h1>
      <h2 class="subtitle">
       Property Information
      </h2>
      </div>
  </section>

  <!-- Breadcrumb-->

<nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
  <div class="container space">
  <ul>
    <li>
      <a href="home_page.php">
        <span class="icon is-small">
          <i class="fas fa-home" aria-hidden="true"></i>
        </span>
        <span>Home</span>
      </a>
    </li>
    <li class="is-active">
      <a href="pro_profile.php">
        <span class="icon is-small">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
        <span>Property Profile</span>
      </a>
    </li>
  </ul>
</div>
</nav>

<div class="container space">

<?php
Property()
?>

</div>
<?php include 'footer/footer.php';?>