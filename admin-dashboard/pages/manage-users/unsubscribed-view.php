<?php $currentPage = "unsubscribed-view" ?>
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
                                <a href="../pages/manage-users/unsubscribed.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users / Unsubscriptions-view
                            </h6>
                            <div class="row mt-5 m-4">
                                <div class="col-md-6">
                                    <table class="w-100">
                                        <tbody class="d-flex">
                                            <tr class="w-50 d-flex flex-column gap-3">
                                                <td>
                                                    <h6>Name :</h6>
                                                </td>
                                                <td>
                                                    <h6>Location :</h6>
                                                </td>
                                                <td>
                                                    <h6>Phone :</h6>
                                                </td>
                                                <td>
                                                    <h6>Email ID :</h6>
                                                </td>
                                                <td>
                                                    <h6>Onboarded Date :</h6>
                                                </td>
                                            </tr>
                                            <tr class=" d-flex flex-column gap-3">
                                                <td>
                                                    <h6>Vinodhini Vijayaraj</h6>
                                                </td>
                                                <td>
                                                    <h6>Mumbai</h6>
                                                </td>
                                                <td>
                                                    <h6>5482145487</h6>
                                                </td>
                                                <td>
                                                    <h6>Vinodhini.v@gmail.com</h6>
                                                </td>
                                                <td>
                                                    <h6>03/04/24</h6>
                                                </td>
                                            </tr>
                                        </tbody>
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


    // ------------------------------------------------------------------------
</script>