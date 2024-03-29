<?php $currentPage = "forgot-password" ?>
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
    <!-- <div class="container mx-auto align-self-center row">
        <div class="card col-md-6 m-auto">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2>Forgot Password</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <button><a href="otp.php" class="download-btn w-100">Submit</a></button>
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
                <h4 class="text-start font-weight-bold mb-3 text-white">FORGOT PASSWORD</h4>
                <div class="col-md-12">
                    <div class="mb-3 input-parent">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control" placeholder="Email address">
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <button><a href="otp.php" class="download-btn w-100">Submit</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../component/footer.php'; ?>