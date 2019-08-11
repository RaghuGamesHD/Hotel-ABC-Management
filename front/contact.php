<?php $currentPage = 'Contact'; ?> 
<!DOCTYPE HTML>
<html>
<head>
<?php include ("includes/head.php") ?>
</head>
<body>
<!--header-top start here-->
<?php include ("includes/header.php") ?>
<!--header end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h2>Contact</h2>
			</div>
			<div class="contact-bottom">
				<div class="col-md-9 contact-left">
					<form>
						<input type="text" placeholder="Name">
						<input type="text" class="email" placeholder="Email">
						<textarea  placeholder="Message" required=""></textarea>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="col-md-3 contact-right">
					<h1>Address</h1>
					<p>Company Office</p>
					<p>voluptatem nesciunt.</p>
					<p>+880 5558 568 78541</p>
					<p><a href="mailto:info@example.com">user@gmail.com</a></p>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
  <div class="container">
	 <iframe src="https://www.google.com/maps/place/Singapore/@1.3139961,103.7041631,11z/data=!3m1!4b1!4m5!3m4!1s0x31da11238a8b9375:0x887869cf52abf5c4!8m2!3d1.352083!4d103.819836"  frameborder="0" style="border:0"> </iframe>
 </div>
</div>
<!--map end here-->
<!--footer start here-->
<?php include ("includes/footer.php") ?>
<!--footer end here-->
</body>
</html>