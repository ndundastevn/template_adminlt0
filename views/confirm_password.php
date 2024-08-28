<?php
session_start();
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../partials/head.php');
?>

<body class="hold-transition login-page" style="background-image: url('https://eregister.makueni.go.ke/public/img/bg.jpg'); background-size: cover;">
    <div class="login-box">
        <?php include('../partials/auth_header.php'); ?>
        <div class="card card-outline card-primary">
            <div class="card-body login-card-body">
                <p class="login-box-msg text-dark">
                    Enter your new password and confirm it
                </p>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" required name="new_password" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters">
                        <div class="input-group-append">
                            <div class="input-group-text text-primary">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" required name="confirm_password" placeholder="Confirm New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters">
                        <div class="input-group-append">
                            <div class="input-group-text text-primary">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-12">
                            <button type="submit" name="Reset_Password_Step_2" class="btn btn-primary btn-">
                                Confirm Password
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <!-- Scripts-->
    <?php include('../partials/scripts.php'); ?>

</body>

</html>