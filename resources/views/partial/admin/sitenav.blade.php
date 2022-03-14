<header class="header primary-bg">
    <div class="d-flex align-items-center">

        <button class="btn btn-sm sidebar-expand-btn d-lg-none">
            <i class="bi bi-list"></i>
        </button>

        <div class="ms-auto">
            <span class="iconify me-3" data-icon="clarity:bell-outline-badged" data-width="30" data-height="30"></span>
            <img src="../asset/image/avatar.jpg" class="avatar-sm-1 " data-bs-toggle="dropdown" alt="">
            <ul class="dropdown-menu align-items-center">
                <li>
                    <a class="dropdown-item" href="/admin/profile.php">
                        <span class="iconify" data-icon="carbon:user-avatar" style="color: black;" data-width="20"
                              data-height="20"></span>
                        Profile
                    </a>
                </li>
                <li>
                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#password-modal">
                        <span class="iconify" data-icon="fluent:key-32-regular" style="color: black;" data-width="20"
                              data-height="20"></span>
                        Change Password
                    </button>


                </li>

                <!-- Modal -->
                <div class="modal fade" id="password-modal">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="sdfas">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>

                </div>

                <li>
                    <a class="dropdown-item primary-color" href="#">
                        <span class="iconify" data-icon="ant-design:logout-outlined" data-width="20"
                              data-height="20"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>


<!-- ===== Sidebar ===== -->
<div id="mobile-sidebar" class="mobile-sidebar">
    <aside class="sidebar">
        <!-- Sidebar Toggle Button -->
        <button class="btn btn-sm sidebar-toggle-button">
            <i class="bi bi-caret-left-fill"></i>
            <i class="bi bi-list"></i>
            <i class="bi bi-caret-right-fill d-none"></i>
        </button>


        <!-- Sidebar Logo & Icon -->
        <div class="sidebar-logo pb-2 text-center">
            <img src="/asset/image/logo-lg.png" class="logo-lg" alt="logo-lg">
            <img src="/asset/image/logo-sm.png" class="logo-sm d-none avatar-sm" alt="logo-sm">
        </div>

        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">

            <!-- Dashboard -->
            <li class="sidebar-nav-item my-4">
                <a href="/" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="ic:sharp-space-dashboard" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-heading">Manage</li>


            <!-- Category -->
            <li class="sidebar-nav-item mb-3">
                <a href="{{url('/admin/category')}}" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="ic:outline-category" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Category</span>


                </a>
            </li>


            <!-- Manege Series -->
            <li class="sidebar-nav-item mb-3">
                <a href="/series/series-category.php" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="carbon:save-series" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Manege Series</span>


                </a>
            </li>

            <!-- Artist -->
            <li class="sidebar-nav-item mb-3">
                <a href="/artist" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="carbon:user-avatar-filled-alt" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Artist</span>

                </a>
            </li>


            <!-- Genres -->
            <li class="sidebar-nav-item mb-3">
                <a href="/genres" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="ph:mask-happy" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Genres</span>


                </a>
            </li>


            <!-- Tv Channels -->
            <li class="sidebar-nav-item mb-3">
                <a href="/tv" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="eva:tv-outline" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Tv Channels</span>

                </a>
            </li>


            <!-- Country -->
            <li class="sidebar-nav-item mb-3">
                <a href="/country" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="bx:world" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Country</span>

                </a>
            </li>


            <!-- Top Features -->
            <li class="sidebar-nav-item mb-3">
                <a href="/top-feature" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="bi:arrow-up" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Top Features</span>

                </a>
            </li>


            <!-- Home Banner -->
            <li class="sidebar-nav-item mb-3">
                <a href="/home-banner/home-banner.php" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="carbon:user-avatar-filled-alt" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Home Banner</span>
                </a>
            </li>


            <!-- Sponsors -->
            <li class="sidebar-nav-item mb-3">
                <a href="/sponsor-video/sponsor-banner.php" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="carbon:user-avatar-filled-alt" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Sponsors</span>

                </a>
            </li>


            <li class="nav-heading">Video</li>

            <!-- Video -->
            <li class="sidebar-nav-item mb-3">
                <a href="/video" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="bxs:video-plus" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Video</span>

                </a>
            </li>


            <li class="nav-heading">Administration</li>

            <!-- Manage Admin -->
            <li class="sidebar-nav-item mb-3">
                <a href="/admin/admin.php" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="clarity:administrator-solid" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Manage Admin</span>

                </a>
            </li>


            <li class="nav-heading">User</li>

            <!-- Manage User -->
            <li class="sidebar-nav-item mb-3">
                <a href="/user" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="carbon:user-avatar-filled-alt" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Manage User</span>

                </a>
            </li>


            <!-- Comment -->
            <li class="sidebar-nav-item mb-3">
                <a href="/comment" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="fa-solid:comment-alt" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Comment</span>

                </a>
            </li>


            <!-- Report -->
            <li class="sidebar-nav-item mb-3">
                <a href="/report" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="ic:baseline-report" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Report</span>

                </a>
            </li>


            <li class="nav-heading">Settings</li>

            <!-- Advertisement -->
            <li class="sidebar-nav-item mb-3">
                <a href="/advertisement" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="fa-solid:ad" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Advertisement</span>

                </a>
            </li>


            <!-- Notifications -->
            <li class="sidebar-nav-item mb-3">
                <a href="/notification" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="lucide:bell-plus" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Notifications</span>

                </a>
            </li>


            <!--  Basic Setting  -->
            <li class="sidebar-nav-item mb-3">
                <a href="/setting" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="ant-design:setting-filled" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Basic Setting</span>

                </a>
            </li>

            <!--  Video Setting  -->
            <li class="sidebar-nav-item mb-3">
                <a href="/video-setting" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="bi:play-circle-fill" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Video Setting</span>

                </a>
            </li>

            <!--  SMTP Setting  -->
            <li class="sidebar-nav-item mb-3">
                <a href="/smtp" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="fluent:mail-16-filled" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">SMTP Setting</span>

                </a>
            </li>

            <!--  Contact Us  -->
            <li class="sidebar-nav-item mb-3">
                <a href="/contact" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="bx:message-check" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Contact Us</span>

                </a>
            </li>

            <!--  Subscriber  -->
            <li class="sidebar-nav-item mb-3">
                <a href="/subscriber" class="sidebar-nav-link">

               <span class="iconify me-2" data-icon="eos-icons:subscriptions-created-outlined" data-width="22"
                     data-height="22"></span>

                    <span class="sidebar-nav-title">Subscriber</span>

                </a>
            </li>


        </ul>

    </aside>
</div>
<!-- ===== End Sidebar ===== -->
