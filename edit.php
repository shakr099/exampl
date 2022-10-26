<?php
$id=$_GET['id'];



?>

<?php
if(isset($_POST['edit'])){
include"conn.php";
    $name=$_POST['yourname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
$update=mysqli_query($con,"update info set name='$name',age='$age',addresss='$address' where id=$id ");
if($update){
   header("Location:show.php"); 
}
else{
    die("error".mysqli_error($con));
}
}
?>
<div align='center'>
<?php

include"header.php";

?>

<div align='center'>
<h1> </h1>
<div class="container">
 <div   class="row">
   
 <div   class="col-md-3"   > 
</div>
 <div   class="col-md-6"   > 

<?php
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM  info where id=$id");
while($row=mysqli_fetch_array($sh)){
?>	
<form method='post' action=''>
<b>namr</b>
<input type='text' value="<?php  echo $row['name'];    ?>" name='yourname'/><br>
<b>age</b>
<input type='text' value="<?php  echo $row['age']    ?>" name='age'/><br>
<b>address</b>
<input type='text' value="<?php  echo $row['addresss']    ?>" name='address'/><br>
<input type='submit'  class="btn btn-primary" name='edit' value='edit'>
</form>
<?php

}
?>

</div >
   
 <div   class="col-md-3"   > 
</div>

</div>
</div>