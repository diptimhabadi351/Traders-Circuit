<?php $currentPage = 'refferal'; ?>
<?php include('../../component/header.php') ?>
<?php include('../../component/navbar.php') ?>

<div class="main-container m-4" id="container">
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
                                    <a href="inner-page/index.php">
                                        <img src="../src/assets/img/arrow-left.svg" alt="">
                                    </a>
                                    My Referrals / List Of Referrals
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing" style="position: absolute;">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <!-- <div class="user-filter-div">
                                <div class="dropdown">
                                    <button class="btn btn-light-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Filter
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <table id="user-listtab" class="table dt-table-hover" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="checkbox-column dt-no-sorting">#</th>
                                        <th class="checkbox-column dt-no-sorting">Sr.no</th>
                                        <th class="">User ID</th>
                                        <th class="">Category</th>
                                        <th>Subscription date</th>
                                        <th>Downloaded Date</th>
                                        <th class="no-content">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php for ($x = 0; $x <= 6; $x++) { ?>
                                        <tr>
                                            <td class="checkbox-column"><input type="checkbox"></td>
                                            <td class="checkbox-column"><?php echo $x + 1 ?></td>
                                            <td>*1235468</td>
                                            <td>Downloaded</td>
                                            <td>01/04/24</td>
                                            <td>02/04/2024</td>
                                            <td>
                                                <div class="actions-btn">
                                                    <a href="inner-page/my-refferal-view.php">
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



<?php include('../../component/footer.php') ?>
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