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
                                        href="manage-restraunts-passports-edit.php">
                                        <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                        <h6 class="card-title p-0">Edit Vouchers</h6>
                                    </a>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Monday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Tuesday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Wednesday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Thursday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Friday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Saturday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="mb-1">Sunday</h4>
                                            <i class="fa fa-pencil pointer" data-toggle="modal" data-target="#edit-voucher-modal" aria-hidden="true"></i>
                                        </div>
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