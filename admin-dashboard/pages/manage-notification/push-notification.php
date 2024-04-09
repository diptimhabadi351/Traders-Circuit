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
                                <a href="" class="ml-1"> Push Notification</a>
                            </div>
                            <h6 class="card-title">Manage Notification</h6>
                            <div class="simple-pill">
                                <ul class="nav " id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-scheduled-tab" data-toggle="pill" href="#pills-scheduled" role="tab" aria-controls="pills-scheduled" aria-selected="false">Scheduled</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-draft-tab" data-toggle="pill" href="#pills-draft" role="tab" aria-controls="pills-draft" aria-selected="false">Draft</a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <table id="all" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column dt-no-sorting sorting_asc text-center" rowspan="1" colspan="1" aria-label=" Record Id " style="width: 70px;">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </th>
                                                    <th class="text-center">Sr no</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Created At</th>
                                                    <th class="text-center">Sent</th>
                                                    <th class="text-center">Clicked</th>
                                                    <th class="text-center dt-no-sorting">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="pending">pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <table id="sent" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                <th class="checkbox-column dt-no-sorting sorting_asc text-center" rowspan="1" colspan="1" aria-label=" Record Id " style="width: 70px;">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </th>
                                                    <th class="text-center">Sr no</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Created At</th>
                                                    <th class="text-center">Sent</th>
                                                    <th class="text-center">Clicked</th>
                                                    <th class="text-center dt-no-sorting">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="pending">pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pills-scheduled" role="tabpanel" aria-labelledby="pills-scheduled-tab">
                                        <table id="scheduled" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                <th class="checkbox-column dt-no-sorting sorting_asc text-center" rowspan="1" colspan="1" aria-label=" Record Id " style="width: 70px;">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </th>
                                                    <th class="text-center">Sr no</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Created At</th>
                                                    <th class="text-center">Sent</th>
                                                    <th class="text-center">Clicked</th>
                                                    <th class="text-center dt-no-sorting">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="pending">pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pills-draft" role="tabpanel" aria-labelledby="pills-draft-tab">
                                        <table id="draft" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                <th class="checkbox-column dt-no-sorting sorting_asc text-center" rowspan="1" colspan="1" aria-label=" Record Id " style="width: 70px;">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </th>
                                                    <th class="text-center">Sr no</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Created At</th>
                                                    <th class="text-center">Sent</th>
                                                    <th class="text-center">Clicked</th>
                                                    <th class="text-center dt-no-sorting">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <span class="pending">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">Welcome Message</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <span class="pending">pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">New Feature</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">
                                                        <span class="deliver">Delivered</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column sorting_1 text-center">
                                                        <div class="form-check form-check-primary d-block new-control">
                                                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">App Testing</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
                                                    <td class="text-center">28/03/24, 1:59:46 pm</td>
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
    </div>
</div>

<?php include '../../component/footer.php'; ?>


<script>
    $(document).ready(function() {
        $('<button class="btns"><div class=row><div class=col-md-6></div><div class=col-md-6><div class="row top-btns"><div class=col-md-2></div><div class=col-md-4><div class=checkbox-dropdown>Filter <i class="fa fa-filter"aria-hidden=true></i><ul class=checkbox-dropdown-list><li><label><input name=city type=checkbox value=delivered>Delivered</label><li><label><input name=city type=checkbox value=pending>Pending</label></ul></div></div><div class=col-md-4><a class="border-btn add-btn mt-0"href=""><i class="fa fa-plus"></i>Add Notification</a></div><div class=col-md-2><a class="border-btn mt-0"href="" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a></div></div></div></div></button>').insertAfter(".dt--top-section");
    });
</script>
<script>
    $('#all').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page PAGE of _PAGES_",
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
    $('#sent').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page PAGE of _PAGES_",
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
    $('#scheduled').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page PAGE of _PAGES_",
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
    $('#draft').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page PAGE of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10
    });
</script>