<!DOCTYPE html>
<html lang="en">
<head>  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/query.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  	<script src="js/query.min.js"></script>
  	<script src="js/parsley.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
  	<link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/TimeCircles.css" />
    <script src="style/TimeCircles.js"></script>
    <script src="js/query.min.js"></script>
<style>
li a:hover{
background-color:#ccc;
padding:3px;
}
table {
  border: 2px solid red;
}
.i_td{
  border: 2px solid black;
}
.c_td{
  border: 2px solid white;

}
</style>
</head>
<body dir='rtl'>

  <?php
  ?>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
</button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" >
      <li> <a class="navbar-brand" href="header.php">الرئيسيه</a>   </li>

      <li> <a class="navbar-brand"  href="show.php" id='u_side'>عرض بيانات</a>
</li>
        <li class="nav-item">
          <a class="navbar-brand" id='e_exam'  href="examp.php" >ادخال بيانات</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="indexx.php">بحث</a>
        </li>
      </ul>
    </div>  
  </nav>

  <div class="container-fluid">
  <?php
  
  ?>



</div>
<br>
<div id='frm'></div>
                
                <script>
$(document).ready(function(){

 

$("#u_side").click(function(){
  $("#frm").load("u_side.txt",function(data,state){
    $("#u_side").laod(state);
  });
});

  $("#e_exam").click(function(){
  $("#frm").load("show.php",function(data,state){
    $("#e_exam").text(state);
  });
});
});


                </script>



