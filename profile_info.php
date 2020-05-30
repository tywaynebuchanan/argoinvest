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
<div class="container">
<div class = "buttons is-small">	
</div>

 <!-- Breadcrumb-->

<nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
  <div class="container space">
		  <ul>
		    <li>
		      <a href="home_page.php">
		        <span class="icon is-small">
		          <i class="fas fa-home" aria-hidden="true"></i>
		        </span>
		        <span>Close File</span>
		      </a>
		    </li>
		    <li class="is-active">
		      <a href="#">
		        <span class="icon is-small">
		          <i class="fas fa-file-alt" aria-hidden="true"></i>
		        </span>
		       Profile Information
		      </a>
		    </li>
		    <li class="is-active">
		      <a href="pro_profile.php">
		        <span class="icon is-small">
		          <i class="fas fa-file-alt" aria-hidden="true"></i>
		        </span>
		        <?php InfoBreadCrumb()?>
		      </a>
		    </li>
		  </ul>
	</div>
</nav>


<?php ProfileInfo()?>
</div>
<div>
<?php Production_Notices()?>	
</div>




</html>