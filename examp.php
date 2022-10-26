<?php
if(isset($_POST['add'])){
include"conn.php";
    $name=$_POST['yourname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $mess="";
$in=mysqli_query($con,"INSERT INTO info (name,age,addresss) VALUES('$name','$age','$address')");
if($in){
    $mes="your add sucssefully";
}
else{
    die("error".mysqli_error($con));
}
mysqli_close($con);
}
?>
<?php

include"header.php";

?>

<div align='center'>
<h1> <?php
if(isset($mes)){
    echo $mes;
}else{
    echo"";
}
?></h1>
<div class="container">
 <div   class="row">
   
 <div   class="col-md-3"   > 
</div>
 <div   class="col-md-6"   > 

<form method='post' class="mt-5 mb-5 login-input"  action=''  style='border:2px solid black;background-color:#cca;'>
<b>namr</b>
<input type='text' class="form-control" name='yourname'/><br>
<b>age</b>
<input type='text' class="form-control" name='age'/><br>
<b>address</b>
<input type='text' class="form-control" name='address'/><br>
<input type='submit'  class="btn btn-primary" name='add' value='add'>
</form>
</div>
<div   class="col-md-3"   > 
</div>
</div>



</div>