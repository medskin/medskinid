<!DOCTYPE html>
<html>
<head>
	<title>Medskin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/cus-nav.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="asset/js/bootstrap.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-default cus-nav">
		  <div class="head">
		  	<div class="back">
		  		<a href="#" type="button" class="icon-back"></a>
		  	</div>
		  	<div class="title-page">Dr. Stevi</div>
		  </div>
		</nav>
	</header>
	
	<div class="chat">
		<!-- popup -->
			<div class="popup-media" id="media">
				<span class="icon-camera"></span><p>Take Photo</p>
				<span class="icon-choose"></span><p>Choose Photo</p>
				<span class="icon-voice"></span><p>Voice Note</p>
			</div>
		<!-- end popup -->
		<div class="container">

			<p class="date">Mon, Jun 20</p>
			<?php for($a=0; $a<4; $a++){?>
			<div class="receive">
				<div class="actor">
					<img src="asset/image/actor.png" alt="actor" class="img-responsive">
				</div>
				<div class="actor-message">
					<p>Hi rani , i can help you? what’s yourproblem?</p>
				</div>
			</div>
			<div class="sender">
				<div class="actor-message">
					<p>Hi rani , i can help you? what’s yourproblem?</p>
				</div>
				<div class="actor">
					<img src="asset/image/actor.png" alt="actor" class="img-responsive">
				</div>
			</div>
			<?php } ?>
			<div class="receive">
				<div class="actor">
					<img src="asset/image/actor.png" alt="actor" class="img-responsive">
				</div>
				<div class="actor-message">
					<img src="asset/image/a.png" class="img-responsive">
				</div>
			</div>
			<div class="sender">
				<div class="actor-message">
					<img src="asset/image/a.png" class="img-responsive">
				</div>
				<div class="actor">
					<img src="asset/image/actor.png" alt="actor" class="img-responsive">
				</div>
			</div>
		</div>
		<div class="action-test">
			<div class="action-media">
				<span class="icon-media"></span>
			</div>
			<div class="action-input">
				<input type="text" class="form-control" id="message" placeholder="">
			</div>
			<div class="action-send">
				<span class="icon-send"></span>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(".icon-media").click(function(){
		    $("#media").toggle();
		});
	</script>
</body>
</html>