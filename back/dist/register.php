<?php $currentPage = 'Register'; 
include("../../includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con); // creating an instance of the Account class and passing connection variable to it

include("includes/handlers/register-handler.php");

function getInputValue ($name) {
    if (isset($_POST[$name]) == true) {
        echo $_POST[$name];
    }
}

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
                        Register New User
                    </div>

                    <form id = "registerForm" action = "register.php" method = "POST">
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input type="text" name = "registerName" id = "registerName" class="form-control" value = "<?php getInputValue('registerName') ?>" required> 
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Username</label>
                            <input type="text" name = "registerUsername" id = "registerUsername" class="form-control" value = "<?php getInputValue('registerUsername') ?>" required>
                            <?php echo $account->getError(Constants::$BadUsernameLength); ?>
                            <?php echo $account->getError(Constants::$UsernameTaken); ?>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" name = "registerEmail" id = "registerEmail" class="form-control" value = "<?php getInputValue('registerEmail') ?>" required>
                            <?php echo $account->getError(Constants::$InvalidEmail); ?>
                            <?php echo $account->getError(Constants::$EmailTaken); ?> 
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input type="password" name = "registerPassword" id = "registerPassword" class="form-control" required>
                            <?php echo $account->getError(Constants::$InvalidPassword); ?>
                            <?php echo $account->getError(Constants::$BadPasswordLength); ?> 
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Confirm Password</label>
                            <input type="password" name = "registerConfirmPassword" id = "registerConfirmPassword" class="form-control"  required>
                            <?php echo $account->getError(Constants::$PasswordsNotMatching); ?> 
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">User Role</label>
                            <select name = "registerRole" id = "registerRole" class="form-control" value = "<?php getInputValue('registerRole') ?>" required>
                                <option value = "1"> Admin </option>
                                <option value = "2"> Staff </option>
                            </select>
                        </div>
                        <button type="submit" name = "registerButton" class="btn btn-success btn-block">Create Account</button>
                    </form>
                    <div>
             
                    </div>
                </div>
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

<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carbon - Admin Template</title>
    <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Register
                    </div>

                    <div class="card-body py-5">
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input type="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input type="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-block">Create Account</button>
                    </div>
                </div>
            </div>
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
-->