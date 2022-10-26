<?php
$id=$_GET['id'];

?>
<?php
include"conn.php";
$delete=mysqli_query($con,"delete info from info where id=$id ");
if($delete){
   header("Location:show.php"); 
}
else{
    die("error".mysqli_error($con));
}

?>