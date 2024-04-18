<?php $currentPage = "manage-products" ?>
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
    <div id="content" class="main-content manage-products-main">
        <div class="layout-px-spacing">
            <div class="middle-content  p-0 container">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <!-- <div class="breadcrumb">
                                <a href="">Manage Notification / </a>
                                <a href="" class="ml-1"> Push Notification</a>
                            </div> -->
                            <h6 class="card-title">Manage Products</h6>
                            <div class="simple-pill">
                                <ul class="nav " id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-options-tab" data-toggle="pill" href="#pills-options" role="tab" aria-controls="pills-options" aria-selected="true">Options</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-multibagger-tab" data-toggle="pill" href="#pills-multibagger" role="tab" aria-controls="pills-multibagger" aria-selected="false">Multibagger</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-swing-tab" data-toggle="pill" href="#pills-swing" role="tab" aria-controls="pills-swing" aria-selected="false">Swing Trade</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-unseen-tab" data-toggle="pill" href="#pills-unseen" role="tab" aria-controls="pills-unseen" aria-selected="false">Explore the unseen</a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-options" role="tabpanel" aria-labelledby="pills-options-tab">
                                        <div class="top-tabel manage-products">
                                            <div class="row ">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3">
                                                    <ul class="navbar-item flex-row ms-lg-auto ms-0 mb-3">
                                                        <li class=" dropdown action-dropdown  order-lg-0 order-1">
                                                            <a href="../pages/manage-products/manage-products-edit.php" class="d-flex align-items-center justify-content-center filter-btn">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                <h6 class="ml-2 mb-0">Edit Product</h6>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#" class="common-btn d-flex align-items-center justify-content-center filter-btn">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        <h6 class="ml-2 mb-0">Delete Product</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="">Back Side :</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" value="Option" readonly>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="">Product Description :</label>
                                            </div>
                                            <div class="col-md-4">
                                                <textarea name="" id="" class="card" readonly>It is a long established fact that a reader will be distracted by the readable content
                                                It is a long established fact that a reader will be distracted by the readable content
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="">Product Pricing :</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" value="2299" readonly>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="">Product Tier :</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" value="Monthly" readonly>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <label for="">App Template :</label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="card">
                                                    <div class="row card-head">
                                                        <div class="col-md-3">
                                                            <img src="../src/assets/img/indi-bulls.svg" class="indi-logo" alt="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6>
                                                                Indiabulls Housing
                                                                Finance Ltd
                                                            </h6>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button class="btn btn-success">Buy</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-bottom">
                                                        <div>
                                                            <p>Entry Price</p>
                                                            <span>₹ 196.50 - ₹ 197</span>
                                                        </div>
                                                        <div>
                                                            <p>Target Price</p>
                                                            <span>₹ 196.50</span>
                                                        </div>
                                                        <div>
                                                            <p>Stop Loss</p>
                                                            <span>₹ 196.6</span>
                                                        </div>
                                                        <div>
                                                            <p>Time Horizon</p>
                                                            <span>4-5 Days</span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-4 whatsApp-template">
                                            <div class="col-md-3">
                                                <label for="">WhatsApp Template :</label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="card">
                                                    <p class="para">Dear User</p>
                                                    <p class="mb-2 para" >Book your OPTION TRADE profit in BUY LT MAR 3620 CE</p>

                                                    <p class="mb-0 para">
                                                        <label for="" class="mb-0 para">Exit Price :</label>
                                                        <span class="para">34</span>
                                                    </p>
                                                    <p>
                                                        <label for="" class="mb-0 para">Exit Date :</label>
                                                        <span class="para">22nd March 2024</span>
                                                    </p>
                                                    <p class="mb-0 para">
                                                        <label for="" class="mb-0 para">Buy Price:</label>
                                                        <span class="para">27.5</span>
                                                    </p>
                                                    <p>
                                                        <label for="" class="mb-0 para">Exit Date:</label>
                                                        <span class="para">22nd March 2024</span>
                                                    </p>
                                                    <p class="mb-0 para">
                                                        <label for="" class="mb-0 para">Profit per lot :</label>
                                                        <span class="para">Rs. 1950</span>
                                                    </p>
                                                    <p class="mb-0 para">
                                                        <label for="" class="mb-0 para">Return :</label>
                                                        <span class="para">24%</span>
                                                    </p>
                                                    <p>
                                                        <label for="" class="mb-0 para">Days :</label>
                                                        <span class="para">1</span>
                                                    </p>
                                                    <p class="para">Team Trader’s Circuit
                                                        SEBI RA Number INH000010876
                                                        Reply STOP to Unsubscribe</p>

                                                        <a href="">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                            Open</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-multibagger" role="tabpanel" aria-labelledby="pills-multibagger-tab">
                                        Multibagger
                                    </div>
                                    <div class="tab-pane fade" id="pills-swing" role="tabpanel" aria-labelledby="pills-swing-tab">
                                        Swing
                                    </div>
                                    <div class="tab-pane fade" id="pills-unseen" role="tabpanel" aria-labelledby="pills-unseen-tab">
                                        Unseen
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