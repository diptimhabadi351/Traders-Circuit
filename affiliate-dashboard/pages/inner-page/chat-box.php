<?php $currentPage = 'chat-box'; ?>
<?php include('../../component/header.php') ?>
<?php include('../../component/navbar.php') ?>


<div class="main-sec reff-view">
    <div class="row">
        <div class="col-md-4 left">
            <h6 class="card-title mt-4">
                <a href="inner-page/index.php">
                    <img src="../src/assets/img/arrow-left.svg" alt="">
                </a>
                Contact Admin
            </h6>
        </div>
    </div>
    <div class="chat-section layout-top-spacing mt-4">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="chat-system">
                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg></div>
                    <div class="chat-box" style="height: calc(-158px + 108vh);">
                        <div class="chat-not-selected" style="display: none;">
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg> Click User To Chat</p>
                        </div>

                        <div class="chat-box-inner" style="height: 100%;">
                            <div class="chat-meta-user chat-active">
                                <div class="current-chat-user-name"><span><img src="../src/assets/img/profile-3.jpeg" alt="dynamic-image"><span class="name">Sean Freeman</span></span></div>

                            </div>
                            <div class="chat-conversation-box ps ps--active-y">
                                <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                                    <div class="chat active-chat" data-chat="person1">
                                        <div class="conversation-start">
                                            <span>Today, 6:48 AM</span>
                                        </div>
                                        <div class="bubble you">
                                            Hello,
                                        </div>
                                        <div class="bubble you">
                                            It's me.
                                        </div>
                                        <div class="bubble you">
                                            I have a question regarding project.
                                        </div>
                                    </div>
                                    <div class="chat" data-chat="person2">
                                        <div class="conversation-start">
                                            <span>Today, 5:38 PM</span>
                                        </div>
                                        <div class="bubble you">
                                            Hello!
                                        </div>
                                        <div class="bubble me">
                                            Hey!
                                        </div>
                                        <div class="bubble me">
                                            How was your day so far.
                                        </div>
                                        <div class="bubble you">
                                            It was a bit dramatic.
                                        </div>
                                    </div>
                                    <div class="chat" data-chat="person3">
                                        <div class="conversation-start">
                                            <span>Today, 3:38 AM</span>
                                        </div>
                                        <div class="bubble me">
                                            Hey Buddy.
                                        </div>
                                        <div class="bubble me">
                                            What's up
                                        </div>
                                        <div class="bubble you">
                                            I am sick
                                        </div>
                                        <div class="bubble you">
                                            Not comming to office today.
                                        </div>
                                    </div>
                                    <div class="chat" data-chat="person4">
                                        <div class="conversation-start">
                                            <span>Yesterday, 4:20 PM</span>
                                        </div>
                                        <div class="bubble you">
                                            Hi, collect your check
                                        </div>
                                        <div class="bubble me">
                                            Ok, I will be there in 10 mins
                                        </div>
                                    </div>
                                    <div class="chat" data-chat="person5">
                                        <div class="conversation-start">
                                            <span>Today, 6:28 AM</span>
                                        </div>
                                        <div class="bubble you">
                                            Hi
                                        </div>
                                        <div class="bubble you">
                                            Uploaded files to server.
                                        </div>
                                    </div>
                                    <div class="chat" data-chat="person6">
                                        <div class="conversation-start">
                                            <span>Monday, 1:27 PM</span>
                                        </div>
                                        <div class="bubble you">
                                            Hi, I am back from vacation
                                        </div>
                                        <div class="bubble you">
                                            How are you?
                                        </div>
                                        <div class="bubble me">
                                            Welcom Back
                                        </div>
                                        <div class="bubble me">
                                            I am all well
                                        </div>
                                        <div class="bubble you">
                                            Coffee?
                                        </div>
                                    </div>
                                    <div class="chat" data-chat="person7">
                                    </div>
                                    <div class="chat" data-chat="person8">
                                    </div>
                                    <div class="chat" data-chat="person9">
                                    </div>
                                    <div class="chat" data-chat="person10">
                                    </div>
                                    <div class="chat" data-chat="person11">
                                    </div>
                                    <div class="chat" data-chat="person12">
                                    </div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px; height: 43px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 8px;"></div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px; height: 43px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 8px;"></div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px; height: 43px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 8px;"></div>
                                </div>
                            </div>
                            <div class="chat-footer chat-active">
                                <div class="chat-input">
                                    <form class="chat-form" action="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <input type="text" class="mail-write-box form-control" placeholder="Message">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>




<?php include('../../component/footer.php') ?>
<script src="../src/plugins/src/table/datatable/datatables.js"></script>
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


    // ------------------------------------------------------------------------
</script>