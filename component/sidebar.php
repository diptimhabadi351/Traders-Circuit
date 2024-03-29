<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown notification">
                        <a class="nav-link dropdown-toggle " href="#" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../src/assets/img/bell.svg" />
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown" data-bs-popper="none">
                            <div class="dropdown-item">
                                <div class="notify-content">
                                    <div class="msg-title">
                                        <h3>Notifications </h3>
                                        <a href="#">Viewal </a>
                                    </div>
                                    <div class="divider"></div>
                                    <h4>Lorem ipsum</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="tms">9 min ago</span>
                                    <div class="divider"></div>
                                    <h4>Lorem ipsum <span></span></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="tms">9 min ago</span>

                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown user">
                        <a class="nav-link dropdown-toggle" href="profile-page.php">
                            <div class="avatar-container">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown" data-bs-popper="none">
                            <div class="dropdown-item">
                                <a href="signup.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>

<!-- sidebar -->
<nav>
    <div class="sidebar-top">
        <span class="shrink-btn">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </span>
        <img src="../src/assets/img/seasons_logo.png" class="logo" alt="">
        <h3 class="hide">Trader's Circuit</h3>
    </div>
    <div class="sidebar-links" style="overflow: scroll;">
        <ul>
            <div class="active-tab"></div>
            <li class="tooltip-element <?php
                                        if ($currentPage == 'dashboard') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="0">
                <a href="index.php" data-active="0">
                    <div class="icons">
                        <img src="../src/assets/img/dashboard.svg" />
                        <span class="text">Dashboard</span>
                    </div>
                </a>
            </li>

            <!-- <button class="dropdown-btn-users mb-1">
                <div class="icons d-flex align-items-center justify-content-start w-100">
                    <img src="../src/assets/img/Group 57904.svg" />
                    <span class="text-1">Manage Users</span>
                </div>
                <i class="fa fa-angle-down mr-3" aria-hidden="true"></i>
            </button> -->

            <!-- <div class="dropdown-container">
                <ul>
                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-patient') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-customers.php" data-active="1">
                            <div class="icons">
                                <img src="../src/assets/img/single-user.svg" />
                                <span class="text">Customer App</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'restaurant-app') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-restraunts.php" data-active="1">
                            <div class="icons">
                                <img src="../src/assets/img/restraunt.svg" />
                                <span class="text">Restaurant App</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'sub-admins') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-subadmins.php" data-active="1">
                            <div class="icons">
                                <img src="../src/assets/img/Group 57906.svg">
                                <span class=" text">Sub Admins</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div> -->

            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-users') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="2">
                <a href="manage-users.php" data-active="2">
                    <div class="icons">
                        <img src="../src/assets/img/m-users.svg" />
                        <span class="text">Manage Users</span>
                    </div>
                </a>
            </li>

            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-passports') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="2">
                <a href="manage-passports.php" data-active="2">
                    <div class="icons">
                        <img src="../src/assets/img/m-products.svg" />
                        <span class="text">Manage Products</span>
                    </div>
                </a>
            </li>

            <!-- <li class="tooltip-element <?php
                                            if ($currentPage == 'manage-vouchers') {
                                                echo 'active';
                                            }
                                            ?>" data-tooltip="3">
                <a href="manage-vouchers.php" data-active="3">
                    <div class="icons">
                        <img src="../src/assets/img/fluent-mdl2_coupon.svg" />
                        <span class="text">Manage Vouchers</span>
                    </div>
                </a>
            </li> -->

            <!-- <li class="tooltip-element <?php
                                            if ($currentPage == 'manage-contact') {
                                                echo 'active';
                                            }
                                            ?>" data-tooltip="4">
                <a href="manage-contact.php" data-active="4">
                    <div class="icons">
                        <img src="../src/assets/img/call(1) 3.svg" />
                        <span class="text">Manage Contact Us</span>
                    </div>
                </a>
            </li> -->



            <button class="dropdown-btn-users mb-1">
                <div class="icons d-flex align-items-center justify-content-start w-100">
                    <img src="../src/assets/img/m-cms.svg" />
                    <span class="text-1">Manage CMS</span>
                </div>
                <i class="fa fa-angle-down mr-3" aria-hidden="true"></i>
            </button>

            <div class="dropdown-container">
                <ul>
                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-news') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-news.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/img/article 1.svg" /> -->
                                <span class="text">News & Article</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-newsletter') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-newsletter.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/img/quill_inbox-newsletter.svg" /> -->
                                <span class="text">Newsletter</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-aboutus') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-aboutus.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/img/user (2) 1.svg" /> -->
                                <span class="text">About Us</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-terms') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-terms.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/img/contract 1.svg" /> -->
                                <span class="text">Terms & Conditions</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-faq') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-faq.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/img/conversation 3.svg" /> -->
                                <span class="text">FAQ</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element <?php
                                                if ($currentPage == 'manage-privacy') {
                                                    echo 'active';
                                                }
                                                ?>" data-tooltip="1">
                        <a href="manage-privacy.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/img/privacy.svg" /> -->
                                <span class="text">Privacy Policy</span>
                            </div>
                        </a>
                    </li>


                </ul>
            </div>

            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-reports') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="5">
                <a href="manage-reports.php" data-active="5">
                    <div class="icons">
                        <img src="../src/assets/img/m-subadmins.svg" />
                        <span class="text">Manage Sub admins</span>
                    </div>
                </a>
            </li>

            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-feedback') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="6">
                <a href="manage-feedback.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/img/m-thirdparties.svg" />
                        <span class="text">Manage Third Parties</span>
                    </div>
                </a>
            </li>

            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-notification') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="6">
                <a href="manage-notification.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/img/m-noti.svg" />
                        <span class="text">Manage Notification</span>
                    </div>
                </a>
            </li>
            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-notification') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="6">
                <a href="manage-notification.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/img/m-reco.svg" />
                        <span class="text">Manage Recommendation</span>
                    </div>
                </a>
            </li>
            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-contact') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="6">
                <a href="manage-contact.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/img/m-contact.svg" />
                        <span class="text">Manage Contact Us</span>
                    </div>
                </a>
            </li>


            <li class="tooltip-element <?php
                                        if ($currentPage == 'manage-subscription') {
                                            echo 'active';
                                        }
                                        ?>" data-tooltip="3">
                <a href="manage-subscription.php" data-active="3">
                    <div class="icons">
                        <img src="../src/assets/img/myprofile.svg" />
                        <span class="text">My Profile</span>
                    </div>
                </a>
            </li>
            <!-- <li class="tooltip-element <?php
                                            if ($currentPage == 'manage-transcation') {
                                                echo 'active';
                                            }
                                            ?>" data-tooltip="3">
                <a href="manage-transcation.php" data-active="3">
                    <div class="icons">
                        <img src="../src/assets/img/transaction.svg" />
                        <span class="text">Manage Transaction</span>
                    </div>
                </a> 
            </li>-->


            <!-- <li class="tooltip-element <?php
                                            if ($currentPage == 'manage-contact') {
                                                echo 'active';
                                            }
                                            ?>">
                <a href="manage-contact.php" aria-expanded="false" class="dropdown-toggle">
                    <div class="icons">
                        <img src="../src/assets/img/customer-list-line-svgrepo-com.svg" />
                        <span class="text">Manage Contact Us</span>
                    </div>
                </a>
            </li> -->
            <!-- <li class="tooltip-element <?php
                                            if ($currentPage == 'manage-role') {
                                                echo 'active';
                                            }
                                            ?>" data-tooltip="3">
                <a href="manage-role.php" data-active="3">
                    <div class="icons">
                        <img src="../src/assets/img/users-svgrepo-com.svg" />
                        <span class="text">Manage Roles</span>
                    </div>
                </a>
            </li> -->


        </ul>
    </div>

</nav>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn-users");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>