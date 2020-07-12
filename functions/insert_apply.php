<?php ob_start();?>
<?php include_once('config/dbconn.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");}

// $user = $_SESSION['login_user'];
//Get information from Application
//Query to insert data
if(isset($_POST['submit']))
{
	
	$insert_query = "INSERT INTO `tblPersonalInformation`(`FileNumber`, `FirstName`, `LastName`, `Street`, `City`, `Parish`, `OfficePhone`, `CellPhone`, `HomePhone`, `Email`, `TRN`, `TCC`, `StartDate`, `EndDate`, `Irrigation`, `NoIrrigation`, `PropertyID`, `Rate`, `Acreage`,`User`,`Property`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";	
if($stmt = mysqli_prepare($conn,$insert_query))
{
    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $filenumber, $fname, $lname,$street,$city,$parish,$officephone,$cellphone,$homephone,$email,$trn,$tcc,$startdate,$enddate,$irr,$noirr,$propertyid,$rate,$acreage,$user,$property);

    $filenumber = mysqli_real_escape_string($conn,$_REQUEST['filenumber']);
    $fname = mysqli_real_escape_string($conn,$_REQUEST['fname']);
    $lname = mysqli_real_escape_string($conn,$_REQUEST['lname']);
    $street = mysqli_real_escape_string($conn,$_REQUEST['street']);
    $city = mysqli_real_escape_string($conn,$_REQUEST['city']);
    $parish = mysqli_real_escape_string($conn,$_REQUEST['parish']);
    $officephone = mysqli_real_escape_string($conn,$_REQUEST['officephone']);
    $cellphone = mysqli_real_escape_string($conn,$_REQUEST['cellphone']);
    $homephone = mysqli_real_escape_string($conn,$_REQUEST['homephone']);
    $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
    $trn = mysqli_real_escape_string($conn,$_REQUEST['trn']);
    $tcc = mysqli_real_escape_string($conn,$_REQUEST['tcc']);
    $startdate = mysqli_real_escape_string($conn,$_REQUEST['startdate']);
    $enddate = mysqli_real_escape_string($conn,$_REQUEST['enddate']);
    $irr = mysqli_real_escape_string($conn,$_REQUEST['irr']);
    $noirr = mysqli_real_escape_string($conn,$_REQUEST['noirr']);
    $propertyid = mysqli_real_escape_string($conn,$_REQUEST['propertyid']);

     if($propertyid == "PGR")
    {
        $property = "Plantian Gardenn";
    }else if($propertyid == "EBP")
    {
            $property = "Ebony Park";
    }else if($propertyid == "SV")
    {
            $property = "Spring Vale";
    }else if($propertyid == "SP")
    {
            $property = "Spring Plain";
    }else if($propertyid == "NR")
    {
            $property = "New River";
    }else if($propertyid == "AH")
    {
            $property = "Aminty Hall";
    }else if($propertyid == "RHY")
    {
            $property = "Rhymesbury";
    }

    $rate = mysqli_real_escape_string($conn,$_REQUEST['rate']);
    $acreage = mysqli_real_escape_string($conn,$_REQUEST['acreage']);
    $user = $_SESSION['login_user'];
  
		if(mysqli_stmt_execute($stmt))
		{
			header("location:apply_success.php");
		}else{
				

                echo '<article class="message is-danger">
  				<div class="message-header">
    			<p>Data Entry Failed</p>	
  				</div>
  				<div class="message-body">
    			There is a problem with the data that you have entered. Please re-enter
  				</div>
				</article>';
			}
	}
	mysqli_stmt_close($stmt);
} // End of if(isset($_POST))

mysqli_close($conn);

?>

