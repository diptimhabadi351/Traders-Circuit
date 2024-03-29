<?php $currentPage = "manage-role" ?>
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
        top: 42px;
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

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="simple-tab cms-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-toggle="tab"
                                            data-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">User List</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-toggle="tab"
                                            data-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">Role List</button>
                                    </li>
                                </ul>
                                <div class="">

                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="top-tabel">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class="card-title pl-0">Manage User</h6>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="btns-datatabel">
                                                        <div class="row">
                                                            <div class="col-md-6"></div>
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-3">
                                                                <a class="extra-btn width-max-content add-btn" href=""
                                                                    data-toggle="modal" data-target="#add-list-modal"><i
                                                                        class="fa fa-plus"></i>
                                                                    Add</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="text-start">User</th>
                                                    <th>Email address</th>
                                                    <th>Role</th>
                                                    <th>Last login</th>
                                                    <th>Raj shinde</th>
                                                    <th class="no-content">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Raj shinde</td>
                                                    <td>rajshinde9@gmail.com</td>
                                                    <td>Operations</td>
                                                    <td>Yesterday</td>
                                                    <td>15-02-2022</td>

                                                    <td>
                                                        <div class="dropout">
                                                            <button class="more">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </button>
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#edit-list-modal">
                                                                        <img src="../src/assets/img/edit.svg" />
                                                                        <span>Edit Details</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#delete-modal">
                                                                        <img
                                                                            src="../src/assets/img/delete-recycle.svg" />
                                                                        <span>Delete Details</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane fade " id="profile-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">

                                        <div class="top-tabel">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class="card-title pl-0">Manage Roles</h6>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="btns-datatabel">
                                                        <div class="row">
                                                            <div class="col-md-5"></div>
                                                            <div class="col-md-3">
                                                                <a class="extra-btn width-max-content"
                                                                    href="" data-toggle="modal"
                                                                        data-target="#add-role-modal"><i class="fa fa-plus"></i>
                                                                    Add</a>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="input-elevated" type="text"
                                                                    placeholder="Search">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area">
                                                    <div class="card-content">
                                                        <h3>Operations</h3>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="view-role.php">View
                                                                role</a>
                                                            <a class="extra-btn" href="#" data-dismiss="modal" data-toggle="modal"
                                                                data-target="#edit-role-modal">Edit role</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 layout-spacing">
                                                <div class="widget-content widget-content-area br-8 position-btn">
                                                    <div class="card-content">
                                                        <h3>Products</h3>
                                                        <h5>Total users with this role : 5</h5>
                                                        <ul>
                                                            <li>Limited admin control</li>
                                                            <li>View and edit financial summaries</li>
                                                            <li>Enabled bulk reports</li>
                                                        </ul>
                                                        <div class="modal-btn d-flex ">
                                                            <a class="download-btn" href="#" data-dismiss="modal">View
                                                                role</a>
                                                            <a class="extra-btn" href="#" data-dismiss="modal">Edit
                                                                role</a>
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
    $('#zero-config1').DataTable({
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