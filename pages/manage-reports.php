<?php $currentPage = "manage-reports" ?>
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
                                <h6 class="card-title">Manage Reports & Analysis</h6>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row widget-content widget-content-area br-8 position-btn m-auto py-3" style="overflow: auto;">
                    <div class="col-md-6">
                        <label for="">Select Modules</label>
                        <select class="form-control">
                            <option value="">dummny</option>
                            <option value="">dummny</option>
                            <option value="">dummny</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="startDate">Start Date:</label>
                        <input class="form-control" placeholder="Select start date" type="text" id="startDate">
                    </div>
                    <div class="col-md-6">
                        <label for="endDate">End Date:</label>
                        <input class="form-control" placeholder="Select end date" type="text" id="endDate">
                    </div>
                    <div class="col-md-12">
                        <a class="download-btn-custom mt-3 custom-width-10" href="">
                            <span>Download</span>
                        </a>
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
</script>