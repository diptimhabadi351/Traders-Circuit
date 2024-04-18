<?php $currentPage = "contact-us-view" ?>
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
                                <a href="" class="ml-1"> Tickets / view</a>
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
                                            <input type="text" required value="#18663765" readonly>
                                        </p>
                                        <p>
                                            <label class="w-50" for="">Ticket Category :</label>
                                            <input type="text" value="Portfolio" readonly>
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