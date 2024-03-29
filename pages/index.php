<?php $currentPage = "dashboard" ?>
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
                                <h6 class="card-title">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-center gap-3 p-0 mb-4">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>No of Customers</h5>
                                    <h2 class="m-0 font-weight-bold">08</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators m-0">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <h5>Passports Live Now</h5>
                                                <h2 class="m-0 font-weight-bold">Cheers to Summer</h2>
                                            </div>
                                            <div class="carousel-item">
                                                <h5>Passports Live Now</h5>
                                                <h2 class="m-0 font-weight-bold">Cheers to Summer</h2>
                                            </div>
                                            <div class="carousel-item">
                                                <h5>Passports Live Now</h5>
                                                <h2 class="m-0 font-weight-bold">Cheers to Summer</h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>No of Restaurants</h5>
                                    <h2 class="m-0 font-weight-bold">05</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-center p-0 mb-4">
                        <div class="col-md-6">
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
                                    <div id="user-chart">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5>Sales Graph</h5>
                                        <select class="form-control w-25" name="" id="">
                                            <option value="" selected>Monthly</option>
                                            <option value="">Quarterly</option>
                                            <option value="">Yearly</option>
                                        </select>
                                    </div>
                                    <div id="sales-chart">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 d-flex  p-0 mb-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-start">Recent Transactions</h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="transcation-list">
                                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <label class="m-0" for="">Jennifer Lawrence</label>
                                                <h6 class="font-weight-bold">Cheers to the Summer</h6>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="font-weight-bold">$500</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="transcation-list">
                                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <label class="m-0" for="">Jennifer Lawrence</label>
                                                <h6 class="font-weight-bold">Cheers to the Summer</h6>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="font-weight-bold">$500</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="transcation-list">
                                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <label class="m-0" for="">Jennifer Lawrence</label>
                                                <h6 class="font-weight-bold">Cheers to the Summer</h6>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="font-weight-bold">$500</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-start">Locations</h5>
                                    <img src="../src/assets/img/map.svg" width="100%" height="173px" alt="">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-six">
                            <div class="widget-heading">
                                <div class="task-action">
                                    <div class="user-details">
                                        <img src="../src/assets/img/user-2-svgrepo-com.svg" />
                                        <h3>Welcome ,</h3>
                                        <h4>Kartikey Gautam</h4>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-md-4 col-sm-12 layout-spacing pb-0">
                                            <div data-draggable="true"
                                                class="card simple-title-task ui-sortable-handle">
                                                <div class="card-body">
                                                    <div class="task-header">
                                                        <div class="order-summary">
                                                            <div class="summary-list">
                                                                <div class="w-icon">
                                                                    <img class="img1"
                                                                        src="../src/assets/img/patient(1).svg" />
                                                                </div>
                                                                <div class="w-summary-details">
                                                                    <div class="w-summary-info">
                                                                        <h6>Total patients</h6>
                                                                        <p class="summary-count">50</p>
                                                                    </div>

                                                                    <div class="w-summary-stats">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-gradient-success"
                                                                                role="progressbar" style="width: 50%"
                                                                                aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-summary-info mt-0">
                                                                        <p class="summary-text">50 % increase in 30 days
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 layout-spacing pb-0">
                                            <div data-draggable="true"
                                                class="card simple-title-task ui-sortable-handle">
                                                <div class="card-body">
                                                    <div class="task-header">
                                                        <div class="order-summary">
                                                            <div class="summary-list">
                                                                <div class="w-icon">
                                                                    <img class="img2"
                                                                        src="../src/assets/img/heart-add(1).svg" />
                                                                </div>
                                                                <div class="w-summary-details">

                                                                    <div class="w-summary-info">
                                                                        <h6>Total caregiver</h6>
                                                                        <p class="summary-count">80</p>
                                                                    </div>

                                                                    <div class="w-summary-stats">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-gradient-warning"
                                                                                role="progressbar" style="width: 80%"
                                                                                aria-valuenow="80" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-summary-info mt-0">
                                                                        <p class="summary-text">30 % increase in 30 days
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 layout-spacing pb-0">
                                            <div data-draggable="true"
                                                class="card simple-title-task ui-sortable-handle">
                                                <div class="card-body">
                                                    <div class="task-header">
                                                        <div class="order-summary">
                                                            <div class="summary-list">
                                                                <div class="w-icon">
                                                                    <img class="img3"
                                                                        src="../src/assets/img/download-cloud.svg" />
                                                                </div>
                                                                <div class="w-summary-details">

                                                                    <div class="w-summary-info">
                                                                        <h6>App downloads</h6>
                                                                        <p class="summary-count">40</p>
                                                                    </div>

                                                                    <div class="w-summary-stats">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-gradient-secondary"
                                                                                role="progressbar" style="width: 40%"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-summary-info mt-0">
                                                                        <p class="summary-text">15 % increase in 30 days
                                                                        </p>
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

                    </div> -->
                    <!-- <div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="grpah-details">
                                        <p class="w-value">New patients</p>
                                        <h5 class="">%20 High than last monthy</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="graph2">
                                <div class="grpah-details2">
                                    <strong><span>100</span></strong>
                                    <span>Overall</span>
                                </div>
                                <div class="right-divider"></div>
                                <div class="grpah-details2">
                                    <strong><span>50</span></strong>
                                    <span>Monthly</span>
                                </div>
                                <div class="right-divider"></div>
                                <div class="grpah-details2">
                                    <strong><span>15</span></strong>
                                    <span>Daily</span>
                                </div>
                            </div>

                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8">
                            <div class="index-card">
                                <div class="grpah-details">
                                    <p class="w-value">New patients</p>
                                    <a href="manage-patient">View All</a>
                                </div>
                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-start">Name</th>
                                            <th>Email address</th>
                                            <th>Contact Number</th>
                                            <th>Caregiver</th>
                                            <th>Subscription Plan</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td class="text-start">Raj Shinde</td>
                                            <td>rajshinde9@gmail.com</td>
                                            <td>+5624878954</td>
                                            <td>Kartikey Gautam</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropout">
                                                    <button class="more">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </button>
                                                    <ul>
                                                        <li>
                                                            <a href="view-customer.php">
                                                                <img src="../src/assets/img/view.svg" />
                                                                <span>View Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#archive-modal">
                                                                <img src="../src/assets/img/archive.svg" />
                                                                <span>Archive Patient</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="../src/assets/img/download.svg" />
                                                                <span>Download Data</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#suspend-modal">
                                                                <img src="../src/assets/img/stop.svg" />
                                                                <span>Suspend Patient</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Raj Shinde</td>
                                            <td>rajshinde9@gmail.com</td>
                                            <td>+5624878954</td>
                                            <td>Kartikey Gautam</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropout">
                                                    <button class="more">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </button>
                                                    <ul>
                                                        <li>
                                                            <a href="view-customer.php">
                                                                <img src="../src/assets/img/view.svg" />
                                                                <span>View Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#archive-modal">
                                                                <img src="../src/assets/img/archive.svg" />
                                                                <span>Archive Patient</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="../src/assets/img/download.svg" />
                                                                <span>Download Data</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#suspend-modal">
                                                                <img src="../src/assets/img/stop.svg" />
                                                                <span>Suspend Patient</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Raj Shinde</td>
                                            <td>rajshinde9@gmail.com</td>
                                            <td>+5624878954</td>
                                            <td>Kartikey Gautam</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropout">
                                                    <button class="more">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </button>
                                                    <ul>
                                                        <li>
                                                            <a href="view-customer.php">
                                                                <img src="../src/assets/img/view.svg" />
                                                                <span>View Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#archive-modal">
                                                                <img src="../src/assets/img/archive.svg" />
                                                                <span>Archive Patient</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="../src/assets/img/download.svg" />
                                                                <span>Download Data</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#suspend-modal">
                                                                <img src="../src/assets/img/stop.svg" />
                                                                <span>Suspend Patient</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Raj Shinde</td>
                                            <td>rajshinde9@gmail.com</td>
                                            <td>+5624878954</td>
                                            <td>Kartikey Gautam</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropout">
                                                    <button class="more">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </button>
                                                    <ul>
                                                        <li>
                                                            <a href="view-customer.php">
                                                                <img src="../src/assets/img/view.svg" />
                                                                <span>View Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#archive-modal">
                                                                <img src="../src/assets/img/archive.svg" />
                                                                <span>Archive Patient</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="../src/assets/img/download.svg" />
                                                                <span>Download Data</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#suspend-modal">
                                                                <img src="../src/assets/img/stop.svg" />
                                                                <span>Suspend Patient</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Raj Shinde</td>
                                            <td>rajshinde9@gmail.com</td>
                                            <td>+5624878954</td>
                                            <td>Kartikey Gautam</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropout">
                                                    <button class="more">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </button>
                                                    <ul>
                                                        <li>
                                                            <a href="view-customer.php">
                                                                <img src="../src/assets/img/view.svg" />
                                                                <span>View Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#archive-modal">
                                                                <img src="../src/assets/img/archive.svg" />
                                                                <span>Archive Patient</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="../src/assets/img/download.svg" />
                                                                <span>Download Data</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-toggle="modal" data-target="#suspend-modal">
                                                                <img src="../src/assets/img/stop.svg" />
                                                                <span>Suspend Patient</span>
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



<?php include '../component/footer.php'; ?>
<script src="../src/plugins/src/table/datatable/datatables.js"></script>
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

    document.addEventListener("DOMContentLoaded", function () {

        // ------------  User chart starts ------------

        // Data for the chart
        var userChartData = [
            {
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
                curve: 'smooth',
                width: [4, 4]
            }
        };

        // Create the chart
        var userChart = new ApexCharts(document.querySelector("#user-chart"), userOptions);
        userChart.render();

        // --------- User chart ends ------------


        // --------- Sales chart starts ------------

        var salesChartData = [
            {
                name: 'Bar Line',
                data: [30, 60, 35, 20, 49, 90, 70, 91, 125, 44, 47, 67]
            }
        ];

        // Chart options
        var salesOptions = {
            chart: {
                type: 'bar',
                zoom: {
                    enabled: false // Disable Zoom and Pan
                },
                toolbar: {
                    show: false // Hide the download button
                }
            },
            series: salesChartData,
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            plotOptions: {
                bar: {
                    columnWidth: '30%' // Adjust the bar width as needed
                }
            },
            dataLabels: {
                enabled: false // Hide the values on the bars
            }
        };

        // Create the chart
        var salesChart = new ApexCharts(document.querySelector("#sales-chart"), salesOptions);
        salesChart.render();

        // --------- Sales chart ends ------------
    });

</script>