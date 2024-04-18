<?php $currentPage = "subscribed" ?>
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
                            <!-- <div class="breadcrumb">
                                <a href="">Manage Notification / </a>
                                <a href="" class="ml-1"> In App Notification</a>
                            </div> -->
                            <h6 class="card-title">Manage Users</h6>
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
                                                        <h6 class="ms-2">Plan</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Monthly</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Quarterly</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Yearly</a></li>
                                                        <h6 class="ms-2">Renewal</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Last 7 Days</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">3 days left</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">1 day left</a></li>
                                                        <h6 class="ms-2">Activity</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">All</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Active</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Inactive</a></li>
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
                                            <th class="">Name</th>
                                            <th class="">Location</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tenure</th>
                                            <th>Renewal</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php for ($x = 0; $x <= 6; $x++) { ?>
                                            <tr>
                                                <td class="checkbox-column"><input type="checkbox"></td>
                                                <td class="checkbox-column"><?php echo $x + 1 ?></td>
                                                <td>Raj Shinde</td>
                                                <td>Mumbai</td>
                                                <td>rajshinde9@gmail.com</td>
                                                <td>***5461**</td>
                                                <td>Monthly</td>
                                                <td>7 days Left</td>
                                                <td>
                                                    <div class="actions-btn">
                                                        <a href="../../admin-dashboard/pages/manage-users/manage-users-subscription.php" class="subs-btn">Subscriptions</a>
                                                        <a href="../pages/manage-users/subscribed-view.php">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                        <a href="../pages/manage-users/subscribed-edit.php">
                                                            <svg class="svg-inline--fa fa-pen-to-square" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        </ul>
                                                    </div>
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