<?php $currentPage = "manage-newsletter" ?>
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
                                <a class="d-flex align-items-center justify-content-center pl-2" href="manage-newsletter.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    <h6 class="card-title p-0">View Newsletter</h6>
                                </a>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn p-0">
                            <div class="view-details">
                                <div class="simple-tab">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                                            tabindex="0">
                                            <div class="row">
                                                <div class="col-md-6 mb-10 tabs23">
                                                    <table>
                                                        <tr class="title">
                                                            <td>Newsletter name :</td>
                                                            <td>Description :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>Lorem Ipsum</td>
                                                            <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum </td>
                                                        </tr>
                    
                                                    </table>
                    
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <table>
                                                        <tr class="title">
                                                            <td>Image :</td>
                                                            <td>Published Date :</td>
                    
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td><img src="../src/assets/img/video.png"></td>
                                                            <td>08/20/2023</td>
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
    </div>
</div>



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
        $('<button><a class="extra-btn width-max-content" href="archive-manage-customers.php">View Archive List</a></button><button><ul class="navbar-item flex-row ms-lg-auto ms-0"><li class="nav-item dropdown action-dropdown  order-lg-0 order-1"><a href="javascript:void(0);"class="nav-link dropdown-toggle user extra-btn" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="avatar-container"><div class="avatar avatar-sm avatar-indicators avatar-online"><h3>Export</h3></div></div></a><div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown"><div class="dropdown-item"><a href="#"><span>Download Overview</span></a></div><div class="dropdown-item"><a href="#"><span>Download Patient Data</span></a></div><div class="dropdown-item"><a href="#"> <span>Download Selected</span></a></div></div></li></ul></button>').insertBefore("#zero-config_filter label");
    });

    var quill = new Quill('#newsletter-quill-edit', {
        theme: 'snow'
    });
</script>