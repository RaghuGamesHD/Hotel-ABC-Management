<?php $currentPage = 'Rooms'; 
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
            <div class="card">
                <div class="card-header bg-light">
                    Hoverable Table
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Discount</th>
                            </tr>
                            </thead>
                            <tbody>
                                <!-- for rooms in rooms, repeat -->
                            <tr href="">
                                <td>1</td>
                                <td class="text-nowrap">Samsung Galaxy S8</td>
                                <td>31,589</td>
                                <td>$800</td>
                                <td>5%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            Copyright © 2019 Hotel ABC All rights reserved.
        </div>
    </div>
</div>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/demo.js"></script>
</body>
</html>
