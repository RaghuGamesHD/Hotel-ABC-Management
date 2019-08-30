<?php $currentPage = 'Booking'; ?>
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
	<h1 style = "margin-top: 10px; margin-bottom: -1em;"> Book a Room </h1>
</div>
<div class="bs-example" data-example-id="simple-horizontal-form">
  	<div class = "alert alert-success" id = "alert-success" role = "alert"> Your room is available. Please proceed to enter the details below. </div>
  	<div class = "alert alert-danger" id = "alert-danger" role = "alert"> Your room is not available for the selected dates. Please choose another date or option. </div>
    <form class="form-horizontal">
      <div class="form-group">
        <label for="checkinDate" class="col-sm-2 control-label">Check-In</label>
        <div class="col-sm-10">
        	<input type="date" name = "checkinDate" class = "checkinDate" min="2019-08-29" required>
        </div>
      </div>
      <div class="form-group">
        <label for="checkoutDate" class="col-sm-2 control-label">Check-Out</label>
        <div class="col-sm-10">
          <input type="date" name = "checkoutDate" class = "checkoutDate" min="2019-08-29" required>
        </div>
      </div>
      <div class="form-group">
        <label for="roomType" class="col-sm-2 control-label">Room Type</label>
        <div class="col-sm-10">
          <select name = "roomType">
          	<option value = ""></option>
          	<option value = "Single">Single</option>
          	<option value = "Standard">Standard</option>
          	<option value = "Deluxe">Deluxe</option>
          	<option value = "Superior">Superior</option>
          	<option value = "Suite">Suite</option>
          	<option value = "Villa">Villa</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type = "button" class="btn btn-default" onclick = "checkAvailability('checkinDate', 'checkoutDate')">Check Availability</button>
        </div>
      </div>
  	<div class = "alert alert-success" id = "alert-success" role = "alert"> Your booking is successful. Please check your e-mail for the confirmation details. </div>
		<div class="form-group">
        <label for="bookingName" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
        	<input type="text" name = "bookingName" class = "bookingName" required>
        </div>
      	</div>
      	<div class="form-group">
        <label for="bookingEmail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
        	<input type="email" name = "bookingEmail" class = "bookingEmail" required>
        </div>
      	</div>
      	<div class="form-group">
        <label for="bookingNoGuests" class="col-sm-2 control-label">Number of Guests</label>
        <div class="col-sm-10">
        	<input type="text" name = "bookingNoGuests" class = "bookingNoGuests" required>
        </div>
      	</div>
      	<div class="form-group">
        <label for="bookingTransport" class="col-sm-2 control-label">Do you require any transport?</label>
        <div class="col-sm-10">
        	<input type="radio" name = "bookingTransportYes" class = "bookingTransportNo" required> Yes, please! 
        	<input type="radio" name = "bookingTransportYes" class = "bookingTransportNo" required> No, thank you. 
        </div>
      	</div>
      	<div class="form-group">
        <label for="bookingPickupTime" class="col-sm-2 control-label">Pick-up Time</label>
        <div class="col-sm-10">
        	<input type="datetime-local" name = "bookingPickupTime" class = "bookingPickupTime" required>
        </div>
      	</div>
      	<div class="form-group">
        <label for="bookingFlightNo" class="col-sm-2 control-label">Flight Number</label>
        <div class="col-sm-10">
        	<input type="text" name = "bookingFlightNo" class = "bookingFlightNo" required>
        </div>
      	</div>
      	<div class="form-group">
        <label for="bookingSpecial" class="col-sm-2 control-label">Special Requests</label>
        <div class="col-sm-10">
        	<input type="text" name = "bookingSpecial" class = "bookingSpecial" required>
        </div>
      	</div>
      	<div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type = "button" class="btn btn-default">Confirm Booking</button>
        </div>
      </div>
	</form>
</div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>