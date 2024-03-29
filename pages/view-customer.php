<?php $currentPage = "manage-patient" ?>
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
                                <a class="d-flex align-items-center justify-content-center pl-2"
                                    href="manage-customers.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    <h6 class="card-title p-0">View Details</h6>
                                </a>
                            </div>
                            <!-- <div class="col-md-8 float-right">
                                <a class="extra-btn" href="manage-customers.php">
                                    <img class="back-btn" src="../src/assets/img/left-arrow.svg">
                                    Back
                                </a>
                            </div> -->
                        </div>


                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn p-0">
                            <div class="view-details">
                                <div class="simple-tab">
                                    <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-toggle="tab"
                                                data-target="#home-tab-pane" type="button" role="tab"
                                                aria-controls="home-tab-pane" aria-selected="true">Personal & Medical
                                                details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-toggle="tab"
                                                data-target="#profile-tab-pane" type="button" role="tab"
                                                aria-controls="profile-tab-pane" aria-selected="false">Medical records &
                                                schedules</button>
                                        </li>
                                    </ul> -->

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-md-6 mb-10 tabs23">
                                                    <table>
                                                        <!-- <h4 class="tab-title">Personal information</h4> -->
                                                        <tr class="title">
                                                            <td>Name :</td>
                                                            <td>User ID :</td>
                                                            <td>Date of birth :</td>
                                                            <!-- <td class="description">Address :</td> -->
                                                            <td>Phone Number :</td>
                                                            <td>End Date :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>Raj shinde</td>
                                                            <td>1234567</td>
                                                            <td>14-02-2001</td>
                                                            <!-- <td class="description">Lorem Ipsum is simply dummy text of
                                                                the printing and
                                                                typesetting industry.</td> -->
                                                            <td>+325684591</td>
                                                            <td>22/10/2023</td>
                                                        </tr>

                                                    </table>
                                                    <a class="download-btn-custom mt-3" href="">
                                                        <span>Download user report</span>
                                                        <img src="../src/assets/img/download.svg" />
                                                    </a>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <table>
                                                        <!-- <h4 class="empty-title"></h4> -->
                                                        <tr class="title">
                                                            <td>Email ID :</td>
                                                            <td>Onboarded date :</td>
                                                            <td>Location :</td>
                                                            <td>Start Date :</td>
                                                        </tr>
                                                        <tr class="w-100">
                                                            <td>rajshinde9@gmail.com</td>
                                                            <td>08/20/2023</td>
                                                            <td>NewYork</td>
                                                            <td>03/07/2023</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <!-- <div class="col-md-6 mb-10">
                                                    <table>
                                                        <h4 class="tab-title">Medical Details</h4>
                                                        <tr class="title">
                                                            <td>Diagnosis :</td>
                                                            <td>Primary care doctor:</td>
                                                            <td>Contact number of doctor :</td>
                                                            <td>Hospital preference :</td>
                                                            <td>Allergies :</td>
                                                            <td>Diet Restrictions :</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lorem ipsum</td>
                                                            <td>Lorem ipsum</td>
                                                            <td>Lorem ipsum</td>
                                                            <td>Lorem ipsum</td>
                                                            <td>Lorem ipsum</td>
                                                            <td>Lorem ipsum</td>
                                                        </tr>

                                                    </table>
                                                </div> -->
                                            </div>

                                        </div>
                                        <!-- <div class="tab-pane fade " id="profile-tab-pane" role="tabpanel"
                                            aria-labelledby="profile-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <table>
                                                        <h4 class="tab-title">Medication reminder</h4>
                                                        <tr class="title">
                                                            <td>Medicine name :</td>
                                                            <td>Dosage :</td>
                                                            <td>Medication type :</td>
                                                            <td>Dosage frequency :</td>
                                                            <td>Quantity :</td>
                                                            <td>Refill date :</td>
                                                            <td>Instructions :</td>
                                                            <td>Medicine images :</td>
                                                        </tr>
                                                        <tr style="width: 100%;">
                                                            <td>Vitamin D3</td>
                                                            <td>1 Capsule once before lunch & after dinner</td>
                                                            <td>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</td>
                                                            <td>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</td>
                                                            <td>3 capsule</td>
                                                            <td>14-02-2023</td>
                                                            <td>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</td>
                                                            <td>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-10">
                                                    <table>
                                                        <h4 class="tab-title">Routine details</h4>
                                                        <tr class="title">
                                                            <td>Routine name :</td>
                                                            <td>Routine description :</td>
                                                            <td>Start date :</td>
                                                            <td>Start time :</td>
                                                            <td>End date :</td>
                                                            <td>End time :</td>
                                                        </tr>
                                                        <tr style="width: 100%;">
                                                            <td>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</td>
                                                            <td>14-02-2001</td>
                                                            <td>14-02-2023</td>
                                                            <td>16.51</td>
                                                            <td>14-02-2023</td>
                                                            <td>16.51</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>

                                        </div> -->
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  BEGIN FOOTER  -->

        <!--  END FOOTER  -->
    </div>
</div>
<!-- END MAIN CONTAINER -->


<?php include '../component/footer.php'; ?>