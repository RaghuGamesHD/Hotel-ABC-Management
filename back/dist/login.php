<?php $currentPage = 'Login';
include("../../includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/User.php");
include("includes/classes/Constants.php");

$account = new Account($con); // creating an instance of the Account class and passing connection variable to it

include("includes/handlers/login-handler.php");

if(isset($_SESSION['UserLoggedIn'])) {
    header("Location: index.php");
}

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
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Login
                    </div>
                    <form id = "loginForm" action = "login.php" method = "POST">
                    <div class="card-body py-5">
                        <div class="form-group">
                            <label class="form-control-label">Username</label>
                            <input type="text" name = "loginUsername" id = "loginUsername" class="form-control" value = "<?php getInputValue('loginUsername') ?>" required>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input type="password" name = "loginPassword" id = "loginPassword" class="form-control" required>
                        </div>

                        <p> <?php echo $account->getError(Constants::$LoginFailed); ?> </p>

                        <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" class="custom-control-input" id="login">
                            <label class="custom-control-label" for="login">Remember me</label>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" name = "loginButton" class="btn btn-primary px-5">Login</button>
                            </div>
                        </div>
                    </div>
                </form>

                            <div class="col-6">
                                <a href="#" class="btn btn-link">Forgot password?</a>
                            </div>
                        </div>
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
