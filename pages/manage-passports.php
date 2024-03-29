<?php $currentPage = "manage-passports" ?>
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
                                <h6 class="card-title">Manage Passports</h6>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn" style="overflow: auto;">
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead class="text-center">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="text-start">Sr no</th>
                                    <th class="text-start">Passport Name</th>
                                    <th class="text-start">Passport ID</th>
                                    <th class="text-start">Image </th>
                                    <th class="text-start">Price</th>
                                    <th class="text-start">Status</th>
                                    <th class="no-content">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td class="text-start">1</td>
                                        <td class="text-start">Cheers to Summer</td>
                                        <td class="text-start">1234567</td>
                                        <td><img src="../src/assets/img/video.png"></td>
                                        <td class="text-start">$500</td>
                                        <td>
                                            <div class="switch-btn">
                                                <input type="checkbox" id="switch18" switch="bool" checked />
                                                <label for="switch18" data-on-label="Active" data-off-label="Expired"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropout">
                                                <button class="more">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                                <ul>
                                                    <li>
                                                        <a href="manage-passports-view.php">
                                                            <img src="../src/assets/img/view.svg" />
                                                            <span>View</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="manage-passports-edit.php">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" data-toggle="modal" data-target="#delete-modal">
                                                            <img src="../src/assets/img/delete-recycle.svg" />
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td class="text-start">2</td>
                                        <td class="text-start">Cheers to Summer</td>
                                        <td class="text-start">1234567</td>
                                        <td><img src="../src/assets/img/video.png"></td>
                                        <td class="text-start">$500</td>
                                        <td>
                                            <div class="switch-btn">
                                                <input type="checkbox" id="switch18" switch="bool" checked />
                                                <label for="switch18" data-on-label="Active" data-off-label="Expired"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropout">
                                                <button class="more">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                                <ul>
                                                    <li>
                                                        <a href="manage-passports-view.php">
                                                            <img src="../src/assets/img/view.svg" />
                                                            <span>View</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="manage-passports-edit.php">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" data-toggle="modal" data-target="#delete-modal">
                                                            <img src="../src/assets/img/delete-recycle.svg" />
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
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
        $('<button><a class="extra-btn width-max-content" href="manage-passports-add.php">Add</a></button><button><ul class="navbar-item flex-row ms-lg-auto ms-0"><li class="nav-item dropdown action-dropdown  order-lg-0 order-1"><a href="javascript:void(0);"class="nav-link dropdown-toggle user extra-btn" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="avatar-container"><div class="avatar avatar-sm avatar-indicators avatar-online"><h3>Filter</h3></div></div></a><div class="dropdown-menu position-absolute" aria-labelledby="actionDropdown"><div class="dropdown-item"><a href="#"><span>All</span></a></div><div class="dropdown-item"><a href="#"><span>Active</span></a></div><div class="dropdown-item"><a href="#"> <span>Expired</span></a></div></div></li></ul></button>').insertBefore("#zero-config_filter label");
    });
</script>