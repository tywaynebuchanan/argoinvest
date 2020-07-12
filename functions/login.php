<?php ob_start();
 include ('config/dbconn.php');

session_start(); // Start of session

// If statement to check if the user did not enter their username or password
if(isset($_POST['submit'])){
	if(empty($_POST['username']) && empty($_POST['password'])){
		 echo "Username and password can not be blank";
		}
		else
		{
			// Define username and password
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = sha1($password);

		
			//Statements to prevent hackers from hacking your site
			$username = strip_tags(mysqli_real_escape_string($conn,trim($username)));
			$password = strip_tags(mysqli_real_escape_string($conn,trim($password)));

			//Query to find username and password in user's table
			$query = "SELECT * FROM `tblUsers` WHERE email='$username'
			and password='$password'";
		
			$result = mysqli_query($conn,$query);
    	
	    	$row = mysqli_num_rows($result);
		    	if($row!==1)
		            {
		            	echo'<div class = "no-space">
		              	<div class="notification is-warning has-text-centered">
		                <strong>Opp!</strong> Your password is incorrect
		              	</div>
		            	</div>';

				}else{
						$_SESSION['login_user'] = $username;
						header("location:home_page.php");
					}
			mysqli_close($conn); // Close connection to the database
		}
	}
?>

