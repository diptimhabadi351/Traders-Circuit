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
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="btns-datatabel">
                                            <div class="row">
                                                <div class="col-md-5"></div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                    <ul class="navbar-item flex-row ms-lg-auto ms-0">
                                                        <li class=" dropdown action-dropdown  order-lg-0 order-1">
                                                            <a href="javascript:void(0);" class="nav-link dropdown-toggle user common-btn d-flex align-items-center justify-content-around" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M22 3H2L10 12.46V19L14 21V12.46L22 3Z" stroke="#9a0000" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                <h6 style="color: #9a0000;" class="mb-0">Filter</h6>
                                                            </a>
                                                            <div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown">
                                                                <ul class="dropdown-item">
                                                                    <li><a class="dropdown-item" href="#">All</a></li>
                                                                    <li><a class="dropdown-item" href="#">Accepted</a></li>
                                                                    <li><a class="dropdown-item" href="#">Rejected</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#" class="common-btn">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <a href="#" style="background: #ccc; border: none;">Reject</a>
                                                    <a href="#" class="common-btn">Accept</a>
                                                    <a href="../pages/manage-users/affiliate-in-view.php">
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