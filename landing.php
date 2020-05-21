<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}
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
          $filterquery = "SELECT * FROM tblPersonalInformation WHERE FirstName LIKE '%$searchKey%'";
          

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

<?php $prop_query = "SELECT * FROM tblProperties"; 
  $proresults = mysqli_query($conn,$prop_query);
?>
<!-- Column Start -->
<div class="columns">
  <div class="columnn is-narrow"> <!-- Column Start -->
    
            <div class="container">
              <div class="table-container space has-text-weight-medium">
                <table class="table space">
                    <!-- <th>PropertyID</th> -->
                    <th>Name</th>
                    <th>Acreage</th>
                  <tbody class="has-text-centered">
                  <?php 
                  while ($row2 = mysqli_fetch_assoc($proresults)){
                      //$properityid = $row2["PropertyID"];
                      $name = $row2["Name"];
                      $acreage = $row2["Acreage"];
                      
                    
                    echo "<tr>";
                    //echo "<td>{$properityid}</td>";
                    echo "<td><a class ='button is-success' href='landing.php?id='>{$name}</a></td>";
                    echo "<td><span class='tag is-link is-normal'>{$acreage}</span></td>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
        </div>
      </div> <!-- Column End -->

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
              $startdate = $row["StartDate"];
              $enddate = $row["EndDate"];
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