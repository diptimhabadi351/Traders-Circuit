<?php $currentPage = 'login'; ?>
<?php include '../component/header.php'; ?>
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
    <!-- <div class="container mx-auto align-self-center">
        <div class="card">
            <div class="card-body row">
                <div class=" col-md-6 m-auto">
                    <h1 class="text-center font-weight-bold">Cheers to the Season</h1>
                    <h4 class="text-center font-weight-bold">Login to your account </h4>
                </div>
                <div class=" col-md-6 m-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 chekbx">
                                <div class="form-check form-check-primary form-check-inline">
                                    <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                    <label class="form-check-label" for="form-check-default">
                                        Keep me signed in
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 fgtps">
                                <a href="forgot-password.php">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <button><a href="2-step-verification.php" class="download-btn w-100">Login</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row w-100" style="height: 100vh;">
        <div class=" col-md-6 m-auto h-100 d-flex flex-column align-itms-center justify-content-center" style="background-color: #9A0000;">
            <div class="d-flex justify-content-center">
                <img src="../src/assets/img/tc-logo.png" width="450" height="80" alt="">
            </div>
        </div>
        <div class=" col-md-6 h-100 d-flex justify-content-center align-items-center login-background-img" style="background-image: url(../src/assets/img/tc-signup.png);">
            <div class="row d-flex flex-column justify-content-center align-items-center m-auto" style="width: 60%; z-index: 999;">
                <h3 class="text-start font-weight-bold mb-3 text-white">WELCOME BACK</h3>
                <div class="col-md-12">
                    <div class="mb-3 input-parent">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control" placeholder="Email address">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3 input-parent">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <a class="text-white" href="forgot-password.php">Forgot Password?</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <button class="p-0"><a href="index.php" class="download-btn w-100">Login</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../component/footer.php'; ?>