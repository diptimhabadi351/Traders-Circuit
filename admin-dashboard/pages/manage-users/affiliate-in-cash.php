<?php $currentPage = "affiliate-in-cash" ?>
<?php include('../../component/header.php'); ?>
<?php include('../../component/sidebar.php'); ?>
<?php include('../../component/common-modal.php'); ?>
<link rel="stylesheet" type="text/css" href="../../src/plugins/src/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="../../src/plugins/css/light/table/datatable/dt-global_style.css">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <div id="content" class="main-content affiliate-in-cash">
        <div class="layout-px-spacing">
            <div class="middle-content  p-0 container">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing  cash">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <h6 class="card-title mb-4">
                                <a href="../pages/manage-users/affiliate-in.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users
                            </h6>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="amount">
                                        <label for="">Enter amount :</label>
                                        <input type="text" value="20">
                                    </p>
                                    <p class="description">
                                        <label for="">Enter Description :</label>
                                        <textarea name="" id="" ></textarea>
                                    </p>
                                    <div class="payment-date">
                                        <p class="type">
                                            <label for="">Payment Type :</label>
                                            <span>Per User</span>
                                        </p>
                                        <p class="date">
                                            <label for="">Date :</label>
                                            <input type="date">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pay-btn">
                                <button class="btn red-btn" data-toggle="modal" data-target="#payOption">Pay Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal reject -->
<div class="modal fade modaaal" id="payOption" tabindex="-1" role="dialog" aria-labelledby="payOptionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title" id="rejectOptionLabel">Are you sure you want Make Payment</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Yes</button>
                <button type="button" class="btn red-btn">No</button>
            </div>
        </div>
    </div>
</div>

<!--  END LOADER -->

<?php include '../../component/footer.php'; ?>
<script src="../../src/plugins/src/table/datatable/datatables.js"></script>