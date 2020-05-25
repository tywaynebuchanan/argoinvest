<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}
?>

<body class="has-background-grey-lighter">
</div>
<div class="container space">
<div class = "buttons is-small">
	
	
</div>
<?php ProfileInfo()?>
<?php Prod()?>
</div>
</body>
</html>