        <div class="navbar-dark w-100 bg-dark py-2">
            <div class="container">
                <div class="navbar-nav-wrap">
                    <!-- Logo -->
                    <a class="navbar-brand d-flex align-items-center" href="/" aria-label="Front">
                        <img class="avatar me-2" src="{{asset('assets/img/Logo_Universitas_Islam_Balitar.png')}}" alt="Logo">
                        <span class="display-4 text-uppercase">Tracer Study</span>
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
                                                    <p class="card-text text-body">17104410041</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="/user/profile">Profil</a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="/logout">Log out</a>
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
                            <a class="nav-link {{ (request()->is('user/dashboard')) ? 'active' : '' }}" href="/user/dashboard" data-placement="left">
                                <i class="bi-house-door dropdown-item-icon"></i> Dashboards
                            </a>
                        </li>
                        <!-- End Dashboards -->

                        <!-- Alumni -->
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('user/data/alumni')) ? 'active' : '' }}" href="/user/data/alumni" data-placement="left">
                                <i class="bi-people dropdown-item-icon"></i> Alumni
                            </a>
                        </li>
                        <!-- End Alumni -->

                        <!-- Tracer -->
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('user/data/tracer-study')) ? 'active' : '' }}" href="/user/data/tracer-study" data-placement="left">
                                <i class="bi-pencil-square dropdown-item-icon"></i> Tracer Study
                            </a>
                        </li>
                        <!-- End Tracer -->
                    </ul>

                </div>
                <!-- End Collapse -->
            </nav>
        </div>
