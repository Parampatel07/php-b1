<?php
require_once("include/css.php");
?>
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <div class="card-body">
                                    <div class="p-5">
                                        <div class="text-start">
                                            <img src="assets/images/logo-img.png" width="180" alt="">
                                        </div>
                                        <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                        <p class="text-muted">We received your reset password request. Please enter your new password!</p>
                                        <div class="mb-3 mt-5">
                                            <label class="form-label">Old Password</label>
                                            <input type="text" name="oldpassword" class="form-control" placeholder="Enter Old password" />
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label">New Password</label>
                                            <input type="text" name="newpassword" class="form-control" placeholder="Enter new password" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="text" name="conpassword" class="form-control" placeholder="Confirm password" />
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary">Change Password</button> <a href="admin_login.php" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="images/forgot_password.jpg" class="card-img login-img h-100" alt="image not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    <?php
    require_once("include/script.php");
    ?>
</body>
</html>