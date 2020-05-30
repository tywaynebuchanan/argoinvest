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
          $filterquery = "SELECT * FROM tblPersonalInformation WHERE FirstName LIKE '%$searchKey%' OR PropertyID LIKE '%$searchKey%' OR FirstName LIKE '%$searchKey%'";
        } else{
          $filterquery = "SELECT * FROM tblPersonalInformation ORDER BY ApplicationDate ASC;";
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
    <input class="button is-whie" type="submit" name="submit" value="Search">
    
  </p>
  <p class="control">
    <a class="button is-white" type="reset" name="submit" href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">Reset</a>
    
  </p>
</div>
</form>
    </div>
  </div>
</section>




<div class="container space">
<!-- Column Start -->
<!-- <div class="column"> -->
<!-- <div class="container "> -->
        <div class="table-container has-text-weight-medium">
        <table class="table space has-text-centered is-hoverable">
          <thead class="table is-bordered ">
            <th class = "has-text-centered">FileNumber</th>
            <th class = "has-text-centered">FirstName</th>
            <th class = "has-text-centered">LastName</th>
            <th class = "has-text-centered">TRN</th>
            <th class = "has-text-centered">TCC</th>
            <th class = "has-text-centered">Lease Start Date</th>
            <th class = "has-text-centered">Lease End Date</th>
         
            <th class = "has-text-centered">View</th>
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
              $link = "<td><a class ='button is-link is-rounded' href ='profile_info.php?id={$filenumber}'>View More</a></td>";
            echo "<tr>";
            echo "<td class = 'has-text-centered'>{$filenumber}</td>";
            echo "<td class = 'has-text-centered'>{$firstname}</td>";
            echo "<td class = 'has-text-centered'>{$lastname}</td>";
            echo "<td class = 'has-text-centered'>{$trn}</td>";
            echo "<td class = 'has-text-centered'>{$tcc}</td>";
            echo "<td class = 'has-text-centered'>{$startdate}</td>";
            echo "<td class = 'has-text-centered'>{$enddate}</td>";
            echo $link;
            echo "</tr>";
          }

          mysqli_close($conn);
            ?>
          </tbody>
        </table>
      </div>
    <div>
  </div>
</div>
</div>


</body>

<?php include 'footer/footer.php';?>

</html>