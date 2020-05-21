<?php
include 'config/dbconn.php';

function ProfileInfo(){
global $conn;
$filenumber = $_GET['id'];
$sql = "SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'";

$sql = mysqli_query($conn,$sql);
	
			
				while ($row = mysqli_fetch_assoc($sql))
echo '
<fieldset class = "box">
<div class = "buttons is-small">
	
	<a class = "button is-success is-rounded "href ="landing.php">View Lease</a>
	<a class = "button is-success is-rounded" href ="landing.php">Renew Lease</a>
	<a class = "button is-success is-rounded " href ="landing.php">Update Personal Information</a>
	<a class = "button is-danger  is-rounded "href ="landing.php">Close File</a>
</div>
<legend class="label has-text-justified">Personal Data</legend>

<div class="columns is-mobile is-multiline">
  <div class="column is-one-quarter small-padding"><label class = "label">FileNumber</label><input name="fname" class="input" readonly value ='.$row["FileNumber"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">First Name</label><input name="lname" class="input" readonly value ='.$row["FirstName"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Last Name</label><input name="lname" class="input"readonly value ='.$row["LastName"].'></div>

<div class="column is-full"><label class = "label">Address</label><textarea class="textarea has-fixed-size"  readonly>'.$row["Street"].",".$row["City"].",".$row["Parish"].'</textarea></div>

  <div class="column is-one-quarter small-padding"><label class = "label">Office Phone Number</label><input name="email" type="email" readonly class="input" value ='.$row["OfficePhone"].'></div>

  <div class="column is-one-quartersmall-padding"><label class = "label">Home Phone Number</label><input name="address" class="input" readonly value ='.$row["HomePhone"].'></div>
  
  <div class="column is-one-quarter small-padding"><label class = "label">Cell Phone Number</label><input name="address" class="input" readonly value ='.$row["CellPhone"].'></div>

  <div class="column is-one-quarter small-padding"><label class = "label">Email Address</label><input name="address" class="input" readonly value ='.$row["Email"].'></div>
  </fieldset>

<fieldset class = "box">
<legend class="label has-text-justified">Tax Information</legend>
<div class="columns is-mobile is-multiline">
   <div class="column is-one-third small-padding"><label class ="label">Individual TRN</label><input name="address" class="input" readonly value ='.$row["TRN"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Company TRN(TCC)</label><input name="address" readonly class="input" value ='.$row["TCC"].'></div>
</fieldset>


<fieldset class = "box">
<legend class="label has-text-justified">Property Information</legend>
<div class="columns is-mobile is-multiline">
	
   <div class="column is-one-third small-padding"><label class = "label">Lease Start Date</label><input name="address" readonly class="input" value ='.$row["StartDate"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Lease End Date</label><input name="address" class="input" readonly value ='.$row["EndDate"].'></div>


   <div class="column is-one-third small-padding"><label class = "label">Property</label><input name="address" class="input" readonly value ='.$row["Property"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Second Property</label><input name="address" class="input" readonly value ='.$row["Property2"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Rate</label><input name="address" class="input" readonly value ='.$row["Rate"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Acreage</label><input name="address" class="input" readonly value ='.$row["Acreage"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Property ID</label><input name="address" class="input" readonly value ='.$row["PropertyID"].'></div>


  

  
</fieldset>

<div class = "container">
<fieldset class = "box">
<legend class="label has-text-justified">Production Notices</legend>
<div class="table-container is-fullwidth ">
  <table class="table is-bordered space">
      <th>Notes</th>
      <th>DateCreated</th>
      <th>User</th>
      <th>Last Update</th>
     <tbody class="has-text-centered">
 </fieldset>
</div>';}

function Prod(){
global $conn;
$filenumber = $_GET['id'];
$sql1 = "SELECT * FROM tblProductionNotice WHERE FileNumber = '$filenumber'";
$sql1 = mysqli_query($conn,$sql1);
	
			
while ($row1 = mysqli_fetch_assoc($sql1))
echo '

<tr><td>'.$row1["Notes"] .'</td><td>'.$row1["DateCreated"]. '</td><td>'.$row1["username"]. '</td><td>'.$row1["lastupdate"] .'</td></tr>
</fieldset>
</div>';

;
					

}

	


// function WriteFile(){

// 	$file = 'example.docx';

// if($handle = fopen($file,'w')){

// 	fwrite($handle, 'This is a test');
// 	fclose($handle);
// }else {

// 	echo "File could not be created";
// }
// }


// function ReadFile(){

// 	$file = 'example.docx';

// if($handle = fopen($file, 'r')){

// 	echo $content = fread($handle, filesize($file));

// }else{ 

// 	echo "File could not be created";

// }
// }

// function DeleteFile(){

// 	unlink('example.docx');
// }


?>