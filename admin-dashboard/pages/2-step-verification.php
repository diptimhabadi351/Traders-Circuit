<?php $currentPage = "verification" ?>
<?php include('../component/header.php'); ?>

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

        <div class="row">
            <div
                class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12 mb-3">

                                <h2>Verification email</h2>
                                <p>We have sent you a verification code on your email address</p>

                            </div>
                            <div class="col-sm-12 col-3 ms-auto">
                                <div class="mb-3">
                                <label class="form-label">Enter Code</label>
                                    <input type="text" class="form-control opt-input" maxlength="4">
                                </div>
                            </div>
                            

                            <div class="col-12">
                                <div class="mb-4">
                                    <button>
                                        <a href="index.php" class="download-btn w-100">Login</a>
                                    </button>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-center">
                                    <p class="mb-0">Didn't receive the code ? <a href="javascript:void(0);"
                                            class="text-warning">Resend</a></p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>  -->

    <div class="row w-100" style="height: 100vh;">
        <div class=" col-md-6 m-auto h-100 d-flex flex-column align-itms-center justify-content-center"
            style="background-color: #05244D;">
            <div class="d-flex justify-content-center">
                <img src="../src/assets/img/seasons_logo.png" width="150" height="150" alt="">
            </div>
        </div>
        <div class=" col-md-6 h-100 d-flex justify-content-center align-items-center login-background-img"
            style="background-image: url(../src/assets/img/login_screen_background.png);">
            <div class="row d-flex flex-column justify-content-center align-items-center m-auto"
                style="width: 60%; z-index: 999;">
                <h3 class="text-start font-weight-bold mb-2 text-white">VERIFICATION EMAIL</h3>
                <h5 class="text-white mb-3 text-center">We have sent you a verification code on your email address</h5>
                <div class="col-sm-12  bgWhite">
                    <form action="" class="">
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                    </form>
                </div>
                <div class="col-md-12 mb-2">
                    <div>
                        <button class="p-0"><a href="index.php" class="download-btn w-100">Login</a></button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <p class="mb-0 text-white">Didn't receive the code ? <a href="javascript:void(0);" class="text-warning">Resend</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../component/footer.php'; ?>