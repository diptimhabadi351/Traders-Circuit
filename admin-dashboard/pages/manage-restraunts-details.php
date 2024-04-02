<?php $currentPage = "restaurant-app" ?>
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
                                <a class="d-flex align-items-center justify-content-center pl-2"
                                    href="manage-restraunts.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    <h6 class="card-title p-0">View Details</h6>
                                </a>
                            </div>
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
                                                            <td>Restaurants Name :</td>
                                                            <td>Restaurant ID :</td>
                                                            <td>Email ID :</td>
                                                            <td>Description :</td>
                                                            <td>Start Date :</td>
                                                            <td>Image :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>McDonald’s</td>
                                                            <td>1234567</td>
                                                            <td>akanksha@gmail.com</td>
                                                            <td>Lorem Ipsum</td>
                                                            <td>02/11/2023</td>
                                                            <td><img src="../src/assets/img/video.png"></td>
                                                        </tr>

                                                    </table>

                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <table>
                                                        <tr class="title">
                                                            <td>Location :</td>
                                                            <td>Onboarded date :</td>
                                                            <td>Phone Number :</td>
                                                            <td>Bio :</td>
                                                            <td>End Date :</td>
                                                            <td>While at Restaurant be sure to try :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>NewYork</td>
                                                            <td>08/20/2023</td>
                                                            <td>87766566</td>
                                                            <td>lorem ipsum</td>
                                                            <td>19/12/2023</td>
                                                            <td class="d-flex flex-column justify-content-start">
                                                                <p class="w-100">Lorem Ipsum Lorem Ipsum</p>
                                                                <p class="w-100">Lorem Ipsum Lorem Ipsum</p>
                                                                <p class="w-100">Lorem Ipsum Lorem Ipsum</p>
                                                                <p class="w-100">Lorem Ipsum Lorem Ipsum</p>

                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="download-btn-custom mt-3" href="">
                                                        <span>Download user report</span>
                                                        <img src="../src/assets/img/download.svg" />
                                                    </a>
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