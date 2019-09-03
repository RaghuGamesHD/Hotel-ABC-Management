<?php $currentPage = 'Tour Bookings';
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
        <h1> Tour Bookings </h1>
        <div class = "form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a class="btn btn-success" href = "tour-booking-create.php">Create Booking</a>
        </div>
    </div>
    <div class="col-md-12">
            <div class="card">  
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vehicle</th>
                                <th>Driver</th>
                                <th>Reservation</th>
                                <th>Tour</th>
                                <th>Date</th>
                                <th>Notes</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-nowrap">Car</td>
                                <td>New tester</td>
                                <td>Jon Smith</td>
                                <td>City Sightseeing</td>
                                <td>2019-09-12 10:00:00</td>
                                <td>The city tour</td>
                                <td>Scheduled</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-nowrap">Bus</td>
                                <td>Marquee james</td>
                                <td>Ross Geller</td>
                                <td>Historical</td>
                                <td>2019-09-23 09:30:00</td>
                                <td>The historical trek</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-nowrap">Car</td>
                                <td>Lalala</td>
                                <td>Magdalena Roberts</td>
                                <td>Adventure</td>
                                <td>2019-09-15 09:00:00</td>
                                <td>The adventure program</td>
                                <td>Cancelled</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>