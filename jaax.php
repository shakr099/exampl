
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
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


    <div id='frm'></div>

    <div class="form-group">
                    <label>Select Profile Image</label>

                  </div>
   <br />
   <input type="submit" name="user_register" id="r"  value="Register" />
   <input type="submit" name="user_register" id="r2"  value="Register2" />
                  </div>
                
                <script>
$(document).ready(function(){

 

$("#r").click(function(){
  $("#frm").load("dataa.txt",function(data,state){
    $("#r").text(state);
  });
});
  $("#r2").click(function(){
  $("#frm").load("header.txt",function(data,state){
    $("#r2").text(state);
  });
});
});


                </script>