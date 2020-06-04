<?php ob_start();?>
<?php include_once('config/dbconn.php');

//Query to insert data

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

