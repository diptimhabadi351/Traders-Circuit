<?php $currentPage = "manage-notification" ?>
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
                                <a href="">Manage Notification / </a>
                                <a href="" class="ml-1"> In App Notification</a>
                            </div>
                            <h6 class="card-title">Manage Notification</h6>
                            <div class="simple-pill">
                                <table id="all" class="table style-3 dt-table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sr no</th>
                                            <th class="text-left">Name</th>
                                            <th class="text-center">Created At</th>
                                            <th class="text-center">Impressions</th>
                                            <th class="text-center">Clicked</th>
                                            <th class="text-center dt-no-sorting">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Welcome Message</td>
                                            <td class="text-center">28/03/24, 1:59:46 pm</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">
                                                <span class="deliver">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">App Testing</td>
                                            <td class="text-center">28/03/24, 1:59:46 pm</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">
                                                <span class="pending">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">New Feature</td>
                                            <td class="text-center">28/03/24, 1:59:46 pm</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">
                                                <span class="deliver">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Welcome Message</td>
                                            <td class="text-center">28/03/24, 1:59:46 pm</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">
                                                <span class="pending">pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">New Feature</td>
                                            <td class="text-center">28/03/24, 1:59:46 pm</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">
                                                <span class="deliver">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">App Testing</td>
                                            <td class="text-center">28/03/24, 1:59:46 pm</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">
                                                <span class="pending">Pending</span>
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
        $('<button class="btns"><div class=row><div class=col-md-6></div><div class=col-md-6><div class="row top-btns"><div class=col-md-2></div><div class=col-md-4><div class=checkbox-dropdown>Filter <i class="fa fa-filter"aria-hidden=true></i><ul class=checkbox-dropdown-list><li><label><input name=city type=checkbox value=delivered>Delivered</label><li><label><input name=city type=checkbox value=pending>Pending</label></ul></div></div><div class=col-md-4><a class="border-btn add-btn mt-0"href=""><i class="fa fa-plus"></i>Add Notification</a></div><div class=col-md-2><a class="border-btn mt-0"href=""><i class="fa fa-trash"></i></a></div></div></div></div></button>').insertAfter(".dt--top-section");
    });
</script>
<script>
    c3 = $('#inapp').DataTable({
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
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 10
    });
</script>