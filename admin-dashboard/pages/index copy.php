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
                                <h6 class="card-title">Home</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
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

                    </div>
                    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include '../component/footer.php'; ?>
<script src="../src/plugins/src/table/datatable/datatables.js"></script>