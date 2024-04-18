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
                            <div class="simpleforms">
                                <div class="view-details Article">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="company-name" class="label">Message Name</label>
                                                <input type="text" class="form-control" id="company-name" value="Lorem ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="notification-card">
                                                <h2>1. Select User</h2>
                                                <div class="form-group radio-btn">
                                                    <input type="radio" name="radio" class="form-control" id="radio1" value="Lorem ipsum">
                                                    <label for="radio" class="label">Send to Total Subscriptions</label>
                                                </div>
                                                <div class="form-group radio-btn">
                                                    <input type="radio" name="radio" class="form-control" id="radio2" value="Lorem ipsum">
                                                    <label for="radio" class="label">Send to Particular Subscriptions</label>
                                                </div>
                                                <!-- onclick hide this div -->
                                                <div class="radio-btn-checkbox">
                                                    <div class="form-group checkbox_subscription">
                                                        <input type="checkbox" class="form-control" value="Lorem ipsum">
                                                        <label class="label">Subscribed</label>
                                                    </div>
                                                    <div class="form-group checkbox_subscription">
                                                        <input type="checkbox" class="form-control" value="Lorem ipsum">
                                                        <label class="label">Unsubscribed</label>
                                                    </div>
                                                </div>
                                                <!-- onclick hide this div -->

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="notification-card">
                                                <h2>2. Select User</h2>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label for="company-name" class="label">Title</label>
                                                            <input type="text" class="form-control" id="company-name" value="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="company-name" class="label">Message</label>
                                                            <input type="text" class="form-control" id="company-name" value="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="company-name" class="label">Image</label>
                                                            <input type="file" class="form-control" id="company-name" value="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="company-name" class="label">Launch URL</label>
                                                            <input type="url" class="form-control" id="company-name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="../../admin-dashboard/src/assets/images/iphonelight.png" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="notification-card">
                                                <h2>3. Delivery Schedule</h2>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>When should this message start sending ?</h3>
                                                        <div class="form-group radio-btn ">
                                                            <input type="radio" class="form-control" name="radio2" id="radi02" value="">
                                                            <label for="company-name" class="label">Immediately</label>
                                                        </div>
                                                        <div class="form-group radio-btn ">
                                                            <input type="radio" class="form-control" name="radio2" id="radi02" value="">
                                                            <label for="company-name" class="label">Specific Time</label>
                                                        </div>
                                                        <div class="form-group checkbox_subscription">
                                                            <input type="date" class="form-control" value="March 28, 2024 / 5:42 PM">
                                                        </div>
                                                        <br>
                                                        <h3>Per user optimization ?</h3>
                                                        <div class="form-group radio-btn ">
                                                            <input type="radio" class="form-control" name="radio2" id="radi02" value="">
                                                            <label for="company-name" class="label">Send to everyone at the same time</label>
                                                        </div>
                                                        <div class="form-group radio-btn ">
                                                            <input type="radio" class="form-control" name="radio2" id="radi02" value="">
                                                            <label for="company-name" class="label">Custom time per user time zone</label>
                                                        </div>
                                                        <!-- onclick hide this div -->
                                                        <div class="radio-btn-checkbox">
                                                            <div class="form-group checkbox_subscription">
                                                                <input type="checkbox" class="form-control" value="Lorem ipsum">
                                                                <label class="label">Subscribed</label>
                                                            </div>
                                                            <div class="form-group checkbox_subscription">
                                                                <input type="checkbox" class="form-control" value="Lorem ipsum">
                                                                <label class="label">Unsubscribed</label>
                                                            </div>
                                                        </div>
                                                        <!-- onclick hide this div -->
                                                        <div class="form-group checkbox_subscription">
                                                            <input type="time" class="form-control" value="March 28, 2024 / 5:42 PM">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                           <!-- onclick hide this div -->
                                                        <div class="schedule-content">
                                                            <i class="fa fa-info"></i>
                                                            <p>Message will start sending Thursday, March 28, 2024 5:42 PM UTC+05:30 and will send when it is 5:44 PM in each user's timezone</p>
                                                        </div>
                                                           <!-- onclick hide this div -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dashboard-btns">
                                            <a href="" class="red-btn">Send Now</a>
                                            <a href="" class="border-btn">Save</a>
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

<?php include '../../component/footer.php'; ?>