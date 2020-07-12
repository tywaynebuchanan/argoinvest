<?php 


require ('config/dbconn.php');



?>

<!DOCTYPE html>
<html>
<head>
  <title>Text</title>
</head>
<body>


<?php 

if(isset($_POST['submit']))
{
    // $notesposted = $_POST["notes"];
    // $date = $_POST["date"];
    // $username = $_POST["username"];
    // $filenumber = $_POST["file"];
    // $insert_query = "INSERT INTO `tblNotes`(`Notes`,) VALUES ('$notesposted')";
    $insert_query = "INSERT INTO `tblNotes`(`Notes`, `DateCreated`, `username`, `FileNumber`) VALUES ('$notesposted','$date','$username','$file')";
    $q = mysqli_query($conn,$insert_query);

    if(!$q) {
  die("Database insert failed: " . mysqli_error());
}else{
    echo "Success";
}
}


?>


<div id="insertNotestbl">
  <form action ="text.php" method = "POST">
  <table class = "table is-fullwidth" id = "insertNotestbl">
    <th><a class = "button is-link is-rounded" id = "addNotesbtn" href="#">Add a Note</a></th>
    <th>Notes</th>
    <th>Date</th>
    <th>Username</th>
    <th>File</th>
    

    <tr>                              
            <td><i class="far fa-sticky-note"></i></td>
           <td><input class = "input" type="text" name = "notes"></td>
           <td><input class = "input" type="text" name = "date"></td>
           <td><input class = "input" type="text" name = "username"></td>
           <td><input class = "input" type="text" name = "file"></td>
            <td><input class="button is-warning is-rounded" type = "submit" value = "Submit"></td>
        </tr>
  </table>
  </form>
</div>



</body>
</html>
