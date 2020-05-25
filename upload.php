<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}



?>


<div class="field">

<?php
if(isset($_POST["submit"])){
$file = $_FILES["files"];
move_uploaded_file($file["tmp_name"],"/footer".$file["name"]);
header("Location:landing.php");
 }
?>
  
<div>
<form method="post" action="upload.php" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile">
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
</div>

</body>
</html>