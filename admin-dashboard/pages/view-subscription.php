<?php $currentPage = "manage-subscription" ?>
<?php include('../component/header.php'); ?>
<?php include('../component/sidebar.php'); ?>


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
                                <h6 class="card-title">Subscription details</h6>
                            </div>
                            <div class="col-md-8 float-right">
                                <a class="extra-btn" href="manage-subscription.php">
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
                                                    <td>Agency Name :</td>
                                                    <td>Email address :</td>
                                                    <td>Phone Number :</td>
                                                </tr>
                                                <tr>
                                                    <td>Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>+325684591</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-md-12 mb-10">
                                            <table>
                                                <h4 class="tab-title">Subscription Details</h4>
                                                <tr class="title">
                                                    <td>Status :</td>
                                                    <td>Plan Name :</td>
                                                    <td class="h-40">Benefits :</td>
                                                    <td>Payment done :</td>
                                                    <td>Plan pricing :</td>
                                                    <td>Plan Validity :</td>
                                                </tr>
                                                <tr>
                                                    <td>Active</td>
                                                    <td>Annual subscription plan</td>
                                                    <td class="h-40">
                                                        <ul>
                                                            <li>1. Can add up to 10 patients</li>
                                                            <li>2. Real time patient tracking</li>
                                                            <li>3. Real-time alerts &  notifications</li>
                                                            <li>4. Restrict critical apps</li>
                                                        </ul>
                                                    </td>
                                                    <td>Monthly</td>
                                                    <td>$2.99/mo</td>
                                                    <td>Valid till 23-02-2024</td>
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
        <!--  BEGIN FOOTER  -->

        <!--  END FOOTER  -->
    </div>
</div>
<!-- END MAIN CONTAINER -->

<?php include '../component/footer.php'; ?>