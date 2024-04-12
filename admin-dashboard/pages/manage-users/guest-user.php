<?php $currentPage = "guest-user" ?>
<?php include('../../component/header.php'); ?>
<?php include('../../component/sidebar.php'); ?>
<?php include('../../component/common-modal.php'); ?>
<link rel="stylesheet" type="text/css" href="../../src/plugins/src/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="../../src/plugins/css/light/table/datatable/dt-global_style.css">

<!-- BEGIN LOADER -->
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
                            <h6 class="card-title">
                                <a href="../pages/manage-users/subscribed.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users / Guest-user
                            </h6>
                            <div class="col-12 d-flex align-items-center p-0 mb-4">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5>User Graph</h5>
                                                <select class="form-control w-25" name="" id="">
                                                    <option value="" selected>Monthly</option>
                                                    <option value="">Quarterly</option>
                                                    <option value="">Yearly</option>
                                                </select>
                                            </div>
                                            <div id="guest-user">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center mt-3">Days</h5>
                                    <!-- <h5 class="">Numbers</h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<?php include '../../component/footer.php'; ?>
<script src="../../src/plugins/src/table/datatable/datatables.js"></script>
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

    document.addEventListener("DOMContentLoaded", function() {

        // ------------  User chart starts ------------

        // Data for the chart
        var userChartData = [{
                name: 'Line 1',
                data: [30, 40, 85, 50, 39, 60, 70, 91, 125, 70, 50, 80]
            },
            {
                name: 'Line 2',
                data: [20, 35, 15, 55, 60, 100, 80, 95, 110, 50, 30, 40]
            }
        ];

        // Chart options
        var userOptions = {
            chart: {
                type: 'line',
                zoom: {
                    enabled: false // Disable Zoom and Pan
                },
                toolbar: {
                    show: false // Hide the download button
                }
            },
            series: userChartData,
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            stroke: {
                curve: 'straight',
                width: [4, 4]
            },
            markers: {
                size: 5,
            }
        };

        // Create the chart
        var userChart = new ApexCharts(document.querySelector("#guest-user"), userOptions);
        userChart.render();

        // --------- User chart ends ------------

    });
    // ------------------------------------------------------------------------
</script>