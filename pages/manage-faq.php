<?php $currentPage = "manage-faq" ?>
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
                                <h6 class="card-title">Manage FAQ</h6>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn" style="overflow: auto;">
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead class="text-center">
                                    <th class="text-start">Sr no</th>
                                    <th class="text-start">Question</th>
                                    <th class="text-start">Answer</th>
                                    <th class="text-start">FAQ </th>
                                    <th class="text-start">Added Date</th>
                                    <th class="no-content">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td class="text-start">1</td>
                                        <td class="text-start">Lorem</td>
                                        <td class="text-start">Lorem</td>
                                        <td class="text-start">Lorem</td>
                                        <td class="text-start">08/22/2023</td>
                                        <td>
                                            <div class="dropout">
                                                <button class="more">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                                <ul>
                                                    <li>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" id="switch18" switch="bool"
                                                                checked />
                                                            <label for="switch18" data-on-label="Active"
                                                                data-off-label="Expired"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="manage-passports-edit.php" data-toggle="modal" data-target="#edit-faq-modal">
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
                                        <td class="text-start">2</td>
                                        <td class="text-start">Lorem</td>
                                        <td class="text-start">Lorem</td>
                                        <td class="text-start">Lorem</td>
                                        <td class="text-start">08/22/2023</td>
                                        <td>
                                            <div class="dropout">
                                                <button class="more">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                                <ul>
                                                    <li>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" id="switch18" switch="bool"
                                                                checked />
                                                            <label for="switch18" data-on-label="Active"
                                                                data-off-label="Expired"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="manage-passports-edit.php" data-toggle="modal" data-target="#edit-faq-modal">
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
        $(' <button><a class="extra-btn width-max-content" data-toggle="modal" data-target="#add-faq-modal" href="">Add</a></button>').insertBefore("#zero-config_filter label");
    });
</script>