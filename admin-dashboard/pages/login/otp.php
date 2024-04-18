<?php $currentPage = 'forgot-password'; ?>
<?php include '../../component/header.php'; ?>
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
    <div class="row w-100" style="height: 100vh;">
        <div class=" col-md-6 m-auto h-100 d-flex flex-column align-itms-center justify-content-center" style="background-color: #9A0000;">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="" style="color: #fff; margin-bottom:200px; font-size:50px;">Traders Circuit</h1>
                <!-- <img src="../src/assets/images/tc-logo.png" width="400" height="50" alt=""> -->
            </div>
        </div>
        <div class=" col-md-6 h-100 d-flex justify-content-center align-items-center login-background-img">
            <div class="row d-flex flex-column justify-content-center align-items-center m-auto" style="width: 60%; z-index: 999;">

                <h3 class="text-center font-weight-bold mb-5 " style="color: #000;">VERIFICATION</h3>
                <p class="text-center">A OTP Is sent to the email address associated with your account.</p>
                <h5 class=" mb-4">Enter OTP</h5>
                <div class="col-sm-12  bgWhite">
                    <form action="" class="">
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                    </form>
                </div>
                <p class="d-flex justify-content-end w-100"><a href="" class="otp-anc">Resend OTP</a></p>
                <div class="w-100">
                    <button class="p-0 mt-2"><a href="../pages/login/reset-password.php" class="download-btn w-100">Verify</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../component/footer.php'; ?>