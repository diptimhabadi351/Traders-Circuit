<?php $currentPage = "affiliate-in-mail" ?>
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
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing  chatbox">
                        <div class="widget-content widget-content-area br-8 position-btn">
                            <h6 class="card-title mb-4">
                                <a href="../pages/manage-users/affiliate-in.php">
                                    <img src="../src/assets/img/arrow-left.svg" alt="">
                                </a>
                                Manage Users
                            </h6>
                            <div class="chat_box">
                                <div class="head">
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="../src/assets/img/profile-30.png" />
                                        </div>
                                        <div class="chat-name">Kai Cheng</div>
                                    </div>
                                </div>
                                <div class="chat-body">
                                    <div class="incoming">
                                        <div class="bubble">
                                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <div class="outgoing">
                                        <div class="bubble">
                                            <p>Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.</p>
                                        </div>
                                    </div>
                                    <div class="incoming">
                                        <div class="bubble">
                                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <div class="outgoing">
                                        <div class="bubble">
                                            <p>Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.</p>
                                        </div>
                                    </div>
                                    <div class="typing">
                                        <div class="bubble">
                                            <div class="ellipsis dot_1"></div>
                                            <div class="ellipsis dot_2"></div>
                                            <div class="ellipsis dot_3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-footer">
                                    <div class="chat-input">
                                        <input type="text" class="input-box" placeholder="Message">
                                        <div class="chat-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square" style="color: #9A0000;">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </div>
                                        <div class="send">
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
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal reject -->
<div class="modal fade modaaal" id="payOption" tabindex="-1" role="dialog" aria-labelledby="payOptionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <h5 class="mb-3 modal-title" id="rejectOptionLabel">Are you sure you want Make Payment</h5>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
                <button type="button" class="btn grey-btn" data-dismiss="modal">Yes</button>
                <button type="button" class="btn red-btn">No</button>
            </div>
        </div>
    </div>
</div>

<!--  END LOADER -->

<?php include '../../component/footer.php'; ?>
<script src="../../src/plugins/src/table/datatable/datatables.js"></script>