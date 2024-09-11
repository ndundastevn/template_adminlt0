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
                    Sign in to start your session
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" required name="user_password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters">
                        <div class="input-group-append">
                            <div class="input-group-text text-primary">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-12">
                            <button type="submit" name="Login" class="btn btn-primary btn-">
                                Sign in
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <p class="mb-1 text-center">
					Don't have account? <a href="create_account">Create one</a> Forgot password <a href="reset_password">reset</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <!-- Scripts-->
    <?php include('../partials/scripts.php'); ?>

</body>

</html>