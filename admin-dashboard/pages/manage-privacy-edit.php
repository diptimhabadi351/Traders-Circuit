<?php $currentPage = "manage-privacy" ?>
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
                                    href="manage-privacy.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    <h6 class="card-title p-0">Edit Details</h6>
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
                                                <div class="col-md-12">
                                                    <div id="terms-quill-edit" class="editor-quill"
                                                        style="height: 300px;"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <a class="download-btn-custom mt-3 custom-width-10" href="">
                                                        <span>Update</span>
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
    </div>
    <!--  BEGIN FOOTER  -->

    <!--  END FOOTER  -->
</div>
</div>
<!-- END MAIN CONTAINER -->


<?php include '../component/footer.php'; ?>

<script>
    var quill = new Quill('#terms-quill-edit', {
        theme: 'snow'
    });
</script>