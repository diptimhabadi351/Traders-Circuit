<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">
        <ul class="navbar-item flex-row ms-lg-auto ms-0">
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <div class="emoji me-2">
                                👋
                            </div>
                            <div class="media-body">
                                <h5>Prathmesh Chavan</h5>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item">
                        <a href="auth-boxed-signin.html">
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
    </header>
</div>

<!-- sidebar -->
<nav>
    <div class="sidebar-top">
        <span class="shrink-btn">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </span>
        <h3 class="hide">Trader's Circuit</h3>
    </div>
    <div class="sidebar-links">
        <ul>
            <div class="active-tab"></div>
            <li class="tooltip-element <?php if ($currentPage == 'dashboard') {
                                            echo 'active';
                                        } ?>" data-tooltip="0">
                <a href="index.php" data-active="0">
                    <div class="icons">
                        <img src="../src/assets/images/dashboard.svg" />
                        <span class="text">Dashboard</span>
                    </div>
                </a>
            </li>
            <button class="dropdown-btn-users mb-1 <?php if ($currentPage == 'manage-users') {
                                                        echo 'active';
                                                    } ?>">
                <div class="icons d-flex align-items-center justify-content-start w-100">
                    <img src="../src/assets/images/m-users.svg" />
                    <span class="text-1">Manage Users</span>
                </div>
                <i class="fa fa-angle-down mr-3" aria-hidden="true"></i>
            </button>
            <div class="dropdown-container">
                <ul>
                    <li class="tooltip-element" data-tooltip="1">
                        <a href="../pages/manage-users/subscribed.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/article 1.svg" /> -->
                                <span class="text">Subscribed</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element ">
                        <a href="../pages/manage-users/unsubscribed.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/quill_inbox-newsletter.svg" /> -->
                                <span class="text">Unsubscribed</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element ">
                        <a href="../pages/manage-users/guest-user.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/user (2) 1.svg" /> -->
                                <span class="text">Guest User</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element " data-tooltip="1">
                        <a href="../pages/manage-users/affiliate-in.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/contract 1.svg" /> -->
                                <span class="text">Affiliate / Influencer</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <li class="tooltip-element <?php if ($currentPage == 'manage-products') {
                                            echo 'active';
                                        } ?>" data-tooltip="2">
                <a href="../pages/manage-products/manage-products.php" data-active="2">
                    <div class="icons">
                        <img src="../src/assets/images/m-products.svg" />
                        <span class="text">Manage Products</span>
                    </div>
                </a>
            </li>

            <button class="dropdown-btn-users mb-1 <?php if ($currentPage == 'manage-cms') {
                                                        echo 'active';
                                                    } ?>">
                <div class="icons d-flex align-items-center justify-content-start w-100">
                    <img src="../src/assets/images/m-cms.svg" />
                    <span class="text-1">Manage CMS</span>
                </div>
                <i class="fa fa-angle-down mr-3" aria-hidden="true"></i>
            </button>
            <div class="dropdown-container">
                <ul>
                    <li class="tooltip-element" data-tooltip="1">
                        <a href="../pages/manage-cms/about.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/article 1.svg" /> -->
                                <span class="text">About Us</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element ">
                        <a href="../pages/manage-cms/faq.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/quill_inbox-newsletter.svg" /> -->
                                <span class="text">Manage FAQ</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element ">
                        <a href="../pages/manage-cms/terms-condition.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/user (2) 1.svg" /> -->
                                <span class="text">Manage Terms & Condition</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element " data-tooltip="1">
                        <a href="../pages/manage-cms/privacy-policy.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/contract 1.svg" /> -->
                                <span class="text">Manage Privacy Policy </span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element " data-tooltip="1">
                        <a href="../pages/manage-cms/feedback.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/conversation 3.svg" /> -->
                                <span class="text">Manage Feedback</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element" data-tooltip="1">
                        <a href="manage-privacy.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/privacy.svg" /> -->
                                <span class="text">Manage Content Bytes</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <li class="tooltip-element <?php if ($currentPage == 'manage-sub-admin') {
                                            echo 'active';
                                        } ?>" data-tooltip="5">
                <a href="../pages/manage-sub-admin/manage-sub-admin.php" data-active="5">
                    <div class="icons">
                        <img src="../src/assets/images/m-subadmins.svg" />
                        <span class="text">Manage Sub admins</span>
                    </div>
                </a>
            </li>

            <li class="tooltip-element <?php if ($currentPage == 'manage-feedback') {
                                            echo 'active';
                                        } ?>" data-tooltip="6">
                <a href="manage-feedback.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/images/m-thirdparties.svg" />
                        <span class="text">Manage Third Parties</span>
                    </div>
                </a>
            </li>
            <button class="dropdown-btn-users mb-1 <?php if ($currentPage == 'manage-notification') {
                                                        echo 'active';
                                                    } ?>">
                <div class="icons d-flex align-items-center justify-content-start w-100">
                    <img src="../src/assets/images/m-cms.svg" />
                    <span class="text-1">Manage Notification</span>
                </div>
                <i class="fa fa-angle-down mr-3" aria-hidden="true"></i>
            </button>
            <div class="dropdown-container">
                <ul>
                    <li class="tooltip-element" data-tooltip="1">
                        <a href="../pages/manage-notification/push-notification.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/article 1.svg" /> -->
                                <span class="text">Push Notification</span>
                            </div>
                        </a>
                    </li>

                    <li class="tooltip-element ">
                        <a href="../pages/manage-notification/inapp-notification.php" data-active="1">
                            <div class="icons">
                                <!-- <img src="../src/assets/images/quill_inbox-newsletter.svg" /> -->
                                <span class="text">In App Notification</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <li class="tooltip-element <?php if ($currentPage == 'manage-notification') {
                                            echo 'active';
                                        } ?>" data-tooltip="6">
                <a href="manage-notification.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/images/m-reco.svg" />
                        <span class="text">Manage Recommendation</span>
                    </div>
                </a>
            </li>
            <li class="tooltip-element <?php if ($currentPage == 'manage-contact') {
                                            echo 'active';
                                        } ?>" data-tooltip="6">
                <a href="../pages/manage-contact/contact-us.php" data-active="6">
                    <div class="icons">
                        <img src="../src/assets/images/m-contact.svg" />
                        <span class="text">Manage Contact Us</span>
                    </div>
                </a>
            </li>

            <li class="tooltip-element <?php if ($currentPage == 'manage-subscription') {
                                            echo 'active';
                                        } ?>" data-tooltip="3">
                <a href="manage-subscription.php" data-active="3">
                    <div class="icons">
                        <img src="../src/assets/images/myprofile.svg" />
                        <span class="text">My Profile</span>
                    </div>
                </a>
            </li>



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