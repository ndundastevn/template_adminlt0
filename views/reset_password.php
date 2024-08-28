<?php
session_start();
require_once('../config/config.php');
require_once('../config/app_config.php');
require_once('../config/codeGen.php');
require_once('../helpers/auth.php');
require_once('../partials/head.php');
?>

<body class="hold-transition login-page" style="background-image: url('https://eregister.makueni.go.ke/public/img/bg.jpg'); background-size: cover;">
    <div class="login-box">
        <?php include('../partials/auth_header.php'); ?>
        <div class="card card-outline card-primary">
            <div class="card-body login-card-body">
                <p class="login-box-msg text-dark">
                    Enter your email to reset your password
                </p>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" required name="user_email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text text-primary">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-12">
                            <button type="submit" name="Reset_Password_Step_1" class="btn btn-primary btn-">
                                Reset Password
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <p class="mb-1 text-center">
                    <a href="../">I remember my password</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <!-- Scripts-->
    <?php include('../partials/scripts.php'); ?>

</body>

</html>