<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}
?>

<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
       Property & Fixed Asset Department
      </h1>
      <h2 class="subtitle">
       Please enter the name of the Lessee below
      </h2>

    </div>
  </div>
</section>


<div class="container">
  
</fieldset>
<fieldset class = "box">
<div class = "buttons">
		
		<a class = "button is-success is-rounded "href ="landing.php">Submit</a>
		<a class = "button is-success is-rounded" href ="landing.php">Cancel</a>
		
</fieldset>
</div>



</body>
</html>