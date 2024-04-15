<?php $currentPage = "subscribed-edit" ?>
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
                                Manage Users / user / subscribed / edit
                            </h6>
                            <div id="accordion" class="edit-dropdown">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingOne">
                                        <h6 class="mb-0">Personal Details
                                        </h6>
                                        <button class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <img src="../src/assets/img/drop.svg" alt="">
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form style="border-right: 1px solid;">
                                                        <p>
                                                            <label class="w-25" for="">Name :</label>
                                                            <input class="w-50" style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="text" required>
                                                        </p>
                                                        <p>
                                                            <label class="w-25" for="">Location :</label>
                                                            <input class="w-50" style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="text">
                                                        </p>
                                                        <p>
                                                            <label class="w-25" for="">Phone :</label>
                                                            <input class="w-50" style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="tel">
                                                        </p>
                                                    </form>

                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <p>
                                                            <label class="w-25" for="">Email :</label>
                                                            <input class="w-50" style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="email">
                                                        </p>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingTwo">
                                        <h6 class="mb-0">Risk Profile Analysis
                                        </h6>
                                        <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <img src="../src/assets/img/drop.svg" alt="">
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form style="border-right: 1px solid;">
                                                        <p class="d-flex align-items-start ">
                                                            <label class="w-50" for="">What is your investment goal?</label>
                                                            <input style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="text" required>
                                                        </p>
                                                        <p class="d-flex align-items-start ">
                                                            <label class="w-50" for="">Add Investment Experience field</label>
                                                            <input style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="text">
                                                        </p>
                                                        <p class="d-flex align-items-start ">
                                                            <label class="w-50" for="">What types of stocks do you prefer?</label>
                                                            <input style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="tel">
                                                        </p>
                                                    </form>

                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <p class="d-flex align-items-start ">
                                                            <label class="w-50" for="">What is your Risk <br> Perception?</label>
                                                            <input style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="email">
                                                        </p>
                                                        <p class="d-flex align-items-start ">
                                                            <label class="w-50" for="">What is your favoured <br> Market Condition?</label>
                                                            <input style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="email">
                                                        </p>
                                                        <p class="d-flex align-items-start ">
                                                            <label class="w-50" for="">What is your Emotional Response to Market Volatility?</label>
                                                            <input style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="email">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingThree">
                                        <h6 class="mb-0">KYC Details
                                        </h6>
                                        <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <img src="../src/assets/img/drop.svg" alt="">
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="mb-4">Pan Card</h6>
                                                    <form style="border-right: 1px solid;">
                                                        <p>
                                                            <label class="w-25" for="">Enter Pan no.</label>
                                                            <input class="w-50" style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="text" required>
                                                        </p>
                                                        <!-- <p>
                                                            <label class="mr-2 mb-3" style="font-weight: 600;">Front Side :</label>
                                                            <input class="w-50" type="file">
                                                        </p> -->
                                                        <div class="img-preview">
                                                            <label class="file">Front Side :
                                                                <input type="file" id="panFrontImageInput" onchange="imagePreviewer('panFrontImageInput', 'panFrontImagePreview')" accept="image/*" aria-label="File browser">
                                                            </label>
                                                            <div id="panFrontImagePreview" class="preview"></div>
                                                        </div>
                                                        <div class="img-preview">
                                                            <label class="file">Back Side :
                                                                <input type="file" id="panBackImageInput" onchange="imagePreviewer('panBackImageInput', 'panBackImagePreview')" accept="image/*" aria-label="File browser">
                                                            </label>
                                                            <div id="panBackImagePreview" class="preview"></div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="mb-4">Adhaar Card</h6>
                                                    <form>
                                                        <p>
                                                            <label class="w-25" for="">Enter Aadhar no.</label>
                                                            <input class="w-50" style="border-radius: 6px; border: 1px solid #ccc; padding: 4px 10px;" type="email">
                                                        </p>
                                                        <div class="img-preview">
                                                            <label class="file">Front Side :
                                                                <input type="file" id="aadharFrontImageInput" onchange="imagePreviewer('aadharFrontImageInput', 'aadharFrontImagePreview')" accept="image/*" aria-label="File browser">
                                                            </label>
                                                            <div id="aadharFrontImagePreview" class="preview"></div>
                                                        </div>
                                                        <div class="img-preview">
                                                            <label class="file">Back Side :
                                                                <input type="file" id="aadharBackImageInput" onchange="imagePreviewer('aadharBackImageInput', 'aadharBackImagePreview')" accept="image/*" aria-label="File browser">
                                                            </label>
                                                            <div id="aadharBackImagePreview" class="preview"></div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 tabbtn">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingFour">
                                        <h6 class="mb-0">Portfolio Review (optional) *
                                        </h6>
                                        <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <img src="../src/assets/img/drop.svg" alt="">
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="gap: 15px;">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-Portfolio1-tab" data-toggle="pill" href="#pills-Portfolio1" role="tab" aria-controls="pills-Portfolio1" aria-selected="true">Portfolio 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-Portfolio2-tab" data-toggle="pill" href="#pills-Portfolio2" role="tab" aria-controls="pills-Portfolio2" aria-selected="false">Portfolio 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-Portfolio3-tab" data-toggle="pill" href="#pills-Portfolio3" role="tab" aria-controls="pills-Portfolio3" aria-selected="false">Portfolio 3</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-Portfolio4-tab" data-toggle="pill" href="#pills-Portfolio4" role="tab" aria-controls="pills-Portfolio4" aria-selected="false">Portfolio 4</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-Portfolio1" role="tabpanel" aria-labelledby="pills-Portfolio1-tab">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <table class="w-100" style="border-right: 1px solid;">
                                                                    <tbody class="d-flex">
                                                                        <tr class="w-50 d-flex flex-column gap-3">
                                                                            <td>
                                                                                <h6>Broker Name :</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>Country :</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>Portfolio Value :</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>% P&L :</h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class=" d-flex flex-column gap-3">
                                                                            <td>
                                                                                <h6>Groww</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>India</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>₹ 40,000</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>-37,000</h6>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        Holdings :
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <table class="adjusted-table w-100">
                                                                            <thead class="table-head">
                                                                                <tr class="" style="line-height: 3;">
                                                                                    <th>Stock Name</th>
                                                                                    <th>AVG Price</th>
                                                                                    <th>Quantity</th>
                                                                                    <th>Exchange</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="table-body">
                                                                                <tr class="">
                                                                                    <td>TATA MOTORS</td>
                                                                                    <td>416.2</td>
                                                                                    <td>3</td>
                                                                                    <td>BSE</td>
                                                                                </tr>
                                                                                <tr class="">
                                                                                    <td>ICICI DIRECT</td>
                                                                                    <td>500.01</td>
                                                                                    <td>4</td>
                                                                                    <td>NSE</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-4 mb-4">Review :</h5>
                                                    <div class="row review">
                                                        <div class="col-md-6">
                                                            <div class='card mb-3'><label for='name'>Performance Overview:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                            <div class='card mb-3'><label for='name'>Asset Allocation::</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                            <div class='card mb-3'><label for='name'>Individual Holdings Analysis:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                            <div class='card'><label for='name'>Performance Attribution:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class='card mb-3'><label for='name'>Risk Assessment:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                            <div class='card mb-3'><label for='name'>Dividend Income:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                            <div class='card mb-3'><label for='name'>Transaction History:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>
                                                            <div class='card'><label for='name'>Customized Recommendations:</label>
                                                                <textarea type='text' value="" placeholder="For Your Review"></textarea>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-6">
                                                            <label for="">Last Update Date :</label>
                                                            <input type="date" style="border-radius: 6px;border: 1px solid #ccc;padding: 5px 10px;">
                                                        </div>
                                                        <div class="col-md-6"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-Portfolio2" role="tabpanel" aria-labelledby="pills-Portfolio2-tab">sec</div>
                                                <div class="tab-pane fade" id="pills-Portfolio3" role="tabpanel" aria-labelledby="pills-Portfolio3-tab">Third</div>
                                                <div class="tab-pane fade" id="pills-Portfolio4" role="tabpanel" aria-labelledby="pills-Portfolio4-tab">Foorth</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row edit-dropdown-btns">
                                <div class="col-md-9"></div>
                                <div class="col-md-3 d-flex justify-content-between">
                                    <button type="button" class="btn grey-btn ml-5">Cancel</button>
                                    <button type="button" class="btn red-btn">Save</button>
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

    // img-preview


    function imagePreviewer(inputId, previewerId) {
        console.log(inputId, previewerId)
        console.log("function called")
        var files = $(`#${inputId}`)[0].files,
            file = files[0],
            filename = file.name,
            $preview = $(`#${previewerId}`),
            img = document.createElement("img"),
            reader = new FileReader();

        img.file = file;
        img.classList.add("img-responsive");
        $preview.html(img);

        reader.onload = (function(aImg) {
            return function(e) {
                aImg.src = e.target.result;
            };
        })(img);

        reader.readAsDataURL(file);
    };
</script>