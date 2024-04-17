<?php $currentPage = "contact-us" ?>
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
                                <a href="">Contact us / </a>
                                <a href="" class="ml-1"> Tickets</a>
                            </div>
                            <h6 class="card-title">
                                <a href="../pages/manage-users/affiliate-in.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Contact Us
                            </h6>
                            <div class="top-tabel">
                                <div class="row">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5 contact-us-filter">
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
                                                        <h6 class="ms-2">Ticket Status</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">All</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Closed</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Pending</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Resolved</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Open</a></li>
                                                        <h6 class="ms-2">Category</h6>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Portfolio</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Technical Support</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Subscription</a></li>
                                                        <li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Content bytes</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="">
                                            <a href="../pages/manage-contact/manage-categories.php" class="common-btn">
                                                <h6 class="mb-0">Manage categories</h6>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="common-btn" data-toggle="modal" data-target="#contactDel">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="user-listtab" class="table dt-table-hover" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="checkbox-column dt-no-sorting">#</th>
                                        <th class="checkbox-column dt-no-sorting">Sr.no</th>
                                        <th class="">Ticket Id.</th>
                                        <th>Ticket Category</th>
                                        <th class="">Ticket Description</th>
                                        <th class="">Status</th>
                                        <th class="no-content">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php for ($x = 0; $x <= 6; $x++) { ?>
                                        <tr>
                                            <td class="checkbox-column"><input type="checkbox"></td>
                                            <td class="checkbox-column"><?php echo $x + 1 ?></td>
                                            <td>#13569412</td>
                                            <td>Account Management</td>
                                            <td>lorem ipsum.....</td>
                                            <td> <button class="common-btn btn" data-toggle="modal" data-target="#acceptOption">Accept</button>
                                            </td>
                                            <td>
                                                <div class="actions-btn">
                                                    <a href="../pages/manage-contact/contact-us-view.php">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="../pages/manage-contact/contact-us-edit.php">
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

<!-- Modal del -->
<div class="modal fade modaaal" id="contactDel" tabindex="-1" role="dialog" aria-labelledby="contactDel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title" id="rejectOptionLabel">Are you sure you want to delete</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Yes</button>
                <button type="button" class="btn red-btn">No</button>
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