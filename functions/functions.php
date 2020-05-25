<?php
include 'config/dbconn.php';

function ProfileInfo(){
global $conn;
$hectare = 0.405;
$filenumber = $_GET['id'];
$sql = "SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'";
$startdate = date('F j,Y',strtotime($row["StartDate"]));
$enddate = date('F j,Y',strtotime($row["EndDate"]));

$sql = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($sql))
echo'
<fieldset class = "box">
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
	
   <div class="column is-one-third small-padding"><label class = "label">Lease Start Date</label>'.date('F j,Y',strtotime($row["StartDate"])).'</div>

  <div class="column is-one-third small-padding"><label class = "label">Lease End Date</label>'.date('F j,Y',strtotime($row["EndDate"])).'</div>

  <div class="column is-one-third small-padding"><label class = "label">Lease Term</label>'.$y = abs($row["EndDate"] - $row["StartDate"]).'</div>

   <div class="column is-one-third small-padding"><label class = "label">Property</label>'.$row["Property"].'</div>

  <div class="column is-one-third small-padding"><label class = "label">Rate</label><input name="address" class="input" readonly value =$'.$row["Rate"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Acreage</label><input name="address" class="input" readonly value ='.$row["Acreage"].'></div>

   <div class="column is-one-third small-padding"><label class = "label">Hectare</label><input name="address" class="input" readonly value ='.$row["Hectare"].'></div>

  <div class="column is-one-third small-padding"><label class = "label">Property ID</label><input name="address" class="input" readonly value ='.$row["PropertyID"].'></div>

    <div class="column is-one-third small-padding"><label class = "label">Revenue</label><input name="address" class="input" readonly value =$'.$row["Revenue"].'></div>
</fieldset>

';

echo "
<div class = 'container'>
<div class = 'buttons'>
<a class = 'button is-success is-rounded' href ='viewlease.php?id={$filenumber}'>Generate Lease</a>
  <a class = 'button is-success is-rounded' href ='landing.php'>Renew Lease</a>
  <a class = 'button is-success is-rounded' href ='landing.php'>Update Personal Information</a>
  <a class = 'button is-danger  is-rounded 'href ='landing.php'>Close File</a>
  </div>
  </div>
";

echo '<div class = "container">
<fieldset class = "box">
<legend class="label has-text-justified">Production Notices</legend>
<div class="table-container ">
  <table class="table is-bordered is-fullwidth space">
      <th>Notes</th>
      <th>DateCreated</th>
      <th>User</th>
     <tbody class="has-text-centered">
</div>
</fieldset>
</div>';

}


function Prod(){
global $conn;
$filenumber = $_GET['id'];
$sql1 = "SELECT * FROM tblNotes WHERE FileNumber = '$filenumber'";
$sql1 = mysqli_query($conn,$sql1);
	
			
while ($row1 = mysqli_fetch_assoc($sql1))
echo '

<tr><td>'.$row1["Notes"] .'</td><td>'.date('F j,Y',strtotime($row1["DateCreated"])). '</td><td>'.$row1["username"]. '</td></tr>
</fieldset>
</div>';

;
					

}


function Property(){

global $conn;

$total = 0;
      $totalland = "SELECT * FROM tblPersonalInformation";
       $landresults = mysqli_query($conn,$totalland);
          while ($row3 = mysqli_fetch_assoc($landresults)){
                    $value = $row3["Acreage"];
                    $total += $value;
                  }

//Query to show the amount of land and acreage per property
$prop_query = "SELECT * FROM tblProperties"; 
$proresults = mysqli_query($conn,$prop_query);



//Query to count how many persons have leases at a property
$PGR = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'PGR'";
$AH = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'AH'";
$SP = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'SP'";
$SV = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'SV'";
$RH = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'RH'";
$NR = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'NR'";
$EBP = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'EBP'";
// $AH = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'AH'";
// $AH = "SELECT * FROM tblPersonalInformation WHERE PropertyID = 'AH'";

       $PRGresults= mysqli_query($conn,$PGR);
       $PRGcount = mysqli_num_rows($PRGresults);
       
       $AHresults = mysqli_query($conn,$AH);
       $AHcount = mysqli_num_rows($AHresults);

       $SPresults = mysqli_query($conn,$SP);
       $SPcount = mysqli_num_rows($SPresults);

       $SVresults = mysqli_query($conn,$SV);
       $SVcount = mysqli_num_rows($SVresults);

       $RHresults = mysqli_query($conn,$RH);
       $RHcount = mysqli_num_rows($RHresults);

       $NRresults = mysqli_query($conn,$NR);
       $NRcount = mysqli_num_rows($NRresults);

       $EBPresults = mysqli_query($conn,$EBP);
       $EBPcount = mysqli_num_rows($EBPresults);

       // $AHresults = mysqli_query($conn,$AH);
       // $AHcount = mysqli_num_rows($AHresults);

       // $AHresults = mysqli_query($conn,$AH);
       // $AHcount = mysqli_num_rows($AHresults);

       echo "<div class='columns'>
  <div class='columnn is-narrow'>
            <div class='container'>
              <div class='table-container space has-text-weight-medium'>
                <table class='table space'>
                    <th>Property Name</th>
                    <th>Number of Lesses</th>";
                    echo "<tr><td>Plantain Garden River</td>";   
                    echo"<td class ='has-text-centered'>{$PRGcount}</td><tr>";
                     echo "<tr><td>Amity Hall</td>";   
                    echo"<td class ='has-text-centered'>{$AHcount}</td><tr>";
                    echo "<tr><td>Spring Plain</td>";   
                    echo"<td class ='has-text-centered'>{$SPcount}</td><tr>";
                     echo "<tr><td>Spring Vale</td>";   
                    echo"<td class ='has-text-centered'>{$SVcount}</td><tr>";
                    echo "<tr><td>Rhymesbury</td>";   
                    echo"<td class ='has-text-centered'>{$RHcount}</td><tr>";
                    echo "<tr><td>New River</td>";   
                    echo"<td class ='has-text-centered'>{$NRcount}</td><tr>";
                    echo "<tr><td>Ebony Park</td>";   
                    echo"<td class ='has-text-centered'>{$EBPcount}</td><tr>";

                  // while ($row1 = mysqli_fetch_assoc($propresults)){
                  //     $name = $row1["Property"];
                  //     echo "<tbody class='has-text-centered'>";
                  
                  // }


                  echo "</tr>
                  <th>Total Land Leased</th>
                <th class ='has-text-centered'>{$total}</th>
                <th></th>
                </tbody>  
               </table>
        
            </div>
        </div>
      </div>";

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
// 
// $session = session_id();
// $time = time();

// $query = "SELECT * FROM users_online WHERE Session  = '$session'";
// $sendquery = mysqli_query($conn,$query);
// $count = mysqli_num_rows($send_query);

// if($count == NULL){

// mysqli_query($conn,"INSERT INTO useronline(Session,TimeLogin) VALUES ('$session','$time')");


?>