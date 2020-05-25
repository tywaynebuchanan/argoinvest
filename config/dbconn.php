<?php ob_start()?>

<?php
$timezone = date_default_timezone_set("America/Jamaica");
$conn_error = "Could not connect";
$db_host = 'localhost';
$db_user ='root';
$db_password ='root';
$mysql_db ='argoinvest';

$conn = mysqli_connect($db_host,$db_user,$db_password) or die ('The username or password is incorrect');
mysqli_select_db($conn,$mysql_db) or die('Not such database present');


?>