<?php $currentPage = "manage-transcation" ?>
<?php include('../component/header.php'); ?>
<?php include('../component/sidebar.php'); ?>
<?php include('../component/common-modal.php'); ?>

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
                                <h6 class="card-title">Role details</h6>
                            </div>
                            <div class="col-md-8 float-right">
                                <a class="extra-btn" href="manage-role.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    Back
                                </a>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn viewroles">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget-content widget-content-area br-8 position-btn">
                                        <div class="card-content">
                                            <h3>Operations</h3>
                                            <h5>Total users with this role : 5</h5>
                                            <ul>
                                                <li>Limited admin control</li>
                                                <li>View and edit financial summaries</li>
                                                <li>Enabled bulk reports</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="widget-content widget-content-area br-8 position-btn">
                                        <table id="style-1" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column dt-no-sorting"> Record Id </th>
                                                    <th>User</th>
                                                    <th>Email address</th>
                                                    <th>Joining date</th>
                                                    <th class="text-center dt-no-sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="checkbox-column"> 1 </td>
                                                    <td>Joining date</td>
                                                    <td>Kartikeygautam@gmail.com</td>
                                                    <td>15-02-2022</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#edit-role-modal">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column"> 1 </td>
                                                    <td>Joining date</td>
                                                    <td>Kartikeygautam@gmail.com</td>
                                                    <td>15-02-2022</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#edit-role-modal">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column"> 1 </td>
                                                    <td>Joining date</td>
                                                    <td>Kartikeygautam@gmail.com</td>
                                                    <td>15-02-2022</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#edit-role-modal">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column"> 1 </td>
                                                    <td>Joining date</td>
                                                    <td>Kartikeygautam@gmail.com</td>
                                                    <td>15-02-2022</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#edit-role-modal">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column"> 1 </td>
                                                    <td>Joining date</td>
                                                    <td>Kartikeygautam@gmail.com</td>
                                                    <td>15-02-2022</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#edit-role-modal">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column"> 1 </td>
                                                    <td>Joining date</td>
                                                    <td>Kartikeygautam@gmail.com</td>
                                                    <td>15-02-2022</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#edit-role-modal">
                                                            <img src="../src/assets/img/edit.svg" />
                                                            <span>Edit</span>
                                                        </a>
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
    </div>
</div>

<?php include '../component/footer.php'; ?>

<script src="../src/plugins/src/table/datatable/datatables.js"></script>
<script>
    c1 = $('#style-1').DataTable({
        headerCallback: function (e, a, t, n, s) {
            e.getElementsByTagName("th")[0].innerHTML = `
                <div class="form-check form-check-primary d-block">
                    <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                </div>`
        },
        columnDefs: [{
            targets: 0, width: "30px", className: "", orderable: !1, render: function (e, a, t, n) {
                return `
                    <div class="form-check form-check-primary d-block">
                        <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                    </div>`
            }
        }],
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
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 10
    });

    multiCheck(c1);
</script>