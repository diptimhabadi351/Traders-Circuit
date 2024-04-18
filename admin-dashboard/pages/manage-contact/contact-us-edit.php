<?php $currentPage = "contact-us-edit" ?>
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
    <div id="content" class="main-content contact-edit">
        <div class="layout-px-spacing">
            <div class="middle-content  p-0 container">
                <div class="row layout-top-spacing ">
                    <div class="top-tabel">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <div class="breadcrumb">
                                <a href="">Contact us / </a>
                                <a href="" class="ml-1"> Tickets / edit</a>
                            </div>
                            <h6 class="card-title">
                                <a href="../pages/manage-contact/contact-us.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Contact Us
                            </h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <form class="contact-edit-label">
                                        <p>
                                            <label class="w-50" for="">Ticket Id :</label>
                                            <input type="text" required value="#18663765">
                                        </p>
                                        <p>
                                            <label class="w-50" for="">Ticket Category :</label>
                                            <input type="text" value="Portfolio">
                                        </p>
                                        <p>
                                            <label class="w-50" for="">Attached Screenshot</label>
                                        </p>
                                        <div class="contact-img-div">
                                            <img src="../src/assets/img/profile-30.png" alt="">
                                            <img src="../src/assets/img/profile-30.png" alt="">
                                            <img src="../src/assets/img/profile-30.png" alt="">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 chatbox">
                                    <div class="chat_box">
                                        <div class="chat-body">
                                            <div class="incoming">
                                                <div class="bubble">
                                                    <p>Lorem ipsum dolor sit amet Lorem sit amet</p>
                                                </div>
                                            </div>
                                            <div class="outgoing">
                                                <div class="bubble">
                                                    <p>Aliquam in hendrerit sit amet sapien</p>
                                                </div>
                                            </div>
                                            <div class="incoming">
                                                <div class="bubble">
                                                    <p>Lorem ipsum dolor sit amet sit amet</p>
                                                </div>
                                            </div>
                                            <div class="outgoing">
                                                <div class="bubble">
                                                    <p>Aliquam in hendrerit sit amet sapien</p>
                                                </div>
                                            </div>
                                            <div class="chat-input">
                                                <input type="text" class="input-box" placeholder="Message">
                                                <div class="edit-send">
                                                    <svg width="28" height="28" viewBox="0 0 66 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M63.4845 36.397L29.1065 36.2614" stroke="#9A0000" stroke-width="3.55946" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M63.4833 36.4029L21.362 59.5187L29.1053 36.2674L21.2222 12.9544L63.4833 36.4029Z" stroke="#9A0000" stroke-width="3.55946" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <button type="button" class="btn grey-btn" data-toggle="modal" data-target="#contactEditResolve">Resolve</button>
                                    <button type="button" class="btn red-btn ml-4" data-toggle="modal" data-target="#contactEditClose">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal resolve -->
<div class="modal fade modaaal" id="contactEditResolve" tabindex="-1" role="dialog" aria-labelledby="contactEditResolve" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title text-center" id="contactEditResolve">Are you sure you want Resolve <br> this Ticket ?</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Yes</button>
                <button type="button" class="btn red-btn">No</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal del -->
<div class="modal fade modaaal" id="contactEditClose" tabindex="-1" role="dialog" aria-labelledby="contactEditClose" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title text-center" id="contactEditClose">Are you sure you want Close <br> this Ticket ?</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Yes</button>
                <button type="button" class="btn red-btn">No</button>
            </div>
        </div>
    </div>
</div>

<?php include '../../component/footer.php'; ?>