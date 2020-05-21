<?php ob_start();?>
<?php include ('config/dbconn.php');


// Start Session 
session_start();

// Storing session 
$user_check = $_SESSION['login_user'];

//SQL query to fetch user 
$query = "SELECT username FROM `users` WHERE username='$user_check'";
$ses_sql = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];

?>