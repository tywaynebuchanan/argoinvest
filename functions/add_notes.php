<?php ob_start();?>
<?php include_once('config/dbconn.php');

//Query to insert data

if(isset($_POST['submit']))
{
  $insert_query = ("INSERT INTO `tblNotes`(`Notes`, `DateCreated`, `username`, `FileNumber`) VALUES (?,?,?,?);");
    if($stmt = mysqli_prepare($conn, $insert_query))
    {
        mysqli_stmt_bind_param($stmt, "ssss", $notes, $datecreated, $user,$filenumber);

        $notes = mysqli_real_escape_string($conn,$_REQUEST['notes']);
        $datecreated = mysqli_real_escape_string($conn,$_REQUEST['datecreated']);
        $user = $_SESSION['login_user'];
        $filenumber = mysqli_real_escape_string($conn,$_REQUEST['filenumber']);
        
    		if(mysqli_stmt_execute($stmt))
    		{
    			echo '<article class="message">
          <div class="message-header">
          <p>Hello World</p>
          <button class="delete" aria-label="delete"></button>
          </div>
          <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
          </article>';
    		}else{
    			echo 'Data Entry Failed';
    		}

    	}
    	mysqli_stmt_close($stmt);

    } // End of if(isset($_POST))

mysqli_close($conn);



?>

