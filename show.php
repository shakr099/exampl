<?php

include"header.php";

?>
<div align='center'>
    
<div class="container">
 <div   class="row">
   
 <div   class="col-md-2"   > 
</div>
 <div   class="col-md-8"   > 

<table class='table table-hover table-bordered table-condensed responsive' width="70%">
    <tr  style='background-color:black;color:white; border: 2px solid black;padding:2px; font-size:1em;'>
    <td class='c_td'>id</td>
    <td class='c_td'>name</td>
    <td class='c_td'>age</td>
    <td class='c_td'>address</td>
    <td class='c_td'>edit</td> <td>delete</td>
</tr>
<?php
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM  info");
while($row=mysqli_fetch_array($sh)){
?>	
<tr style='  border: 2px solid black;'>
<td class='i_td'><?php  echo $row['id']    ?> </td>
<td class='i_td'><?php  echo $row['name']    ?> </td>
<td class='i_td'><?php  echo $row['age']    ?> </td>
<td class='i_td'><?php  echo $row['addresss']    ?> </td>
<td class='i_td'><a  class="btn btn-primary" href="edit.php?id=<?php  echo $row['id']; ?>"> edit</a></td>
<td class='i_td'><a  class="btn btn-primary" href="delete.php?id=<?php  echo $row['id']; ?>"> delete</a></td>


</tr>

<?php
}
?>
</table>
</div>
 <div   class="col-md-2"   > 
</div>
</div>
</div>
</div>
