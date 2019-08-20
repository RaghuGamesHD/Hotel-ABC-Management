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
                            <?php 
                            foreach($result as $row) {
                                ?>
                                    <tr>
                                       <td><?php echo $row->Account; ?></td>
                                       <td><?php echo $row->Username; ?></td>
                                       <td><?php echo $row->Password; ?></td>
                                       <td><?php echo $row->Created; ?></td>
                                       <td><?php echo $row->Strength; ?></td>
                                    </tr>
                                <?php
                            }
                            ?>
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
