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
                                <div class="col-md-5 pl-2">
                                    <a class="d-flex align-items-center justify-content-start"
                                        href="passport-details.php">
                                        <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                        <h6 class="card-title p-0">View Vouchers</h6>
                                    </a>
                                </div>
                                <div class="col-md-7 d-flex align-items-center justify-content-end">
                                    <a class="view-details-btn w-25 mr-3" href="edit-vouchers.php">
                                        <span>Edit Vouchers</span>
                                    </a>
                                    <select class="form-control w-25 mr-2" name="" id="">
                                        <option value="" selected>All</option>
                                        <option value="">Active</option>
                                        <option value="">Redeemed</option>
                                        <option value="">Reinstated</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="row">
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-1-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Monday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-2-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Tuesday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-3-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Wednesday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-1-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Thursday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-2-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Friday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-3-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Saturday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="card">
                                    <div class="voucher-1-img">
                                    </div>
                                    <div class="card-body p-3 voucher-desc">
                                        <h4 class="mb-1">Sunday</h4>
                                        <p class="mb-1">Voucher ID: 234567</p>
                                        <p class="mb-0">Lorem ipsum is dummy text</p>
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