<?php $currentPage = "affiliate-in-request" ?>
<?php include('../../component/header.php'); ?>
<?php include('../../component/sidebar.php'); ?>

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
                            <div class="breadcrumb">
                                <a href="">Manage user / </a>
                                <a href="" class="ml-1"> Affiliate/Influencer / Request</a>
                            </div>
                            <h6 class="card-title">
                                <a href="../pages/manage-users/affiliate-in.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users
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
                                                    <ul class="dropdown-item">
                                                        <li><a class="dropdown-item" href="#" class="mr-2">All</a></li>
                                                        <li><a class="dropdown-item" href="#" class="mr-2">Accepted</a></li>
                                                        <li><a class="dropdown-item" href="#" class="mr-2">Rejected</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#" class="common-btn">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table id="user-listtab" class="table dt-table-hover" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="checkbox-column dt-no-sorting">#</th>
                                        <th class="checkbox-column dt-no-sorting">Sr.no</th>
                                        <th class="">Affiliate Name</th>
                                        <th>Phone</th>
                                        <th class="">Email ID</th>
                                        <th class="no-content">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php for ($x = 0; $x <= 6; $x++) { ?>
                                        <tr>
                                            <td class="checkbox-column"><input type="checkbox"></td>
                                            <td class="checkbox-column"><?php echo $x + 1 ?></td>
                                            <td>Raj Shinde</td>
                                            <td>***5461**</td>
                                            <td>vino*****@gmail.com</td>
                                            <td>
                                                <div class="actions-btn">
                                                    <button class="btn" style="background: #ccc; border: none;" data-toggle="modal" data-target="#rejectOption">Reject</button>

                                                    <button class="common-btn btn" data-toggle="modal" data-target="#acceptOption">Accept</button>

                                                    <a href="" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
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
<!--- Modal view -->
<div class="modal fade modaaal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="mb-3 modal-title">Affiliate Details</h5>
                <div class="aff-view-top mb-3">
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
                    </div>
                </div>
                <p>
                    <label for="">Phone No :</label>
                    <span>9853151512</span>
                </p>
                <p>
                    <label for="">Email ID :</label>
                    <span>Vinodhini@Gmail.com</span>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal accept -->
<div class="modal fade modaaal" id="acceptOption" tabindex="-1" role="dialog" aria-labelledby="acceptOption" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title" id="rejectOptionLabel">Accept Affiliate's Request</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn red-btn">Confirm</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal reject -->
<div class="modal fade modaaal" id="rejectOption" tabindex="-1" role="dialog" aria-labelledby="rejectOptionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title" id="rejectOptionLabel">Reject Affiliate's Request</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn red-btn">Confirm</button>
            </div>
        </div>
    </div>
</div>


<?php include '../../component/footer.php'; ?>

<script>
    $('#user-listtab').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page PAGE of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10
    });
</script>