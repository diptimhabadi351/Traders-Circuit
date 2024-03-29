<?php $currentPage = "reset-password" ?>
<?php include('../component/header.php'); ?>
<!-- <//?php include('../component/sidebar.php'); ?> -->

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<div class="auth-container d-flex signup">
    <!--<div class="container mx-auto align-self-center row">
        <div class="card col-md-6 m-auto">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2>Reset Password</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <button><a href="signup.php" class="download-btn w-100">Reset</a></button>
                        </div>
                    </div>
            </div>
        </div>
    </div> -->

     <div class="row w-100" style="height: 100vh;">
        <div class=" col-md-6 m-auto h-100 d-flex flex-column align-itms-center justify-content-center"
            style="background-color: #9A0000;">
            <div class="d-flex justify-content-center">
                <img src="../src/assets/img/tc-logo.png" width="450" height="80" alt="">
            </div>
        </div>
        <div class=" col-md-6 h-100 d-flex justify-content-center align-items-center login-background-img"
            style="background-image: url(../src/assets/img/tc-signup.png);">
            <div class="row d-flex flex-column justify-content-center align-items-center m-auto"
                style="width: 60%; z-index: 999;">
                <h3 class="text-start font-weight-bold mb-3 text-white">RESET PASSWORD</h3>
                
                <div class="col-md-12">
                    <div class="mb-3 input-parent">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3 input-parent">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <button class="p-0"><a href="signup.php"
                                class="download-btn w-100">Login</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../component/footer.php'; ?>