<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
       // include ('functions/add_notes.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php"); 
}



 if(isset($_POST['submit']))
{

    $notesposted = $_POST['notes'];
    $date = $_POST['date'];
    $username = $_POST['username'];
    $filenumber = $_POST['filenumber'];
    // $insert_query = "INSERT INTO `tblNotes`(`Notes`,) VALUES ('$notesposted')";
    $insert_query = "INSERT INTO `tblNotes`( `Notes`, `DateCreated`, `username`, `FileNumber`) VALUES ('$notesposted','$date','$username','$filenumber')";
    $q = mysqli_query($conn,$insert_query);

    if (!$q) {
  die("Database insert failed: " . mysqli_error());
}else{
    echo "Success";
}
}



?>

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

<div>
<section>
<div>
<?php ProfileInfo()?>
</div>
<div>


<?php Prod_Update()?>




	
<div id="insertNotestbl">
	<form action ="functions/php_addnotes.php" method = "POST">
	<table class = "table is-fullwidth" id = "insertNotestbl">
		<th><a class = "button is-link is-rounded" id = "addNotesbtn" href="#">Add a Note</a></th>
		<th>Notes</th>
		<th>Date</th>
		<th>Username</th>
		<th>File</th>
		

		<tr>                              
		        <td><i class="far fa-sticky-note"></i></td>
		       <td><input class = "input" type="text" name = "notes"></td>
		       <td><input class = "input" type="text" name = "date"></td>
		       <td><input class = "input" type="text" name = "username"></td>
		       <td><input class = "input" type="text" name = "filenumber"></td>
		      
		        <td><input class="button is-warning is-rounded" type = "submit" value = "Submit"></td>
		    </tr>
	</table>
	</form>
</div>

<script>
	
	


</script>

</div>
</section>
</div>





