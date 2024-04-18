<?php $currentPage = "affiliate-in-view" ?>
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
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content  p-0 container">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <h6 class="card-title">
                                <a href="../pages/manage-users/affiliate-in.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users
                            </h6>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="aff-view-main">
                                        <div class="aff-view-top">
                                            <div class="aff-view-top-left">
                                                <img src="../src/assets/img/profile-30.png" alt="">
                                            </div>
                                            <div class="aff-view-top-right">
                                                <h6>Affiliate Name</h6>
                                                <div class="aff-view-icon mb-3">
                                                    Social Links :
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                </div>
                                                <span class="common-btn">Net Paid Commission : 5,000
                                                </span>
                                            </div>
                                        </div>
                                        <div class="aff-view-mid">
                                            <a href="" class="common-btn">Send Credentials</a>
                                            <span>Alot payment type :</span>
                                            <a href="#" class="common-btn" data-toggle="modal" data-target="#exampleModal">Fixed
                                            </a>
                                            <select class="form-control w-25" name="" id="">
                                                <option value="" selected>All</option>
                                                <option value="">7 Days</option>
                                                <option value="">Month</option>
                                                <option value="">Quaterly</option>
                                                <option value="">Half-Yearly</option>
                                                <option value="">Yearly</option>
                                            </select>
                                        </div>
                                        <div class="aff-view-bot">
                                            <div class="drop-bot border-right">
                                                <h5 class="text-center para" >220</h5>
                                                <h5 class="m-0 text-center para" >Downloads</h5>
                                            </div>
                                            <div class="drop-bot border-right">
                                                <h5 class="text-center para" >110</h5>
                                                <h5 class="m-0 text-center para" >Subscribers</h5>
                                            </div>
                                            <div class="drop-bot">
                                                <h5 class="text-center para" >100</h5>
                                                <h5 class="m-0 text-center para" >No of clicks</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>
                                        <label for="">Email ID :</label>
                                        <span>Vinodhini@Gmail.com</span>
                                    </p>
                                    <p>
                                        <label for="">Phone :</label>
                                        <span>9044556622</span>
                                    </p>
                                    <p>
                                        <label for="">Password :</label>
                                        <span>*******jnbb</span>
                                    </p>
                                    <p>
                                        <label for="">URL :</label>
                                        <span>//kzdckljm</span>
                                    </p>
                                    <p>
                                        <label for="">Payment Type :</label>
                                        <span>Fixed</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade modaaal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <label for="">Email ID :</label>
                    <span>Vinodhini@Gmail.com</span>
                </p>
                <input type="text" placeholder="Generate">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Close</button>
                <button type="button" class="btn red-btn">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<?php include '../../component/footer.php'; ?>
<script src="../../src/plugins/src/table/datatable/datatables.js"></script>
<script>
    //   -----------------------------------------------------------------------


    $('#user-listtab').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10
    });

    document.addEventListener("DOMContentLoaded", function() {

        // ------------  User chart starts ------------


    });
    // ------------------------------------------------------------------------
</script>