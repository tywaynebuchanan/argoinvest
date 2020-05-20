<?php 
include 'header/header.php';
include 'dbconn.php';
include 'functions.php';
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
          $searchKey = $_POST['keyword'];
          $filterquery = "SELECT * FROM tblPersonalInformation WHERE FirstName LIKE '%$searchKey%'";
        } else{
          $filterquery = "SELECT * FROM tblPersonalInformation";
          $searchKey = "";
        }
        $result = mysqli_query($conn,$filterquery);
      ?> 

      <form action="landing.php" method = "POST">
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

I will be responsible for payment of US$20 per day for three meals while in mandatory quarantine other than in my home or for making my own private arrangements for meals to be delivered at that quarantine location.

<div class="container">
<?php $prop_query = "SELECT * FROM tblProperties"; 
  $proresults = mysqli_query($conn,$prop_query);

?>
<!-- Column Start -->
<div class="columns">
<div class="columnn is-narrow"> <!-- Column Start -->
  
  <div class="container">
    <div class="table-container space">
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
    </table>
  </div>
</div>
</div> <!-- Column End -->

<div class="column">
<!-- <div class="column is is-one-fifth"> -->
<div class="container">
  <div class="table-container is-fullwidth space">
  <table class="table space">
      <th>FileNumber</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>TRN</th>
      <th>TCC</th>
      
      <th>Lease Start Date</th>
      <th>Lease End Date</th>
      <th>View</th>

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

      
      echo "<tr>";
      echo "<td>{$filenumber}</td>";
      echo "<td>{$firstname}</td>";
      echo "<td>{$lastname}</td>";
      echo "<td>{$trn}</td>";
      echo "<td>{$tcc}</td>";
      echo "<td>{$startdate}</td>";
      echo "<td>{$enddate}</td>";
      echo "<td><a class ='button is-success' href ='profile_info.php?id={$filenumber}'>View More</a></td>";
    }


      ?>
  </table>
</div>







</div>
<!-- Column Ends -->
</div>



</body>
</html>