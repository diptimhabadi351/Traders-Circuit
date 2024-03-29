<?php $currentPage = "manage-profile" ?>
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
                            <div class="col-md-4">
                                <h6 class="card-title">Profile</h6>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row widget-content widget-content-area br-8 position-btn m-auto py-3"
                    style="overflow: auto;">
                    <div class="row m-0 p-0 w-100">
                        <div class="col-md-6 d-flex align-items-center justify-content-start mb-4" style="gap: 25px;">
                            <div>
                                <label id="image-upload-button" for="profileImage">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </label>
                                <input class="d-none" type="file" id="profileImage" accept="image/*"
                                    onchange="previewImage(event)">
                                <div id="imagePreview" style="background-image: url('../src/assets/img/mahima.jpg')">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1" style="font-weight: 700;">Akanksha Surve</h5>
                                <p class="m-0">12345678</p>
                                <p class="m-0">Mumbai, Maharashtra</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <a class="download-btn-custom mt-3 custom-width-15 m-0" href="signup.php" style="height: fit-content;">
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                    <div class="row m-0 p-0 w-75 mx-auto">
                        <div class="col-md-6 mb-3">
                            <label for="">First Name</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Last Name</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-6">
                            <label for="">Phone Number</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email Address</label>
                            <input class="form-control" type="email">
                        </div>
                        <div class="col-md-12 mt-3">
                            <a class="download-btn-custom mt-3 custom-width-10 mx-auto" href="">
                                <span>Save</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<?php include '../component/footer.php'; ?>

<script>
    // Select the start and end date inputs
    var startDateInput = document.getElementById("startDate");
    var endDateInput = document.getElementById("endDate");

    // Initialize Flatpickr for the date range with placeholders
    flatpickr(startDateInput, {
        dateFormat: "Y-m-d",
        onChange: function (selectedDates, dateStr) {
            // Set the minimum date for the end date input
            endDatePicker.set("minDate", dateStr);
        }
    });

    var endDatePicker = flatpickr(endDateInput, {
        dateFormat: "Y-m-d",
    });


    function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById('imagePreview');

        // Ensure that a file is selected
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Set the background image of the preview div
                preview.style.backgroundImage = 'url(' + e.target.result + ')';
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(input.files[0]);
        } else {
            // Clear the background image if no file is selected
            preview.style.backgroundImage = 'none';
        }
    }
</script>