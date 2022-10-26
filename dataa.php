
<table border='2'>
    <tr>
    <td>id</td>
    <td>name</td>
    <td>age</td>
    <td>address</td>
    <td>edit</td> <td>delete</td>
</tr>
<?php
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM  info");
while($row=mysqli_fetch_array($sh)){
?>	
<tr>
<td><?php  echo $row['id']    ?> </td>
<td><?php  echo $row['name']    ?> </td>
<td><?php  echo $row['age']    ?> </td>
<td><?php  echo $row['addresss']    ?> </td>
<td><a href="edit.php?id=<?php  echo $row['id']; ?>"> edit</a></td>
<td><a href="delete.php?id=<?php  echo $row['id']; ?>"> delete</a></td>


</tr>

<?php
}
?>

