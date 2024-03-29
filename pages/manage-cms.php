<?php $currentPage = "manage-cms" ?>
<?php include('../component/header.php'); ?>
<?php include('../component/sidebar.php'); ?>
<?php include('../component/common-modal.php'); ?>
<link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">


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
                            <div class="col-md-4">
                                <h6 class="card-title">Manage CMS</h6>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 d-flex align-items-center gap-3 p-0 mb-4">
                        <div class="col-4">
                            <a href="manage-news.php">
                                <div class="card pointer">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center card-cms">
                                        <img width="50" height="50" src="../src/assets/img/article 1.svg" alt="">
                                        <h4 class="m-0">News & Articles</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="signup.php">
                                <div class="card pointer">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center card-cms">
                                        <img width="50" height="50" src="../src/assets/img/quill_inbox-newsletter.svg"
                                            alt="">
                                        <h4 class="m-0">Newsletter</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="signup.php">
                                <div class="card pointer">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center card-cms">
                                        <img width="50" height="50" src="../src/assets/img/user (2) 1.svg" alt="">
                                        <h4 class="m-0">About Us</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-center gap-3 p-0 mb-4">
                        <div class="col-4">
                            <a href="signup.php">
                                <div class="card pointer">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center card-cms">
                                        <img width="50" height="50" src="../src/assets/img/contract 1.svg" alt="">
                                        <h4 class="m-0">Terms & Conditions</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="signup.php">
                                <div class="card pointer">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center card-cms">
                                        <img width="50" height="50" src="../src/assets/img/conversation 3.svg" alt="">
                                        <h4 class="m-0">FAQ</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="signup.php">
                                <div class="card pointer">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center card-cms">
                                        <img width="50" height="50" src="../src/assets/img/conversation 3.svg" alt="">
                                        <h4 class="m-0">Privacy Policy</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>