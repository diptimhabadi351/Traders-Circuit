<?php $currentPage = "manage-patient" ?>
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
                            <div class="col-md-12 left d-flex align-items-center justify-content-between"
                                style="gap: 15px;">
                                <a class="d-flex align-items-center justify-content-center pl-2"
                                    href="passports.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    <h6 class="card-title p-0">View Details passport</h6>
                                </a>
                                <a class="view-details-btn mr-2" href="view-vouchers.php">
                                    <span>View Vouchers</span>
                                </a>
                            </div>
                            <!-- <div class="col-md-8 float-right">
                                <a class="download-btn-custom mt-3" href="">
                                    <span>View Vouchers</span>
                                </a>
                            </div> -->
                        </div>


                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn p-0">
                            <div class="view-details">
                                <div class="simple-tab">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-md-6 mb-10 tabs23">
                                                    <table>
                                                        <tr class="title">
                                                            <td>Passport Name :</td>
                                                            <td>Passport ID :</td>
                                                            <td>Price :</td>
                                                            <td>Purchased Medium :</td>
                                                            <td>Image :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>Cheers to Summer</td>
                                                            <td>1234567</td>
                                                            <td>$500</td>
                                                            <td>Amazon</td>
                                                            <td><img src="../src/assets/img/video.png"></td>
                                                        </tr>

                                                    </table>

                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <table>
                                                        <!-- <h4 class="empty-title"></h4> -->
                                                        <tr class="title">
                                                            <td>Description :</td>
                                                            <td>Purchased on :</td>
                                                            <td>Expiry on :</td>
                                                            <td>Transaction ID :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>Lorem Ipsum</td>
                                                            <td>08/14/2023</td>
                                                            <td>03/07/2023</td>
                                                            <td>234567</td>
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
        <!--  BEGIN FOOTER  -->

        <!--  END FOOTER  -->
    </div>
</div>
<!-- END MAIN CONTAINER -->


<?php include '../component/footer.php'; ?>