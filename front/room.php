<?php $currentPage = 'Room'; ?> 
<!DOCTYPE HTML>
<html>
<head>
<?php include ("includes/head.php") ?>
</head>
<body>
<!--header-top start here-->
<?php include ("includes/header.php") ?>
<!--header end here-->
<!--room start here-->
<div class="rooms">
	<div class="container">
		<div class="rooms-main">
			 <div class="room-head">
			 	<h3>Luxury Rooms</h3>
			 </div>
			 <div class="rooms-top">
			    <div class="rooms-left wow slideInLeft" data-wow-delay="0.3s">
				 	<div class="col-md-4 rooms-text">
				 		<h2><a href="single.html">Sed perspiciatis</a></h2>
				 		<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
				 	    <div class="room-btn">
				 	      <a href="single.html" class="hvr-push">Read More</a>	
				 	    </div>		 	    
				 	</div>
				 	<div class="col-md-8 rooms-img">
				 		<div class="luxury-block">
				 		 <a href="single.html"> <img src="images/r1.jpg" alt="" class="img-responsive"></a>		
						</div>
				 	</div>				 
				  <div class="clearfix"> </div>
			    </div>
			     <div class="rooms-left1 wow slideInRight" data-wow-delay="0.3s">
				 	<div class="col-md-8 rooms-img ulta-img">
				 	 <a href="single.html"> <img src="images/r2.jpg" alt="" class="img-responsive"></a>
				 	</div>
				 	<div class="col-md-4 rooms-text ulta-text">
				 		<h3><a href="single.html">Vero accusamus</a></h3>
				 		<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
				 	    <div class="room-btn">
				 	      <a href="single.html" class="hvr-push">Read More</a>	
				 	    </div>	
				 	</div>
				  <div class="clearfix"> </div>
			    </div>
			 </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--gallery start here-->
<div class="gallery" id="gallery">
	<div class="container">
	  <div class="gallery-main wow zoomIn" data-wow-delay="0.3s">
	  	<div class="gallery-top">
	  		<h1>Other Rooms</h1>
	  	</div>
		<div class="gallery-bott">
			<div class="col-md-4 col1 gallery-grid">
				<a href="images/r3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure class="effect-bubba">
							<img class="img-responsive" src="images/r3.jpg" alt="">
							<figcaption>
								<h4 class="gal"> Nemo voluptatem</h4>
								<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
							</figcaption>			
						</figure>
					</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/r4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/r4.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
							</figcaption>			
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/r5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/r5.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
							</figcaption>			
						</figure>
						</a>
					</div>
			     <div class="col-md-4 col1 gallery-grid">
				  <a href="images/r6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/r6.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
							</figcaption>			
						</figure>
					</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/r7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/r7.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
							</figcaption>			
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/r8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/r8.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
							</figcaption>			
						</figure>
						</a>
					</div>
			     <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--gallery end here-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>

<!--room end here-->
<!--footer start here-->
<?php include ("includes/footer.php") ?>
<!--footer end here-->
</body>
</html>