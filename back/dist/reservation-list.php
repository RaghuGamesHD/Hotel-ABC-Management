<?php $currentPage = 'Reservation List';
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
        <h1> Bookings List </h1>
        <div class = "form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a class="btn btn-success" href = "reservation-create.php">Create / Update Reservation</a>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Room Type</th>
                                <th>Guest Count</th>
                                <th>Arrival</th>
                                <th>Departure</th>
                                <th>Transport</th>
                                <th>Notes</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-nowrap">Jon Smith</td>
                                <td>smith_jon241@gmail.com</td>
                                <td>Deluxe</td>
                                <td>2</td>
                                <td>2019-09-10 10:30:00</td>
                                <td>2019-09-16</td>
                                <td>Car</td>
                                <td>AS1192 - Champagne and red roses</td>
                                <td>Scheduled</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-nowrap">Magdalena Roberts</td>
                                <td>mag@extended.com</td>
                                <td>Standard</td>
                                <td>1</td>
                                <td>2019-09-14 11:30:00</td>
                                <td>2019-09-19</td>
                                <td>Car</td>
                                <td>AS2212</td>
                                <td>Cancelled</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-nowrap">James Mascow</td>
                                <td>mascow@mascow.com</td>
                                <td>Suite</td>
                                <td>8</td>
                                <td>2019-09-13 11:00:00</td>
                                <td>2019-09-19</td>
                                <td>Van</td>
                                <td>AS4401</td>
                                <td>Scheduled</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-nowrap">Ross Geller</td>
                                <td>dinosaurman@gmail.com</td>
                                <td>Villa</td>
                                <td>10</td>
                                <td>2019-09-20 12:30:00</td>
                                <td>2019-09-25</td>
                                <td>Bus</td>
                                <td>NY1150</td>
                                <td>Checked-in</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-nowrap">Michael Jackson</td>
                                <td>kingofpop@michaeljackson.com</td>
                                <td>Villa</td>
                                <td>4</td>
                                <td>2019-09-14 10:00:00</td>
                                <td>2019-09-26</td>
                                <td>None</td>
                                <td>AS1192 - Personalised room MJ style</td>
                                <td>Checked-in</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    	</div>
    </div>
</div>
</body>
</html>