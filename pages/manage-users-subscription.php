<?php $currentPage = "manage-users-subscription" ?>
<?php include('../component/header.php'); ?>
<?php include('../component/sidebar.php'); ?>
<?php include('../component/common-modal.php'); ?>
<link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">

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
                            <div class="col-md-4 left">
                                <h6 class="card-title">
                                    <a href="manage-users.php">
                                        <img src="../src/assets/images/arrow-left.svg" alt="">
                                    </a>
                                    Manage Users / Subscriptions
                                </h6>
                            </div>
                            <div class="col-md-8 float-right">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="simple-tab cms-tab roles_tab">
                                <ul class="nav nav-tabs" id="myTab" role=" tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">User
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Affiliate / Influencer
                                        </button>
                                    </li>
                                </ul>
                                <div class="manage-user-tabs">

                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div>
                                            <ul class="nav nav-tabs subscribes_tab" id="myTab" role=" tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="Subscribed-tab" data-toggle="tab" data-target="#Subscribed-tab-pane" type="button" role="tab" aria-controls="Subscribed-tab-pane" aria-selected="true">Subscribed
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="guest-tab" data-toggle="tab" data-target="#Unsubscribed-tab-pane" type="button" role="tab" aria-controls="Unsubscribed-tab-pane" aria-selected="false">Unsubscribed
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="guest-tab" data-toggle="tab" data-target="#guest-tab-pane" type="button" role="tab" aria-controls="guest-tab-pane" aria-selected="false">Guest User
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade show active" id="Subscribed-tab-pane" role="tabpanel" aria-labelledby="Subscribed-tab" tabindex="0">
                                            <div class="user-filter-div d-flex align-items-center">
                                                <button class="manage-del mx-3">
                                                    <ul class="navbar-item flex-row ms-lg-auto ms-0 d-flex justify-content-end">
                                                        <li class="nav-item dropdown action-dropdown  order-lg-0 order-1"><a href="javascript:void(0);" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <div class="avatar-container">
                                                                    <div class=" avatar-indicators avatar-online">
                                                                        <span>Filter</span>
                                                                    </div>
                                                                </div>

                                                                <div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown">
                                                                    <!-- <div class="dropdown-item"><a href="#"><span>By Product</span></a></div>
                                                                    <div class="dropdown-item"><a href="#"><span>Tenure</span></a></div>
                                                                    <div class="dropdown-item"><a href="#"> <span>Location</span></a></div>
                                                                    <div class="dropdown-item"><a href="#"> <span>Renewal Day</span></a></div> -->
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                                        <label class="form-check-label" for="invalidCheck2">
                                                                            Agree to terms and conditions
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </button>
                                                <a class="manage-del" data-toggle="modal" data-target="#caregiver-suspend-modal">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <table id="user-listtab" class="table dt-table-hover" style="width:100%">
                                                <thead class="text-center">
                                                    <tr>
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
                                        <div class="tab-pane fade" id="Unsubscribed-tab-pane" role="tabpanel" aria-labelledby="Unsubscribed-tab" tabindex="0">
                                            unsubs
                                        </div>
                                        <div class="tab-pane fade" id="guest-tab-pane" role="tabpanel" aria-labelledby="guest-tab" tabindex="0">
                                            gust
                                        </div>

                                        <!-- <div class="top-tabel">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="btns-datatabel">
                                                        <div class="row">
                                                            <div class="col-md-5"></div>
                                                            <div class="col-md-3">

                                                            </div>

                                                            <div class="col-md-2">
                                                                <a class="extra-btn width-max-content " href="manage_team_add.php"><i class="fa fa-plus"></i>
                                                                    Add</a>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <ul class="navbar-item flex-row ms-lg-auto ms-0">
                                                                    <li class=" dropdown action-dropdown  order-lg-0 order-1">
                                                                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user extra-btn" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <div class="avatar-container">
                                                                                <div class="avatar-indicators avatar-online d-inline-block">
                                                                                    <h3>Sort by</h3>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown">
                                                                            <div class="dropdown-item">
                                                                                <a href="#">
                                                                                    <span>Download Overview</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="dropdown-item">
                                                                                <a href="#">
                                                                                    <span>Download Caregiver Data</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="dropdown-item">
                                                                                <a href="#">
                                                                                    <span>Download Selected</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->


                                    </div>

                                    <div class="tab-pane fade " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                                        <div class="row rolessub">
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area">
                                                    <div class="card-content">
                                                        <h3>Sub Admin</h3>
                                                        <p>Access to All</p>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="manage_team_view-role_sub.php">View
                                                                role</a>
                                                            <!--<a class="extra-btn" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit-team-modal">Edit role</a>    -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area br-8 position-btn">
                                                    <div class="card-content">
                                                        <h3>User Manager</h3>
                                                        <p>Total users with this role : 5</p>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="manage_team_view-role_manager.php">View
                                                                role</a>
                                                            <!--<a class="extra-btn" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit-team-modal">Edit role</a>    -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area">
                                                    <div class="card-content">
                                                        <h3>Customer Service</h3>
                                                        <p>Access to Contact Us & Feedback</p>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="#">View
                                                                role</a>
                                                            <!--<a class="extra-btn" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit-team-modal">Edit role</a>    -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area br-8 position-btn">
                                                    <div class="card-content">
                                                        <h3>Marketear</h3>
                                                        <p>Access to Subscription</p>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="#">View
                                                                role</a>
                                                            <!--<a class="extra-btn" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit-team-modal">Edit role</a>    -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area br-8 position-btn">
                                                    <div class="card-content">
                                                        <h3>Content Manager</h3>
                                                        <p>Access to CMS</p>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="#">View
                                                                role</a>
                                                            <!--<a class="extra-btn" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit-team-modal">Edit role</a>    -->
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
    </div>
</div>


<?php include '../component/footer.php'; ?>
<script src="../src/plugins/src/table/datatable/datatables.js"></script>
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