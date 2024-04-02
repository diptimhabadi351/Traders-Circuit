<?php $currentPage = "manage-transcation" ?>
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
                                <h6 class="card-title">Transaction details</h6>
                            </div>
                            <div class="col-md-8 float-right">
                                <a class="extra-btn" href="manage-transcation.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    Back
                                </a>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="view-details">
                                <table>
                                    <tr class="title">
                                        <td>Name :</td>
                                        <td>Email address :</td>
                                        <td>Contact number :</td>
                                        <td>Subscription plan :</td>
                                        <td>Transaction id :</td>
                                        <td>Mode of payment :</td>
                                        <td>Payment date :</td>
                                        <td>Payment price :</td>
                                    </tr>
                                    <tr>
                                        <td>Raj shinde</td>
                                        <td>rajshinde@gmail.com</td>
                                        <td>+2564585487</td>
                                        <td>Monthly</td>
                                        <td>12456aa</td>
                                        <td>Card</td>
                                        <td>08-03-2023</td>
                                        <td>$1.99</td>
                                    </tr>
                                </table>
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