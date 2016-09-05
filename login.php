<!DOCTYPE html>
<html>
<head>
	<title>Medskin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/cus-login.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">
	$('.btn-login').submit(function(e){
		e.preventDefault();
		$('#overlay').css('display', 'block');
		return true;
	});
 
</script>

<body>
<div class="container">
	<div class="bg-login">
		<img src="asset/image/logo-login.png" class="img-responsive" width="200px" height="94px">
		<form class="form-horizontal form-login" id="form1" method="POST">
			
			<div class="form-group">
				<div class="col-xs-12">
			  		<span class="icon-user"></span><input type="text" class="form-control" id="inputUsername" placeholder="Username" required="">
			  	</div>
			</div>
			<div class="form-group">
			    <div class="col-xs-12">
			      <span class="icon-pass"></span><input type="password" class="form-control" id="inputPassword" placeholder="Password" required="">
			    </div>
			</div>
		  	<a href="#" type="submit" class="btn btn-login" id="submit" onclick="LoadData();">LOGIN</a>
		</form>
		<a href="register.php" class="signup">Sign up to MedSkin</a>
		<a href="#" class="forgot">Forgot you password ?</a>

		<div id="overlay">
		     <img src="asset/image/feedback_loading.gif" alt="Loading" class="img-responsive" />
		     Wait a moment
		</div>
	</div>
</div>
<script type="text/javascript">

function LoadData(){
    $("#overlay").show();
    $.ajax({
          url: yourURL,
          cache: false,
          success: function(html){
            console.log('success');
          },
          complete: function(){
            $("#overlay").hide();
          }
        });
}
	// $(document).ready(function(){

	// 	$(document).ajaxStart(function(){
	// 		$('#overlay').show(200);
	// 	})
	// 	.ajaxStop(function(){
	// 		$('#overlay').hide(200);
	// 	})
	// 	.ajaxComplete(function(){
	// 		$('#overlay').hide(200);
	// 	})
	// 	.ajaxError(function(){
	// 		$('#overlay').hide(200);
	// 	})
	// 	.ajaxSuccess(function(){
	// 		$('#overlay').hide(200);
	// 	});
	// });
 
</script>
</body>
</html>