<?php 


require ('config/dbconn.php');



?>

<!DOCTYPE html>
<html>
<head>
  <title>Text</title>
</head>
<body>

<form method="POST" action="text.php" enctype="multipart/form-data">
  <input type="text" name="search" placeholder="Enter a name">
  <input type="submit" value = "submit" name = "submit">
</form>
<table>
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Property</td>
  </tr>
  <!-- <?php 

if(isset($_POST['search']))
{
  $search = $_POST['search'];
  $searchquery = "SELECT * FROM tblPersonalInformation WHERE FirstName LIKE '%$search%'";
  $results = mysqli_query($conn,$searchquery);
  $count = mysqli_num_rows($results);


if($count > 0){
  while ($row1 = mysqli_fetch_assoc($results)){
  echo "<tr><td>".$row1["FirstName"]."</td>";
   echo "<td>".$row1["LastName"]."</td>";
   echo "<td>".$row1["Property"]."</td></tr>";  
  }

}else{
   echo "no results";
}
}



  if(isset($_GET['page']))
{

  $page = $_GET['page'];
}
else
{
  $page = 1;
}

$numpage = 5;

$start = ($page - 1) * 5; 

$query = "SELECT * FROM tblPersonalInformation limit $start,$numpage";
$result = mysqli_query($conn,$query);

 // $c_query = mysqli_query($conn,"SELECT * FROM tblPersonalInformation");
 // $count_row = mysqli_num_rows($count_row);

 // $records = ceil($count_row/10);



   $total = mysqli_num_rows($count);
  $totalpage = ceil($total/$numpage);

  if($page >1)
  {
    echo "<a href= 'text.php?page=".($page - 1)."'>Previous</a>";
  }

 

  for ($i=1; $i < $totalpage ; $i++)
   { 
     echo "<a href= 'text.php?page=".$i."'>$i</a>";
  }

   if($i>$page)
  {
    echo "<a href= 'text.php?page=".($page + 1)."'>Next</a>";
  }




  ?>
</table> -->

<?php 

    $notesposted = $_POST['notes'];
    $date = date("Y-m-d");
    $username = 'Tywayne';
    $filenumber = 'PGR1';
    // $insert_query = "INSERT INTO `tblNotes`(`Notes`,) VALUES ('$notesposted')";
    $insert_query = "INSERT INTO `tblNotes`(`Notes`, `DateCreated`, `username`, `FileNumber`) VALUES ('$notesposted','$date','$username','$filenumber')";
    $q = mysqli_query($conn,$insert_query);

    if (!$q) {
  die("Database insert failed: " . mysqli_error());
}else{
    echo "Success";
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
            <td><input class="button is-warning is-rounded" type = "submit" value = "Submit"></td>
        </tr>
  </table>
  </form>
</div>



</body>
</html>