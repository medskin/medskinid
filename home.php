<?php include 'template/nav.php'; ?>
<div class="position-content">
	<ul class="nav nav-tabs cus-nav-tabs">
	  <li role="presentation" class="active"><a href="#feature-tab" class="feature">Feature</a></li>
	  <li role="presentation"><a href="#popular-tab" class="popular">Popular</a></li>
	</ul>
	<div class="container">
		<div id="feature-tab" class="tab-content">
		<?php for($article=0; $article<2; $article++){?>
			<div class="content-part">
				<div class="profile">
					<div class="profile-photo">
						<img src="asset/image/profile1.png" class="img-responsive">
					</div>
					<div class="profile-name">
						<p class="name">Dr Jason Boty</p>
						<p class="date">3 Jam yang lalu</p>
					</div>
					<div class="profile-action">
						<a href="#" type="button" class="btn btn-green">MESSAGES</a>
						<a href="#" type="button" class="btn btn-gray">VIEW PROFILE</a>
					</div>
				</div>
				<div class="content-img">
					<img src="asset/image/a.png" class="img-responsive">
				</div>
				<div class="content-txt">
					<h3>Anti Wrinkle Treatsment</h3>
					<p>Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
				</div>
				<div class="consultant">
				<p><span class="icon-consult"></span>2 consultantion</p>
				</div>
			</div>
		<?php } ?>
		</div>
		<div id="popular-tab" class="tab-content">
		test
		</div>
	</div>
</div>
	<script type="text/javascript">
		 $(".cus-nav-tabs a").click(function(event) {
	        event.preventDefault();
	        $(this).parent().addClass("active");
	        $(this).parent().siblings().removeClass("active");
	        var tab = $(this).attr("href");
	        $(".tab-content").not(tab).css("display", "none");
	        $(tab).fadeIn();
	    });
	</script>
</body>
</html>