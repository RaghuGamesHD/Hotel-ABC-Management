<?php $currentPage = 'Create / Update Reservation';
include("includes/IncludedFiles.php");
?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("includes/head.php") ?>
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    <?php include ("includes/header.php") ?>

    <div class="main-container">
        <?php include ("includes/sidebar.php") ?>
        <div class="content">
    	<div class="card p-4">
                <div class="text-center text-uppercase h4 font-weight-light">
                        Create Reservation
                    </div>
                    <div class = "alert alert-success" id = "alert-success" role = "alert"> The reservation was created successfully. </div>
                    <div class = "alert alert-danger" id = "alert-danger" role = "alert"> The reservation could not be created due to an error. </div>
                    <form>
                    <div class="form-group">
        <label for="checkinDate" class="col-sm-2 control-label">Check-In</label>
        <div class="col-sm-10">
            <input type="date" name = "checkinDate" class = "checkinDate form-control" min="2019-08-29" required>
        </div>
      </div>
      <div class="form-group">
        <label for="checkoutDate" class="col-sm-2 control-label">Check-Out</label>
        <div class="col-sm-10">
          <input type="date" name = "checkoutDate" class = "checkoutDate form-control" min="2019-08-29" required>
        </div>
      </div>
      <div class="form-group">
        <label for="roomType" class="col-sm-2 control-label">Room Type</label>
        <div class="col-sm-10">
          <select name = "roomType" class = "form-control">
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
          <button type = "button" class="btn btn-default btn-block" onclick = "checkAvailability('checkinDate', 'checkoutDate')">Check Availability</button>
        </div>
      </div>
    <div class = "alert alert-success" id = "alert-success" role = "alert"> Your booking is successful. Please check your e-mail for the confirmation details. </div>
        <div class="form-group">
        <label for="bookingName" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name = "bookingName" class = "bookingName form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="bookingEmail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name = "bookingEmail" class = "bookingEmail form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="bookingNoGuests" class="col-sm-2 control-label">Number of Guests</label>
        <div class="col-sm-10">
            <input type="text" name = "bookingNoGuests" class = "bookingNoGuests form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="bookingTransport" class="col-sm-2 control-label">Do you require any transport?</label>
        <div class="col-sm-10">
            <input type="radio" name = "bookingTransportYes" class = "bookingTransportNo" required> Yes, please! 
            &nbsp;
            <input type="radio" name = "bookingTransportYes" class = "bookingTransportNo" required> No, thank you. 
        </div>
        </div>
        <div class="form-group">
        <label for="bookingPickupTime" class="col-sm-2 control-label">Pick-up Time</label>
        <div class="col-sm-10">
            <input type="datetime-local" name = "bookingPickupTime" class = "bookingPickupTime form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="bookingFlightNo" class="col-sm-2 control-label">Flight Number</label>
        <div class="col-sm-10">
            <input type="text" name = "bookingFlightNo" class = "bookingFlightNo form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="bookingSpecial" class="col-sm-2 control-label">Special Requests</label>
        <div class="col-sm-10">
            <input type="text" name = "bookingSpecial" class = "bookingSpecial form-control" required>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type = "button" class="btn btn-default btn-block">Confirm Booking</button>
        </div>
      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class = "content">
    <div class="card p-4">
                <div class="text-center text-uppercase h4 font-weight-light">
                        Update Reservation
                    </div>
                    <div class = "alert alert-success" id = "alert-success" role = "alert"> The reservation was updated successfully. </div>
                    <form>
                        <div class="form-group">
                        <label for="reservationID" class="col-sm-2 control-label">Reservation ID</label>
                        <div class="col-sm-10">
                            <input type="text" name = "reservationID" class = "reservationID form-control" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="reservationStatus" class="col-sm-2 control-label">Reservation Status</label>
                        <div class="col-sm-10">
                          <select name = "reservationStatus" class = "form-control">
                            <option value = "Scheduled">Scheduled</option>
                            <option value = "Checked-in">Checked-in</option>
                            <option value = "Checked-out">Checked-out</option>
                            <option value = "Cancelled">Cancelled</option>
                          </select>
                        </div>
                    </div>
                          <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type = "button" class="btn btn-default btn-block">Update Reservation</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>
