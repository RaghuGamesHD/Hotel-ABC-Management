<?php
function activeClass($page) {
	global $currentPage;
	if($currentPage == $page){
		echo 'class="active"';
	}
}
?>
<!--header-top start here-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-social wow bounceInLeft" data-wow-delay="0.3s">
			    <ul>
			    	<li><h5>Follow Us :</h5></li>
			    	<li><a href="https://www.facebook.com/"><span class="fb"> </span></a></li>
			    	<li><a href="https://www.twitter.com/"><span class="tw"> </span></a></li>
			    	<li><a href="https://www.linkedin.com/"><span class="in"> </span></a></li>
			    	<li><a href="https://www.gmail.com/"><span class="gmail"> </span></a></li>
			    </ul>
			</div>
			<div class="col-md-8 header-address wow bounceInRight" data-wow-delay="0.3s">
				<ul>
					<li><span class="phone"> </span> <h6>(220) 280-31589</h6></li>
					<li><span class="email"> </span><h6><a href="mailto:info@example.com">Youremail@gmail.com</a></h6></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-top end here-->
<!--header start here-->
	<!-- NAVBAR
		================================================== -->
<div class="header">
	<div class="fixed-header">	

		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar navbar-inverse navbar-static-top">
		             <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			              <div class="logo wow slideInLeft" data-wow-delay="0.3s">
			                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" /></a>
			              </div>
			          </div>
		            <div id="navbar" class="navbar-collapse collapse">
		            <nav class="cl-effect-16" id="cl-effect-16">
		              <ul class="nav navbar-nav">
		               <li><a <?php activeClass('Home') ?> href="index.php" data-hover="Home">Home</a></li>
		                <li><a <?php activeClass('About') ?> href="about.php" data-hover="About">About</a></li>
						<li><a <?php activeClass('Services') ?>href="services.php" data-hover="Services">Services</a></li>
						<li><a <?php activeClass('Room') ?>href="room.php" data-hover="Rooms">Rooms</a></li>
						<li><a href="shortcodes.html" data-hover="Shortcodes">Shortcodes</a></li>
						<li><a <?php activeClass('Login') ?>href="../back/dist/login.php" data-hover="Login">Login</a></li>
						<li><a <?php activeClass('Contact') ?>href="contact.php" data-hover="Contact">Contact</a></li>						
		              </ul>
		            </nav>

		            </div>
		            <div class="clearfix"> </div>
		             </nav>
		          </div>
		           <div class="clearfix"> </div>
		    </div>
	 </div>
</div>
<!--header end here-->