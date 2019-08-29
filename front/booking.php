<?php $currentPage = 'Booking' ?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php"); ?>
</head>
<body>
<?php include("includes/header.php"); ?>
<!-- Booking Form -->
<div class="container">
<div class="about-top">
	<h1 style = "margin-top: 10px;"> Book a Room </h1>
</div>
<div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Check-In</label>
        <div class="col-sm-10">
        	<input type="date">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Check-Out</label>
        <div class="col-sm-10">
          <input type="date">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me </input>
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
</div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>