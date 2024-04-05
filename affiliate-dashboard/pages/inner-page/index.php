<?php $currentPage = 'dashboard'; ?>
<?php include('../../component/header.php') ?>
<?php include('../../component/navbar.php') ?>

<section class="main-sec">
    <section class="dash">
        <div class="container ">
            <div class="row">
                <h2 class="mb-3">Dashboard</h2>
                <div class="col-md-3">
                    <div class="profile-image  mt-4 pe-md-4" style="width: fit-content;">
                        <div class="img-uploader-content">
                            <input type="file" class="filepond" name="filepond" accept="image/png, image/jpeg, image/gif" />
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="dash-input" id="dash1">
                        <h6 class="mb-4">My Referral Link</h6>
                        <div class="input-div">
                            <input type="text" placeholder="Generate your Link" class="text gen_input" value="www.google.com" />
                            <div class="gen-btn">
                                <button style="background-color: transparent;">Generate</button>
                                <button style="background-color: #ccc;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="" id="dash2">
                        <h6 class="mb-4">My Referral Link</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="copyText" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" onclick="copyText()" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"> <i class="fa fa-clone"></i></button>
                        </div>
                    </div>
                </div>


            </div>
    </section>
    <section class="any1">
        <div class="container ">
            <div class="drop-main1">
                <div class="drop">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">7 days</option>
                        <option value="2">Month</option>
                        <option value="3">Quarterly</option>
                        <option value="4">Half-Yearly</option>
                        <option value="5">Yearly</option>
                    </select>
                    <div class="drop-bot">
                        <h5 class="text-center" style="font-weight: 600;">0</h5>
                        <h5 class="m-0 text-center" style="font-weight: 600;">Downloads</h5>
                    </div>
                </div>
                <div class="drop">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">7 days</option>
                        <option value="2">Month</option>
                        <option value="3">Quarterly</option>
                        <option value="4">Half-Yearly</option>
                        <option value="5">Yearly</option>
                    </select>
                    <div class="drop-bot">
                        <h5 class="text-center" style="font-weight: 600;">0</h5>
                        <h5 class="m-0 text-center" style="font-weight: 600;">Subscribers</h5>
                    </div>
                </div>
                <div class="drop">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">7 days</option>
                        <option value="2">Month</option>
                        <option value="3">Quarterly</option>
                        <option value="4">Half-Yearly</option>
                        <option value="5">Yearly</option>
                    </select>
                    <div class="drop-bot">
                        <h5 class="text-center" style="font-weight: 600;">0</h5>
                        <h5 class="m-0 text-center" style="font-weight: 600;">No of clicks</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="any2">
        <div class="container ">
            <div class="drop-main2">
                <div class="drop">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">7 days</option>
                        <option value="2">Month</option>
                        <option value="3">Quarterly</option>
                        <option value="4">Half-Yearly</option>
                        <option value="5">Yearly</option>
                    </select>
                    <div class="drop-bot">
                        <h5 class="text-center" style="font-weight: 600;">0</h5>
                        <h5 class="m-0 text-center" style="font-weight: 600;">Total Income Generated</h5>
                    </div>
                </div>
                <div class="drop">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">7 days</option>
                        <option value="2">Month</option>
                        <option value="3">Quarterly</option>
                        <option value="4">Half-Yearly</option>
                        <option value="5">Yearly</option>
                    </select>
                    <div class="drop-bot">
                        <h5 class="text-center" style="font-weight: 600;">0</h5>
                        <h5 class="m-0 text-center" style="font-weight: 600;">Most Subscribed Product</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aff-btn">
        <div class="container ">
            <div class="aff-btn-grid">
                <div class="inn-btn">
                    <a href="inner-page/my-refferal.php">
                        <h5 class="m-0" style="font-weight: 600;">My refferal</h5>
                        <div class="arr-img">
                            <img src="../src/assets/img/arrow-up-right.svg" width="30" height="30" alt="arrow">
                        </div>
                    </a>
                </div>
                <div class="inn-btn">
                    <a href="inner-page/payments.php">
                        <h5 class="m-0" style="font-weight: 600;">Payments</h5>
                        <div class="arr-img">
                            <img src="../src/assets/img/arrow-up-right.svg" width="30" height="30" alt="arrow">
                        </div>
                    </a>
                </div>
                <div class="inn-btn">
                    <a href="inner-page/chat-box.php">
                        <h5 class="m-0" style="font-weight: 600;">Contact Admin</h5>
                        <div class="arr-img">
                            <img src="../src/assets/img/arrow-up-right.svg" width="30" height="30" alt="arrow">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title text-center fs-5" id="exampleModalLabel">Confirmation</h2>
                <p class="text-center">Are you sure all details filled are correct, this action cannot be undone ?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="mod-btn grey-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class=" mod-btn red-btn">Save</button>
            </div>
        </div>
    </div>
</div>

<?php include('../../component/footer.php') ?>