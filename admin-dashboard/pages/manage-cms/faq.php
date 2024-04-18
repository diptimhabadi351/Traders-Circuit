<?php $currentPage = "manage-cms" ?>
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
                                <a href="">Manage CMS / </a>
                                <a href="" class="ml-1"> Manage FAQ</a>
                            </div>
                            <h6 class="card-title">Manage FAQ</h6>
                            <div class="simple-pill">
                                <table id="faq" class="table style-3 dt-table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column dt-no-sorting sorting_asc text-center" rowspan="1" colspan="1" aria-label=" Record Id " style="width: 70px;">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                                                </div>
                                            </th>
                                            <th class="text-center">Sr no</th>
                                            <th class="text-center">Question</th>
                                            <th class="text-center">Answer</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Date of addtion</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="checkbox-column sorting_1 text-center">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                </div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Account Management</td>
                                            <td class="text-center">28/03/24</td>
                                            <td class="text-center">
                                            <label class="switch">
                                            <input type="checkbox" id="togBtn">
                                            <div class="slider round"><!--ADDED HTML -->
                                                <span class="on">Active</span>
                                                <span class="off">Inactive</span><!--END-->
                                            </div>
                                            </label>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex" style="justify-content: space-evenly;">
                                                    <a href="../manage-cms/view-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="../manage-cms/edit-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column sorting_1 text-center">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                </div>
                                            </td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Account Management</td>
                                            <td class="text-center">28/03/24</td>
                                            <td class="text-center">
                                            <label class="switch">
                                            <input type="checkbox" id="togBtn">
                                            <div class="slider round"><!--ADDED HTML -->
                                                <span class="on">Active</span>
                                                <span class="off">Inactive</span><!--END-->
                                            </div>
                                            </label>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex" style="justify-content: space-evenly;">
                                                    <a href="../manage-cms/view-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="../manage-cms/edit-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column sorting_1 text-center">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                </div>
                                            </td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Account Management</td>
                                            <td class="text-center">28/03/24</td>
                                            <td class="text-center">
                                            <label class="switch">
                                            <input type="checkbox" id="togBtn">
                                            <div class="slider round"><!--ADDED HTML -->
                                                <span class="on">Active</span>
                                                <span class="off">Inactive</span><!--END-->
                                            </div>
                                            </label>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex" style="justify-content: space-evenly;">
                                                    <a href="../manage-cms/view-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="../manage-cms/edit-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column sorting_1 text-center">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                </div>
                                            </td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Account Management</td>
                                            <td class="text-center">28/03/24</td>
                                            <td class="text-center">
                                            <label class="switch">
                                            <input type="checkbox" id="togBtn">
                                            <div class="slider round"><!--ADDED HTML -->
                                                <span class="on">Active</span>
                                                <span class="off">Inactive</span><!--END-->
                                            </div>
                                            </label>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex" style="justify-content: space-evenly;">
                                                    <a href="../manage-cms/view-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="../manage-cms/edit-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column sorting_1 text-center">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                </div>
                                            </td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Account Management</td>
                                            <td class="text-center">28/03/24</td>
                                            <td class="text-center">
                                            <label class="switch">
                                            <input type="checkbox" id="togBtn">
                                            <div class="slider round"><!--ADDED HTML -->
                                                <span class="on">Active</span>
                                                <span class="off">Inactive</span><!--END-->
                                            </div>
                                            </label>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex" style="justify-content: space-evenly;">
                                                    <a href="../manage-cms/view-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="../manage-cms/edit-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column sorting_1 text-center">
                                                <div class="form-check form-check-primary d-block new-control">
                                                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                </div>
                                            </td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Lorem</td>
                                            <td class="text-center">Account Management</td>
                                            <td class="text-center">28/03/24</td>
                                            <td class="text-center">
                                            <label class="switch">
                                            <input type="checkbox" id="togBtn">
                                            <div class="slider round"><!--ADDED HTML -->
                                                <span class="on">Active</span>
                                                <span class="off">Inactive</span><!--END-->
                                            </div>
                                            </label>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex" style="justify-content: space-evenly;">
                                                    <a href="../manage-cms/view-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="../manage-cms/edit-faq.php" class="datatable-icons border-btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
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

<?php include '../../component/footer.php'; ?>


<script>
    $(document).ready(function() {
        $('<button class="btns"><div class=row><div class=col-md-6></div><div class=col-md-6><div class="row top-btns"><div class="extra-btn"><ul class="border-btn navbar-item flex-row ms-lg-auto ms-0"><li class=" dropdown action-dropdown  order-lg-0 order-1"><a href="javascript:void(0);" class="nav-link dropdown-toggle user  d-flex align-items-center justify-content-center" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="avatar-container"><div class="avatar-indicators avatar-online d-inline-block"><h6>Filter</h6></div></div></a><div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown"><ul class="dropdown-item checkbox-column"><li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Subscription</a></li><li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">Investment</a></li><li><a class="dropdown-item" href="#"><input type="checkbox" class="mr-2">App Feature</a></li></ul></div></li></ul></div><div class="extra-btn"><a class="border-btn add-btn mt-0"href="../../admin-dashboard/pages/manage-cms/manage-categories.php">Manage Category</a></div><div class="extra-btn"><a class="border-btn add-btn mt-0"href="../../admin-dashboard/pages/manage-cms/add-faq.php"><i class="fa fa-plus"></i>Add</a></div><div class="extra-btn"><a class="border-btn mt-0"href="" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a></div></div></div></div></button>').insertAfter(".dt--top-section");
    });
</script>

<script>
    $('#faq').DataTable({
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