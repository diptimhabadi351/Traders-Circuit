<?php $currentPage = "manage-feedback" ?>
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
                                <h6 class="card-title">Manage Feedback</h6>
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="text-start">Sr No.</th>
                                        <th class="text-start">User ID</th>
                                        <th class="text-start">User Name</th>
                                        <th class="text-start">User Type</th>
                                        <th class="text-start">Reactions</th>
                                        <th class="text-start">Commnet</th>
                                        <th class="text-start">Date Received</th>
                                        <th class="no-content">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td class="text-start">1</td>
                                        <td class="text-start">345678</td>
                                        <td class="text-start">Raj Shinde</td>
                                        <td class="text-start">Customer</td>
                                        <td class="text-start">Good</td>
                                        <td>
                                            <a class="view-btn m-0" href="" data-toggle="modal"
                                                data-target="#comment-modal">View</a>
                                        </td>
                                        <td class="text-start">08/22/2023</td>
                                        <td>
                                            <a class="d-flex justify-content-center align-items-center"
                                                style="gap: 7px;" href="" data-toggle="modal"
                                                data-target="#delete-modal">
                                                <img width="15" src="../src/assets/img/delete-recycle.svg" />
                                                <span>Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">2</td>
                                        <td class="text-start">345678</td>
                                        <td class="text-start">Raj Shinde</td>
                                        <td class="text-start">Customer</td>
                                        <td class="text-start">Amazing</td>
                                        <td>
                                            <a class="view-btn m-0" href="" data-toggle="modal"
                                                data-target="#comment-modal">View</a>
                                        </td>
                                        <td class="text-start">08/22/2023</td>
                                        <td>
                                            <a class="d-flex justify-content-center align-items-center"
                                                style="gap: 7px;" href="" data-toggle="modal"
                                                data-target="#delete-modal">
                                                <img width="15" src="../src/assets/img/delete-recycle.svg" />
                                                <span>Delete</span>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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
<script src="../src/plugins/src/table/datatable/datatables.js"></script>
<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10
    });
</script>

<script>
    $(document).ready(function () {
        $('<button><ul class="navbar-item flex-row ms-lg-auto ms-0"><li class="nav-item dropdown action-dropdown  order-lg-0 order-1"><a href="javascript:void(0);"class="nav-link dropdown-toggle user extra-btn" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="avatar-container"><div class="avatar avatar-sm avatar-indicators avatar-online"><h3>Filter</h3></div></div></a><div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown"><div class="dropdown-item"><a href="#"><span>Customer</span></a></div><div class="dropdown-item"><a href="#"><span>Restraunt</span></a></div></div></li></ul></button>').insertBefore("#zero-config_filter label");
    });
</script>