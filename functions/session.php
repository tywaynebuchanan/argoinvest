<?php ob_start();
include ('config/dbconn.php');


// Start Session 
session_start();

// Storing session 
$user_check = $_SESSION['login_user'];

//SQL query to fetch user 
$query = "SELECT * FROM `tblUsers` WHERE email='$user_check'";
$ses_sql = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['first_name']." ".$row['last_name'];

?>
