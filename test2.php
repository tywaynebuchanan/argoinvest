<?php 

include('dbconn.php');
include ('header/header.php');

global $conn;
$filenumber = $_GET['id'];
echo $filenumber;


$sql = "SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'";
$sql = mysqli_query($conn,$sql);
	
			//if ($sql->num_rows > 0) {
				while ($row = mysqli_fetch_assoc($sql))
echo '
<fieldset class = "box">
<div class = "buttons">
	
	<a class = "button is-success"href ="landing.php">Renew Lease</a>
	<a class = "button is-success" href ="landing.php">Update Personal Information</a>
	<a class = "button is-danger"href ="landing.php">Close File</a>
</div>
<legend class="label has-text-justified">Personal Data</legend>

<div class="columns is-mobile is-multiline">
  <div class="column is-one-quarter small-padding"><label>FileNumber</label><input name="fname" class="input" readonly value ='.$row["FileNumber"].'></div>

  <div class="column is-one-third small-padding"><label>First Name</label><input name="lname" class="input" readonly value ='.$row["FirstName"].'></div>

  <div class="column is-one-third small-padding"><label>Last Name</label><input name="lname" class="input"readonly value ='.$row["LastName"].'></div>

<div class="column is-full"><label>Address</label><textarea class="textarea has-fixed-size"  readonly>'.$row["Street"].",".$row["City"].",".$row["Parish"].'</textarea></div>

  <div class="column is-one-quarter small-padding"><label>Office Phone Number</label><input name="email" type="email" readonly class="input" value ='.$row["OfficePhone"].'></div>

  <div class="column is-one-quartersmall-padding"><label>Home Phone Number</label><input name="address" class="input" readonly value ='.$row["HomePhone"].'></div>
  
  <div class="column is-one-quarter small-padding"><label>Cell Phone Number</label><input name="address" class="input" readonly value ='.$row["CellPhone"].'></div>

  <div class="column is-one-quarter small-padding"><label>Email Address</label><input name="address" class="input" readonly value ='.$row["Email"].'></div>
  </fieldset>

<fieldset class = "box">
<legend class="label has-text-justified">Tax Information</legend>
<div class="columns is-mobile is-multiline">
   <div class="column is-one-third small-padding"><label>Individual TRN</label><input name="address" class="input" readonly value ='.$row["TRN"].'></div>

  <div class="column is-one-third small-padding"><label>Company TRN(TCC)</label><input name="address" readonly class="input" value ='.$row["TCC"].'></div>
</fieldset>


<fieldset class = "box">
<legend class="label has-text-justified">Property Information</legend>
<div class="columns is-mobile is-multiline">
	
   <div class="column is-one-third small-padding"><label>Lease Start Date</label><input name="address" readonly class="input" value ='.$row["StartDate"].'></div>

  <div class="column is-one-third small-padding"><label>Lease End Date</label><input name="address" class="input" readonly value ='.$row["EndDate"].'></div>


   <div class="column is-one-third small-padding"><label>Property</label><input name="address" class="input" readonly value ='.$row["Property"].'></div>

  <div class="column is-one-third small-padding"><label>Second Property</label><input name="address" class="input" readonly value ='.$row["Property2"].'></div>

  <div class="column is-one-third small-padding"><label>Rate</label><input name="address" class="input" readonly value ='.$row["Rate"].'></div>

  <div class="column is-one-third small-padding"><label>Acreage</label><input name="address" class="input" readonly value ='.$row["Acreage"].'></div>

 </fieldset>
</div>';

//}



 ?>