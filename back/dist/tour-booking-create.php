<?php $currentPage = 'Create / Update Tour Booking';
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
                        Create Tour Booking
                    </div>
                    <div class = "alert alert-success" id = "alert-success" role = "alert"> The tour booking was created successfully. </div>
                    <div class = "alert alert-danger" id = "alert-danger" role = "alert"> The tour booking could not be created due to an error. </div>
                    <form>
                    <div class="form-group">
        <label for="vehicleType" class="col-sm-2 control-label">Vehicle</label>
            <div class="col-sm-10">
          <select name = "vehicleType" class = "form-control">
            <option value = ""></option>
            <option value = "Car">Car</option>
            <option value = "Bus">Bus</option>
            <option value = "Van">Van</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="driverID" class="col-sm-2 control-label">Driver ID</label>
        <div class="col-sm-10">
          <input type="text" name = "driverID" class = "driverID form-control" required>
        </div>
      </div>
        <div class="form-group">
        <label for="reservationID" class="col-sm-2 control-label">Reservation ID</label>
        <div class="col-sm-10">
            <input type="text" name = "reservationID" class = "reservationID form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="tourID" class="col-sm-2 control-label">Tour ID</label>
        <div class="col-sm-10">
            <input type="email" name = "tourID" class = "tourID form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="tourDate" class="col-sm-2 control-label">Tour Date</label>
        <div class="col-sm-10">
            <input type="datetime-local" name = "tourDate" class = "tourDate form-control" required>
        </div>
        </div>
        <div class="form-group">
        <label for="tourNotes" class="col-sm-2 control-label">Tour Notes</label>
        <div class="col-sm-10">
            <input type="text" name = "tourNotes" class = "tourNotes form-control" required>
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
                        Update Tour Booking
                    </div>
                    <div class = "alert alert-success" id = "alert-success" role = "alert"> The tour booking was updated successfully. </div>
                    <form>
                        <div class="form-group">
                        <label for="tourBookingID" class="col-sm-2 control-label">Tour Booking ID</label>
                        <div class="col-sm-10">
                            <input type="text" name = "tourBookingID" class = "tourBookingID form-control" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="tourBookingStatus" class="col-sm-2 control-label">Tour Booking Status</label>
                        <div class="col-sm-10">
                          <select name = "tourBookingStatus" class = "form-control">
                            <option value = "Scheduled">Scheduled</option>
                            <option value = "Completed">Completed</option>
                            <option value = "Cancelled">Cancelled</option>
                          </select>
                        </div>
                    </div>
                          <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type = "button" class="btn btn-default btn-block">Update Tour Booking</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>
