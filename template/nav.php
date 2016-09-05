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
<script type="text/javascript">
	function openNav() {
		$('#navslide').show();
	    // document.getElementById("bs-example-navbar-collapse-1").style.width = "250px";
	}
	function closeNav() {
		$('#navslide').hide();
	    // document.getElementById("bs-example-navbar-collapse-1").style.width = "0";
	}
</script>
<body>
	<header>
		<nav class="navbar navbar-default cus-nav">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" onclick="openNav()" class="navbar-toggle cus-navbar-header collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar cus-icon-bar"></span>
		        <span class="icon-bar cus-icon-bar"></span>
		        <span class="icon-bar cus-icon-bar"></span>
		      </button>
		      	<ol class="breadcrumb">
				  <li class="active"><a href="#">Home</a></li>
				</ol>
				<div class="right">
					<a href="#" class="icon-notif"></a>
					<a href="#" class="icon-more"></a>
				</div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navslide">
		    	<div class="top-menu">
		    		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		    		<img src="asset/image/actor.png" class="img-responsive">
		    		<h3>rany@gmail.com</h3>
		    	</div>
		    
		      <ul class="nav navbar-nav cus-navbar-nav">
		        <li class="active"><a href="home.php"><span class="icon-home"></span>Home<span class="sr-only">(current)</span></a></li>
		        <li><a href="profile.php"><span class="icon-profile"></span>Profile</a></li>
		        <li><a href="find.php"><span class="icon-find"></span>Find Doctor</a></li>
		        <li><a href="#"><span class="icon-bookmark"></span>Bookmarked</a></li>
		        <li><a href="#"><span class="icon-medical"></span>Medical Record</a></li>
		        <li><a href="#"><span class="icon-logout"></span>Logout</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>