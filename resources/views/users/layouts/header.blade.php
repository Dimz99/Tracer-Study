        <div class="navbar-dark w-100 bg-dark py-2">
            <div class="container">
                <div class="navbar-nav-wrap">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="/assets/svg/logos/logo-white.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Content End -->
                    <div class="navbar-nav-wrap-content-end">
                        <!-- Navbar -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <!-- Account -->
                                <div class="dropdown">
                                    <a class="navbar-dropdown-account-wrapper" href="javascript:;"
                                        id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                        data-bs-auto-close="outside" data-bs-dropdown-animation>
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="/assets/img/160x160/img1.jpg"
                                                alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                        </div>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                                        aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                                        <div class="dropdown-item-text">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm avatar-circle">
                                                    <img class="avatar-img" src="/assets/img/160x160/img1.jpg"
                                                        alt="Image Description">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="mb-0">Mark Williams</h5>
                                                    <p class="card-text text-body">mark@site.com</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">Profile &amp; account</a>
                                        <a class="dropdown-item" href="#">Settings</a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">Sign out</a>
                                    </div>
                                </div>
                                <!-- End Account -->
                            </li>

                            <li class="nav-item">
                                <!-- Toggler -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarDoubleLineContainerNavDropdown"
                                    aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-default">
                                        <i class="bi-list"></i>
                                    </span>
                                    <span class="navbar-toggler-toggled">
                                        <i class="bi-x"></i>
                                    </span>
                                </button>
                                <!-- End Toggler -->
                            </li>
                        </ul>
                        <!-- End Navbar -->
                    </div>
                    <!-- End Content End -->
                </div>
            </div>
        </div>

        <div class="container">
            <nav class="js-mega-menu flex-grow-1">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarDoubleLineContainerNavDropdown">
                    <ul class="navbar-nav">
                        <!-- Dashboards -->
                        <li class="nav-item">
                            <a class="nav-link active" href="" data-placement="left">
                                <i class="bi-house-door dropdown-item-icon"></i> Dashboards
                            </a>
                        </li>
                        <!-- End Dashboards -->

                        <!-- Pages -->
                        <li class="hs-has-sub-menu nav-item">
                            <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-files-alt dropdown-item-icon"></i> Data</a>

                            <!-- Mega Menu -->
                            <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                                <a class="dropdown-item " href="javascript:;" data-placement="left">Alumni</a>
                                <a class="dropdown-item " href="javascript:;" data-placement="left">Tracer Study</a>
                            </div>
                            <!-- End Mega Menu -->
                        </li>
                        <!-- End Pages -->

                        <!-- Apps -->
                        <li class="hs-has-sub-menu nav-item">
                            <a id="appsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-app-indicator dropdown-item-icon"></i> Laporan</a>

                            <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="appsMegaMenu" style="min-width: 14rem;">
                                <a class="dropdown-item " href="javascript:;">Statistik Mahasiswa</a>
                            </div>
                        </li>
                        <!-- End Apps -->
                    </ul>

                </div>
                <!-- End Collapse -->
            </nav>
        </div>
