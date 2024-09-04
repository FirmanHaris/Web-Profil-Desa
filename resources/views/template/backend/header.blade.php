<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset('assets/backend') }}/images/user/avatar-2.jpg" alt="user-image"
                            class="user-avtar" />
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/backend') }}/images/user/avatar-2.jpg"
                                            alt="user-image" class="user-avtar wid-35" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Carson Darrin 🖖</h6>
                                        <span>carson.darrin@company.io</span>
                                    </div>
                                </div>
                                <hr class="border-secondary border-opacity-50" />
                                <div class="card">
                                    <div class="card-body py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0 d-inline-flex align-items-center"><svg
                                                    class="pc-icon text-muted me-2">
                                                    <use xlink:href="#custom-notification-outline"></use>
                                                </svg>Notification</h5>
                                            <div class="form-check form-switch form-check-reverse m-0">
                                                <input class="form-check-input f-18" type="checkbox" role="switch" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-span">Manage</p>
                                <a href="#" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-setting-outline"></use>
                                        </svg>
                                        <span>Settings</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-share-bold"></use>
                                        </svg>
                                        <span>Share</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-lock-outline"></use>
                                        </svg>
                                        <span>Change Password</span>
                                    </span>
                                </a>
                                <hr class="border-secondary border-opacity-50" />
                                <p class="text-span">Team</p>
                                <a href="#" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-profile-2user-outline"></use>
                                        </svg>
                                        <span>UI Design team</span>
                                    </span>
                                    <div class="user-group">
                                        <img src="{{ asset('assets/backend') }}/images/user/avatar-1.jpg"
                                            alt="user-image" class="avtar" />
                                        <span class="avtar bg-danger text-white">K</span>
                                        <span class="avtar bg-success text-white">
                                            <svg class="pc-icon m-0">
                                                <use xlink:href="#custom-user"></use>
                                            </svg>
                                        </span>
                                        <span class="avtar bg-light-primary text-primary">+2</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-profile-2user-outline"></use>
                                        </svg>
                                        <span>Friends Groups</span>
                                    </span>
                                    <div class="user-group">
                                        <img src="{{ asset('assets/backend') }}/images/user/avatar-1.jpg"
                                            alt="user-image" class="avtar" />
                                        <span class="avtar bg-danger text-white">K</span>
                                        <span class="avtar bg-success text-white">
                                            <svg class="pc-icon m-0">
                                                <use xlink:href="#custom-user"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-add-outline"></use>
                                        </svg>
                                        <span>Add new</span>
                                    </span>
                                    <div class="user-group">
                                        <span class="avtar bg-primary text-white">
                                            <svg class="pc-icon m-0">
                                                <use xlink:href="#custom-add-outline"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <hr class="border-secondary border-opacity-50" />
                                <div class="d-grid mb-3">
                                    <button class="btn btn-primary">
                                        <svg class="pc-icon me-2">
                                            <use xlink:href="#custom-logout-1-outline"></use>
                                        </svg>Logout
                                    </button>
                                </div>
                                <div class="card border-0 shadow-none drp-upgrade-card mb-0"
                                    style="background-image: url(../assets/images/layout/img-profile-card.jpg)">
                                    <div class="card-body">
                                        <div class="user-group">
                                            <img src="{{ asset('assets/backend') }}/images/user/avatar-1.jpg"
                                                alt="user-image" class="avtar" />
                                            <img src="{{ asset('assets/backend') }}/images/user/avatar-2.jpg"
                                                alt="user-image" class="avtar" />
                                            <img src="{{ asset('assets/backend') }}/images/user/avatar-3.jpg"
                                                alt="user-image" class="avtar" />
                                            <img src="{{ asset('assets/backend') }}/images/user/avatar-4.jpg"
                                                alt="user-image" class="avtar" />
                                            <img src="{{ asset('assets/backend') }}/images/user/avatar-5.jpg"
                                                alt="user-image" class="avtar" />
                                            <span class="avtar bg-light-primary text-primary">+20</span>
                                        </div>
                                        <h3 class="my-3 text-dark">245.3k <small class="text-muted">Followers</small>
                                        </h3>
                                        <div class="btn btn btn-warning">
                                            <svg class="pc-icon me-2">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>
                                            Upgrade to Business
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement"
    aria-labelledby="announcementLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="announcementLabel">What’s new announcement?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p class="text-span">Today</p>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-success f-12">Big News</div>
                    <p class="mb-0 text-muted">2 min ago</p>
                    <span class="badge dot bg-warning"></span>
                </div>
                <h5 class="mb-3">Able Pro is Redesigned</h5>
                <p class="text-muted">Able Pro is completely renowed with high aesthetics User Interface.</p>
                <img src="{{ asset('assets/backend') }}/images/layout/img-announcement-1.png" alt="img"
                    class="img-fluid mb-3" />
                <div class="row">
                    <div class="col-12">
                        <div class="d-grid"><a class="btn btn-outline-secondary"
                                href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&amp;u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403"
                                target="_blank">Check Now</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-warning f-12">Offer</div>
                    <p class="mb-0 text-muted">2 hour ago</p>
                    <span class="badge dot bg-warning"></span>
                </div>
                <h5 class="mb-3">Able Pro is in best offer price</h5>
                <p class="text-muted">Download Able Pro exclusive on themeforest with best price. </p>
                <a href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&amp;u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403"
                    target="_blank"><img src="{{ asset('assets/backend') }}/images/layout/img-announcement-2.png"
                        alt="img" class="img-fluid" /></a>
            </div>
        </div>

        <p class="text-span mt-4">Yesterday</p>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-primary f-12">Blog</div>
                    <p class="mb-0 text-muted">12 hour ago</p>
                    <span class="badge dot bg-warning"></span>
                </div>
                <h5 class="mb-3">Featured Dashboard Template</h5>
                <p class="text-muted">Do you know Able Pro is one of the featured dashboard template selected by
                    Themeforest team.?</p>
                <img src="{{ asset('assets/backend') }}/images/layout/img-announcement-3.png" alt="img"
                    class="img-fluid" />
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-primary f-12">Announcement</div>
                    <p class="mb-0 text-muted">12 hour ago</p>
                    <span class="badge dot bg-warning"></span>
                </div>
                <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
                <p class="text-muted">Get the lifetime free updates once you purchase the Able Pro.</p>
                <img src="{{ asset('assets/backend') }}/images/layout/img-announcement-4.png" alt="img"
                    class="img-fluid" />
            </div>
        </div>
    </div>
</div>
