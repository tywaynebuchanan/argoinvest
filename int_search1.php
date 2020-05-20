<?php 
include 'header/header.php';
include 'dbconn.php';
include 'functions.php';
?>

<div class="container">
	
	<div class="table-container space">
  <table class="table space">
      <th>FileNumber</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>TRN</th>
      <th>TCC</th>
      <th>View</th>

     <tbody class="has-text-centered">
    <?php Search()?>
   
  </table>
</div>

</body>
<!-- <script>
	document.addEventListener('DOMContentLoaded',function()){
		document.getElementById("btn-show").addEventListener('click',ShowTable);

</script> -->
</html>