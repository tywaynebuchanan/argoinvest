<?php
include 'config/dbconn.php';

function InfoBreadCrumb(){
  global $conn;
$filenumber = $_GET['id'];
$sql1 = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'");

while ($row1 = mysqli_fetch_assoc($sql1)){
$fname = $row1["FirstName"];
$lname = $row1["LastName"];

echo $fname." ".$lname;

}
}

function ProfileInfo(){
global $conn;
$hectare = 0.405;
$filenumber = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'");
$startdate = date('F j,Y',strtotime($row["StartDate"]));
$enddate = date('F j,Y',strtotime($row["EndDate"]));
				while ($row = mysqli_fetch_assoc($sql))


echo '
 <p class="has-text-link">Updated by:'.$row["User"].'<p>
<fieldset class = "box">
<legend class="label has-text-justified">Personal Data</legend>
<div class="columns is-mobile is-multiline">
  <div class="column is-2 small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-hashtag"></i>
</span>FileNumber</label><input name="fname" class="input" readonly value ='.$row["FileNumber"].'></div>

  <div class="column is-4 small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-user"></i>
</span>First Name</label><input name="lname" class="input" readonly value ='.$row["FirstName"].'></div>

  <div class="column is-4 small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-user"></i>
</span>Last Name</label><input name="lname" class="input"readonly value ='.$row["LastName"].'></div>

<div class="column is-12"><label class = "label"><span class="icon">
  <i class="fas fa-home"></i>
</span>Address</label><div>'.$row["Street"].",".$row["City"].",".$row["Parish"]. '</div></div>

  <div class="column is-one-quarter small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-phone"></i>
</span>Office Phone Number</label><input name="email" type="email" readonly class="input" value ='.$row["OfficePhone"].'></div>

  <div class="column is-one-quartersmall-padding"><label class = "label"><span class="icon">
  <i class="fas fa-phone"></i>
</span>Home Phone Number</label><input name="address" class="input" readonly value ='.$row["HomePhone"].'></div>
  
  <div class="column is-one-quarter small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-phone"></i>
</span>Cell Phone Number</label><input name="address" class="input" readonly value ='.$row["CellPhone"].'></div>

  <div class="column is-one-quarter small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-at"></i>
</span>Email Address</label><input name="address" class="input" readonly value ='.$row["Email"].'></div>
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
	
   <div class="column is-one-fourth small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-calendar-alt"></i>
</span>Lease Start Date</label>'.date('F j,Y',strtotime($row["StartDate"])).'</div>

  <div class="column is-one-fourth small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-calendar-alt"></i>
</span>Lease End Date</label>'.date('F j,Y',strtotime($row["EndDate"])).'</div>

  <div class="column is-one-fourth small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-calendar-alt"></i>
</span>Lease Term</label>'.$y = abs($row["EndDate"] - $row["StartDate"]).'</div>


</div>

<div class="columns is-mobile is-multiline">
  <div class="column is-one-fourth small-padding"><label class = "label">Acreage</label>'.$row["Acreage"].'</div>

   <div class="column is-one-fourth small-padding"><label class = "label">Hectare</label>'.$row["Hectare"].'</div>

  <div class="column is-one-fourth small-padding"><label class = "label">Property ID</label>'.$row["PropertyID"].'</div>

   <div class="column is-one-fourth small-padding"><label class = "label">Property Name</label>'.$row["Property"].'</div>

   <div class="column is-one-fourth small-padding has-text-centered"><label class = "label"><span class="icon">
  <i class="fas fa-tint"></i>
</span>Irrigation</label>'.$row["Irrigation"].'</div>

   <div class="column is-one-fourth small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-tint-slash"></i>
</span>Un-Irrigated</label>'.$row["NoIrrigation"].'</div>

   <div class="column is-one-fourth small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-money-bill-alt"></i>
</span>Rate</label>$'.$row["Rate"].'</div>

    <div class="column is-one-fourth small-padding"><label class = "label"><span class="icon">
  <i class="fas fa-money-bill-alt"></i>
</span>Revenue</label>$'.$row["Revenue"].'</div>
    </div>
</fieldset>

';

echo "
<div class = 'container'>
<div class = 'buttons'>
<a class = 'button is-link is-rounded' href ='viewlease.php?id={$filenumber}'><span class='icon'>
  <i class='fas fa-file-alt'></i>
</span><span>Generate Lease</span></a>

  <a class = 'button is-link is-rounded' href ='landing.php'><span class='icon'>
  <i class='fas fa-file-alt'></i>
</span><span>Renew Lease</span></a>

  <a class = 'button is-link is-rounded' href ='landing.php'>Update Personal Information</a>

<a class = 'button is-link is-rounded' href ='landing.php'><span class='icon'>
  <i class='fas fa-paper-plane'></i>
</span><span>Email Lease</span></a>




  
  </div>
  </div>
";

echo '<div class = "container">
<fieldset class = "box">
<legend class="label has-text-justified">Production Notices</legend>



<div class="table-container space">
  <table class="table is-bordered space is-fullwidth is-narrow">
  <th></th>
      <th>Notes</th>
      <th>Date Created</th>
      <th>User</th>
      <th>Action</th>
     <tbody class="has-text-centered">
';

}


function Production_Notices(){
global $conn;
$filenumber = $_GET['id'];
$sql1 = mysqli_query($conn,"SELECT * FROM tblNotes WHERE FileNumber = '$filenumber'");
if($sql1->num_rows > 0)
while ($row1 = mysqli_fetch_assoc($sql1)){
echo'
<tr><td>'.$row1["Notes"] .'</td><td>'.date('F j,Y',strtotime($row1["DateCreated"])). '</td><td>'.$row1["username"]. '</td></tr>';
} 
else{
  echo'<div class = "container">
              <div class="notification is-link has-text-justified"">
                <strong> No Production Notices</strong>
              </div>
            </div>';

}
}

function Prod_Update(){
  global $conn;
  $filenumber = $_GET['id'];
  $sql1 = mysqli_query($conn,"SELECT * FROM tblNotes WHERE FileNumber = '$filenumber'");
      if($sql1->num_rows > 0)
       while ($row1 = mysqli_fetch_assoc($sql1)){
  echo '
    <tr>                              
        <td><i class="far fa-sticky-note"></i></td>
       <td><input class = "input" type="text" readonly value ="'.$row1["Notes"].'"></td>
        <td><input class = "input" type="text" readonly value ="'.date('F j,Y',strtotime($row1["DateCreated"])).'"></td>
        <td><input class ="input" type ="text" readonly value ="'.$row1["username"].'"></td>
        <td class = "has-items-centered"><a class="button is-warning is-rounded" href="#">Delete</a></td>
    </tr>';
  }else{
    echo'<div class = "container">No Notices</div>';
  }

}#end of function

function Property(){
global $conn;
$total = 0;
      $totalland = mysqli_query($conn,"SELECT * FROM tblPersonalInformation");
          while ($row3 = mysqli_fetch_assoc($totalland)){
                    $value = $row3["Acreage"];
                    $total += $value;
                  }

//Query to show the amount of land and acreage per property
$prop_query = mysqli_query($conn,"SELECT * FROM tblProperties WHERE PropertyID ='PGR'"); 
while ($w = mysqli_fetch_assoc($prop_query)){
                    $size = $w["SizePark"];
                  }

$ah_query = mysqli_query($conn,"SELECT * FROM tblProperties WHERE PropertyID ='AH'"); 
while ($ah = mysqli_fetch_assoc($ah_query)){
                    $ah_size = $ah["SizePark"];
                  }

//Query to count how many persons have leases at a property
$PGR = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'PGR'");
$AH = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'AH'");
$SP = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'SP'");
$SV = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'SV'");
$RH = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'RHY'");
$NR = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'NR'");
$EBP = mysqli_query($conn,"SELECT * FROM tblPersonalInformation WHERE PropertyID = 'EBP'");

       $PRGcount = mysqli_num_rows($PGR);
        while ($r = mysqli_fetch_assoc($PGR)){
                    $value1 = $r["Acreage"];
                    $irr = $r["Irrigation"];
                    $noirr = $r["NoIrrigation"];
                    $totala += $value1;
                    $totalirr += $irr;
                    $totalnoirr += $noirr;
                  }


       // $AHresults = mysqli_query($conn,$AH);
       $AHcount = mysqli_num_rows($AH);
       while ($r1 = mysqli_fetch_assoc($AH)){
                    $ah_acreage = $r1["Acreage"];
                    $ah_irr = $r1["Irrigation"];
                    $ah_noirr = $r1["NoIrrigation"];
                    $ah_total += $ah_acreage;
                    $ah_totalirr += $ah_irr;
                    $t_ahnoirr += $ah_noirr;
                  }

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

      
        $l= $size-$totala;
        $m = $size-$totalirr;

          $available = $ah_size - $ah_total;
          $un_grated = $ah_size- $t_ahnoirr;
       
//Total Lessee at each park 
$TotalLesse = array($PRGcount,$AHcount,$SPcount,$SVcount,$RHcount,$NRcount,$EBPcount);

//Total Size of each park
$TotalSize = array($size,$ah_size);

//Total Acreage Available
$TotalAvailable = array($l,$available);

//Total Irrigated 
$TotalIrrigated = array($totalirr,$ah_totalirr);

//Total Un-irrigated 
$TotalUnIrrigated = array($totalnoirr,$t_ahnoirr);
       echo "<div class='columns'>
  <div class='columnn is-narrow'>
            <div class='container'>
              <div class='table-container space has-text-weight-medium'>
                <table class='table space'>

                    <th>Property Name</th>
                     <th>Number of Lesses</th>
                    <th>Size of Park</th>
                    <th>Acreage Leased</th>
                     <th>Acreage Avaiable</th>
                     <th>Total Irrigated</th>
                      <th>Total Un-Irrigated</th>
                    
                    <th></th>";
                    echo "<tr><td>Plantain Garden River</td>"; 
                     echo"<td class ='has-text-centered'>{$PRGcount}</td>";  
                    echo"<td class ='has-text-centered'>{$size}</td>";
                    echo"<td class ='has-text-centered'>{$totala}</td>";
                    echo"<td class ='has-text-centered'>{$l}</td>";
                    echo"<td class ='has-text-centered'>{$totalirr}</td>";
                    echo"<td class ='has-text-centered'>{$totalnoirr}</td><tr>";

                     echo "<tr><td>Amity Hall</td>";   
                    echo"<td class ='has-text-centered'>{$AHcount}</td>";
                    echo"<td class ='has-text-centered'>{$ah_size}</td>";
                    echo"<td class ='has-text-centered'>{$ah_total}</td>";
                    echo"<td class ='has-text-centered'>{$available}</td>";
                    echo"<td class ='has-text-centered'>{$ah_totalirr}</td>";
                     echo"<td class ='has-text-centered'>{$t_ahnoirr }</td><tr>";

                    echo "<tr><td>Spring Plain</td>";   
                    echo"<td class ='has-text-centered'>{$SPcount}</td><tr>";
                     echo "<tr><td>Spring Vale</td>";   
                    echo"<td class ='has-text-centered'>{$SVcount}</td><tr>";
                    echo "<tr><td>Rhymesbury</td>";   
                    echo"<td class ='has-text-centered'>{$RHcount}</td><tr>";
                    echo "<tr><td>New River</td>";   
                    echo"<td class ='has-text-centered'>{$NRcount}</td><tr>";
                    echo "<tr><td>Ebony Park</td>";   
                    echo"<td class ='has-text-centered'>{$EBPcount}</td><tr>
                    </tbody>";

                    echo"<tfoot>";
                  echo "<tr>
                  <th>Total</th>
                <th class ='has-text-centered'>".array_sum($TotalLesse)."</th>
                <th class ='has-text-centered'>".array_sum($TotalSize)."</th>
                <th class ='has-text-centered'>{$total}</th>
                <th class ='has-text-centered'>".array_sum($TotalAvailable)."</th>
                <th class ='has-text-centered'>".array_sum($TotalIrrigated)."</th>
                <th class ='has-text-centered'>".array_sum($TotalUnIrrigated)."</th>
                </tr>
                 </tfoot>
               </table>
        
            </div>
        </div>
      </div>";

}


function UserInfo(){
include  'config/dbconn.php';

$username = $_SESSION['login_user'];

$query = $conn->query("SELECT * FROM tblUsers WHERE email = '$username';");
  if ($query->num_rows > 0){
    while ($row = $query->fetch_assoc())
      echo $row['first_name']." ".$row['last_name']." ".'<p>('.$row["role"].')</p>';
  }

}//End of function



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
