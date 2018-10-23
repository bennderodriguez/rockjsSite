<?php

if(!empty($_GET)){
	echo $_GET["name"];
	unset($_GET["name"]);
	?>
	<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
#myBtn {
    width: 300px;
    padding: 10px;
    font-size:20px;
    position: absolute;
    margin: 0 auto;
    right: 0;
    left: 0;
    bottom: 50px;
    z-index: 9999;
	display: none;
}

  .modal-header, h4, .close {
      background-color: #3873ae;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
</style>
<body>

<div class="container">

  
  <button type="button" class="btn btn-info btn-md" id="myBtn">Hide Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="msgRequest" role="dialog">
    <div class="modal-dialog">
    
             <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Muchas Gracias!</h4>
        </div>
        <div class="modal-body">
          <h3>Hemos recibido su mensaje.</h3>
		  <h3>En breve nos pondremos en contacto.</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
 
<script>
$(document).ready(function(){
    // Show the Modal on load
    $("#msgRequest").modal("show");
    
    // Hide the Modal
    $("#myBtn").click(function(){
        $("#msgRequest").modal("hide");
    });
});
</script>

</body>
</html>

	<?php
}
else{
	
	echo "";
};



?>