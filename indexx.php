<?php

include"header.php";

?>
<div align='center'>


<form  action='' method='post'>

<input type='text' name='Search' />
<input type='submit' name='btn_search' value='Search' />
</form>
<?php
if(isset($_POST['btn_search'])){
?>
<div class="container">
 <div   class="row">
   
 <div   class="col-md-2"   > 
</div>
 <div   class="col-md-8"   > 

<table class='table table-hover table-bordered table-condensed responsive' width="70%">
    <tr>
    <td>id</td>
    <td>name</td>
    <td>age</td>
    <td>address</td>
    <td>edit</td> <td>delete</td>
</tr>
<?php
$search=$_POST['Search'];
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM  info where name like '%$search%' or age like '%$search%' or addresss like '%$search%' ");
while($row=mysqli_fetch_array($sh)){
?>	
<tr>
<td><?php  echo $row['id']    ?> </td>
<td><?php  echo $row['name']    ?> </td>
<td><?php  echo $row['age']    ?> </td>
<td><?php  echo $row['addresss']    ?> </td>
<td><a  class="btn btn-primary" href="edit.php?id=<?php  echo $row['id']; ?>"  class="btn btn-primary"> edit</a></td>
<td><a  class="btn btn-primary" href="delete.php?id=<?php  echo $row['id']; ?>"  class="btn btn-primary"> delete</a></td>
</tr>
<?php
}
}
?>


</table>
</div>
 <div   class="col-md-2"   > 
</div>
</div>
</div>


</div>