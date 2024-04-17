<?php $currentPage = "manage-users-subscription" ?>
<?php include('../../component/header.php'); ?>
<?php include('../../component/sidebar.php'); ?>
<?php include('../../component/common-modal.php'); ?>
<link rel="stylesheet" type="text/css" href="../../src/plugins/src/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="../../src/plugins/css/light/table/datatable/dt-global_style.css">

<style>
    .fade {
        display: none;
    }

    .fade.show {
        display: block;
    }

    a.add-btn {
        position: absolute;
        left: -14.5rem;
        top: 21px;
        z-index: 10;
    }

    .btns-datatabel {
        position: relative;
    }
</style>
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->
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
                                <a href="../pages/manage-users/subscribed.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users / Subscriptions
                            </h6>
                            <div class="top-tabel">
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <ul class="navbar-item flex-row ms-lg-auto ms-0 mb-3">
                                            <li class=" dropdown action-dropdown  order-lg-0 order-1">
                                                <a href="javascript:void(0);" class="nav-link dropdown-toggle d-flex align-items-center justify-content-center filter-btn" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 3H2L10 12.46V19L14 21V12.46L22 3Z" stroke="#9a0000" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <h6 class="ml-2 mb-0">Filter</h6>
                                                </a>
                                                <div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown">
                                                    <ul class="dropdown-item checkbox-column">
                                                        <h6 class="ms-2">Category</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">All</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Downloaded</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Subscribed</a></li>
                                                        <h6 class="ms-2">Subscription Type</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">All</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Standard</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Upgrade</a></li>
                                                        <h6 class="ms-2">Products</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Swing trade</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Multi-bagger</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Options</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Combo</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="simple-pill">
                                <table id="user-listtab" class="table dt-table-hover" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="checkbox-column dt-no-sorting">#</th>
                                            <th class="checkbox-column dt-no-sorting">Sr.no</th>
                                            <th class="">Name of Product</th>
                                            <th class="">Date of Purchase</th>
                                            <th>Subscription Tier</th>
                                            <th>Subscription Amount</th>
                                            <th>Expiry Date</th>
                                            <th>Mail Invoice</th>
                                            <th class="no-content">Download Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php for ($x = 0; $x <= 6; $x++) { ?>
                                            <tr>
                                                <td class="checkbox-column"><input type="checkbox"></td>
                                                <td class="checkbox-column"><?php echo $x + 1 ?></td>
                                                <td>Multibagger</td>
                                                <td>28/03/24</td>
                                                <td>Monthly</td>
                                                <td>1500</td>
                                                <td>24/03/24</td>
                                                <td>
                                                    <img src="../src/assets/images/mail.svg" width="20px" height="20px" alt="">
                                                </td>
                                                <td>
                                                    <img src="../src/assets/images/download.svg" width="20px" height="20px" alt="">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- <script>
    $(document).ready(function() {
        $('<button class="btns"><div class=row><div class=col-md-6></div><div class=col-md-6><div class="row top-btns"><div class=col-md-2></div><div class=col-md-4><div class=checkbox-dropdown>Filter <i class="fa fa-filter"aria-hidden=true></i><ul class=checkbox-dropdown-list><li><label><input name=city type=checkbox value=delivered>Delivered</label><li><label><input name=city type=checkbox value=pending>Pending</label></ul></div></div></div></button>').insertAfter(".dt--top-section");
    });
</script> -->