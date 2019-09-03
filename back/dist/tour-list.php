<?php $currentPage = 'Tour List';
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
        <h1> Tour List </h1>
        <div class = "form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a class="btn btn-success" href = "tour-bookings.php">View Tour Bookings</a>
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
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-nowrap">City Sightseeing</td>
                                <td>Experience the beautiful landscape of the city</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-nowrap">Historical</td>
                                <td>Take a hike across the foothills of Mount Tibidabo, and visit the great shrines and observatories from various prevalent cultures of the area</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-nowrap">Island Cruise</td>
                                <td>Join us on a cruise ship to explore the vast seas and tropical islands nearby</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-nowrap">Adventure</td>
                                <td>Try your hand at the different exciting adventure sports available around the area</td>
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