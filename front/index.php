<?php
include("../includes/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />	
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="js/modernizr.js"></script>
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".branch-gd").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".branch-gd").hasClass("hover")) {
                    $(this).closest(".branch-gd").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".branch-gd").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>
<?php include("includes/header.php") ?>
<!--banner  start hwew-->
<div class="banner">
	<div class="container">
		<div class="banner-main wow zoomIn" data-wow-delay="0.3s">
			<h2>MR HOTELS</h2>
			<h6>Welcome To Our Hotels</h6>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</div>
    </div>
	<div class = "container">
	<div class = "leaves-main wow zoomIn animated" align = "center">
	<a href = "#" class = "hvr-push"> Book Now </a>
	&nbsp; &nbsp; &nbsp; &nbsp;
	<a href = "#" class = "hvr-push"> Management Login </a>
	</div>
	</div>
</div>
<!--BANNER END HERE-->
<!--information start here-->
<div class="information">
	<div class="container">
		<div class="information-main">
			  <div class="information-grid five-star wow slideInLeft" data-wow-delay="0.3s">
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s1.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Star Hotel</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s2.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>services</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s4.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Secure</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="clearfix"> </div>
			  </div>
			  <div class="information-grid wow slideInRight" data-wow-delay="0.3s">
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s3.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Food</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s5.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Hotel</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s6.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Bell</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="clearfix"> </div>
			  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--information end here-->
<!--leaves start here-->
<div class="leaves">
	<div class="container">
		<div class="leaves-main wow zoomIn" data-wow-delay="0.3s">
			<h1>You Never Leave Us</h1>
			<h6>100% Friendly services</h6>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
		   <a href="single.html" class="hvr-push">Discover More</a>
		</div>
	</div>
</div>
<!--leaves end here-->
<!--branches start here-->
<div class="branches">
		<div class="branches-main wow zoomIn" data-wow-delay="0.3s">
			<div class="branches-top">
				<h3>Our Branches</h3>
			</div>
			<div  id="effect-5" class="branch-btm">
				<div  class="col-md-3 branch-gd-main" >					
					<div class="branch-gd  no-mar"> <a href="room.html">
						<img src="images/b6.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand lardge">+</span>
		                    <span class="close-overlay hidden">x</span>
	                   </div></a>
                    </div>                 
				</div>				
				<div class="col-md-3 branch-gd-main">
					<div class="branch-gd went-branc"><a href="room.html">
						<img src="images/b1.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                   </div></a>
					</div>
					<div class="branch-gd went-branc"><a href="room.html">
						<img src="images/b2.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                 </div></a>
					</div>
				</div>
				<div class="col-md-3 branch-gd-main">
					<div class="branch-gd"><a href="room.html">
						<img src="images/b3.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                 </div></a>
					</div>
					<div class="branch-gd"><a href="room.html">
						<img src="images/b4.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                 </div></a>
					</div>
				</div>
				<div class="col-md-3 branch-gd-main">
				  <div class="branch-gd went-branc2"><a href="room.html">
					<img src="images/b5.jpg" alt="" class="img-responsive">
					<div class="overlay">
		                    <span class="expand lardge">+</span>
		                    <span class="close-overlay hidden">x</span>
	                   </div></a>
                  </div>
				</div>
			</div>
		  <div class="clearfix"> </div>
		</div>
</div>
<!--branches end here-->
<div class="branch-text">
   <div class="container">
			<span class="quotations"> </span>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
<!--swiming-->
<div class="swimming">
	<div class="container">
		<div class="swimming-main wow zoomIn" data-wow-delay="0.3s">
			<div class="swimming-top">
				<h3>Welcome</h3>
			</div>
			<div class="swimmimg-bot">
				<div class="col-md-3 swimming-grid">
					<h4>758</h4>
					<span class="swim-icon-1"> </span>
					<h5>Lorem Ipsum</h5>
				</div>
				<div class="col-md-3 swimming-grid">
					<h4>4,790</h4>
					<span class="swim-icon-2"> </span>
					<h5>Lorem Ipsum</h5>
				</div>
				<div class="col-md-3 swimming-grid">
					<h4>7,920</h4>
					<span class="swim-icon-3"> </span>
					<h5>Lorem Ipsum</h5>
				</div>
				<div class="col-md-3 swimming-grid">
					<h4>190</h4>
					<span class="swim-icon-4"> </span>
					<h5>Lorem Ipsum</h5>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--swimmg emd here-->
<!--homegrids start here-->
<div class="home-block">
	<div class="container">
		<div class="home-main">
			<div class="home-top">
				<h3>Latest  News</h3>
			</div>
			<div class="home-bottom  wow bounceInLeft" data-wow-delay="0.3s">
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="images/b7.jpg" class="img-responsive" alt="">
						</div>
					</div>

				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="images/b8.jpg" class="img-responsive" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="images/b9.jpg" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--home grid end here-->
<?php include("includes/footer.php") ?>
</body>
</html>