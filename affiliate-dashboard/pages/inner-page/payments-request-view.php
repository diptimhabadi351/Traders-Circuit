<?php $currentPage = 'payments-request-view'; ?>
<?php include('../../component/header.php') ?>
<?php include('../../component/navbar.php') ?>


<div class="main-sec reff-view">
    <div class="row">
        <div class="col-md-4 left">
            <h6 class="card-title mt-4">
                <a href="inner-page/payments.php">
                    <img src="../src/assets/img/arrow-left.svg" alt="">
                </a>
                Payments / Request / View
            </h6>
        </div>
    </div>
    <div class="row mt-5 m-4">
        <div class="col-md-6">
            <table class="w-100">
                <tbody class="d-flex">
                    <tr class="w-50 d-flex flex-column gap-3">
                        <td>
                            <h5>Transaction ID :</h5>
                        </td>
                        <td>
                            <h5>User ID :</h5>
                        </td>
                        <td>
                            <h5>Amount :</h5>
                        </td>
                        <td>
                            <h5>Category :</h5>
                        </td>
                        <td>
                            <h5>User ID :</h5>
                        </td>
                        <td>
                            <h5>Subscription Date :</h5>
                        </td>
                        <td>
                            <h5>Tenure :</h5>
                        </td>
                        <td>
                            <h5>Registration Date :</h5>
                        </td>

                    </tr>
                    <tr class=" d-flex flex-column gap-3">
                        <td>
                            <h5>*156323568</h5>
                        </td>
                        <td>
                            <h5>*156323568</h5>
                        </td>
                        <td>
                            <h5>499</h5>
                        </td>
                        <td>
                            <h5>*156323568</h5>
                        </td>
                        <td>
                            <h5>01/01/24</h5>
                        </td>
                        <td>
                            <h5>Multibagger</h5>
                        </td>
                        <td>
                            <h5>Monthly</h5>
                        </td>
                        <td>
                            <h5>Monthly</h5>
                        </td>
                    </tr>
                </tbody>
            </table>
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