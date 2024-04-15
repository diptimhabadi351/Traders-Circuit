<?php $currentPage = "forgot-password" ?>
<?php include('../../component/header.php') ?>
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
                <h3 class="text-center font-weight-bold mb-5 " style="color: #000;">FORGOT PASSWORD</h3>

                <div class="col-md-12">
                    <div class="mb-3 input-parent">
                        <label for="name" class="">Enter Email address</label>
                        <input type="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="w-100">
                        <button class="p-0 mt-2"><a href="../pages/login/otp.php" class="download-btn w-100">Reset Password</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../../component/footer.php') ?>