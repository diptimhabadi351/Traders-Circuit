<?php $currentPage = "manage-caregiver" ?>
<?php include('../component/header.php'); ?>
<?php include('../component/sidebar.php'); ?>
<?php include('../component/common-modal.php'); ?>

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                        <div class="row">
                            <div class="col-md-4 left">
                                <h6 class="card-title">Caregiver Details</h6>
                            </div>
                            <div class="col-md-8 float-right">
                                <a class="extra-btn" href="manage-caregiver.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="view-details">
                                <div class="simple-tab">
                                    <div class="row">
                                        <div class="col-md-12 mb-10 tabs23">
                                            <table>
                                                <h4 class="tab-title">Personal information</h4>
                                                <tr class="title">
                                                    <td>Name :</td>
                                                    <td>Address :</td>
                                                    <td>Contact :</td>
                                                    <td>Email address :</td>
                                                    <td>Password :</td>
                                                    <td>Subscription plan:</td>
                                                    <td>Plan validity :</td>
                                                </tr>
                                                <tr>
                                                    <td>Kartikey Gautam</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</td>
                                                    <td>+325684591</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Monthly</td>
                                                    <td>23-02-2023</td>
                                                    <td><a class="download-btn rwesty" href="">Download Invoice <img
                                                                src="../src/assets/img/download.svg" /></a></td>
                                                </tr>

                                            </table>

                                        </div>

                                        <div class="col-md-12 mb-10">
                                            <table>
                                                <h4 class="tab-title">Availability</h4>
                                                <tr class="title">
                                                    <td>Availability for work hours :</td>
                                                    <td>Availability for weekends and holidays :</td>
                                                    <td>Ability to work overnight :</td>
                                                </tr>
                                                <tr>
                                                    <td>Yes</td>
                                                    <td>Yes</td>
                                                    <td>Yes</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-md-12 mb-10">
                                            <table>
                                                <h4 class="tab-title">User Account:</h4>
                                                <tr class="title">
                                                    <td>Login credentials :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Email address - kartikeygautam@gmail.com</td>
                                                    <td>Password - 45489645</td>
                                                    <td><a class="download-btn rwesty" href="" data-toggle="modal"
                                                            data-target="#reset-modal">Reset Password
                                                        </a></td>

                                                </tr>

                                            </table>

                                        </div>
                                        <div class="col-md-12 mb-10">
                                            <table>
                                                <h4 class="tab-title">Patient Assignment :</h4>
                                                <tr>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../component/footer.php'; ?>