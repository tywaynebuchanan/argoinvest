<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");}

?>
<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
       Property & Fixed Asset Department
      </h1>
      <h2 class="subtitle">
       Please enter the name of the Lessee below
      </h2>

    
     <?php

        if(isset($_POST['keyword'])){
          $searchKey = mysqli_real_escape_string($conn,$_POST['keyword']);
          $filterquery = "SELECT * FROM tblPersonalInformation WHERE FirstName LIKE '%$searchKey%' OR PropertyID LIKE '%$searchKey%' OR LastName LIKE '%$searchKey%'";
          

        } else{
          $filterquery = "SELECT * FROM tblPersonalInformation";
          $searchKey = "";
        }
        $result = mysqli_query($conn,$filterquery);
      ?> 
    
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">
   <div class="field is-grouped">
  <p class="control is-expanded">
    <input class="input" type="text" name = "keyword" placeholder="Find a lessee" value="<?php echo $searchKey;?>">
  </p>
  <p class="control">
    <input class="button is-success" type="submit" name="submit" value="Search">
    
  </p>
</div>
</form>
    </div>
  </div>
</section>



<div class="container space">


<!-- Column Start -->


<div class="column">
<!-- <div class="column is is-one-fifth"> -->
<div class="container has-text-weight-medium">
        <div class="table-container is-fullwidth ">
        <table class="table space has-text-centered">
          <thead class="table is-bordered ">
            <th>FileNumber</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>TRN</th>
            <th>TCC</th>
            <th>Lease Start Date</th>
            <th>Lease End Date</th>
            <th>View</th>
          </thead>
           <tbody class="has-text-centered">
          <?php 
          while ($row = mysqli_fetch_assoc($result)){
              $filenumber = $row["FileNumber"];
              $firstname = $row["FirstName"];
              $lastname = $row["LastName"];
              $trn = $row["TRN"];
              $tcc = $row["TCC"];
              $startdate = date('F j,Y',strtotime($row["StartDate"]));
              $enddate = date('F j,Y',strtotime($row["EndDate"]));
              $link = "<td><a class ='button is-success is-rounded' href ='profile_info.php?id={$filenumber}'>View More</a></td>";
            echo "<tr>";
            echo "<td>{$filenumber}</td>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$lastname}</td>";
            echo "<td>{$trn}</td>";
            echo "<td>{$tcc}</td>";
            echo "<td>{$startdate}</td>";
            echo "<td>{$enddate}</td>";
            echo $link;
            echo "</tr>";
          }
            ?>
          </tbody>
        </table>
      </div>
    <div>
  </div>
</div>
</div>

</div>







</html>