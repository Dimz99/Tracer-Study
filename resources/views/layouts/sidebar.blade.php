      <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
          <div class="navbar-vertical-footer-offset">
            <div class="navbar-brand-wrapper justify-content-between">
              <!-- Logo -->


                <a class="navbar-brand" href="/dashboard" aria-label="Front">
                  <img class="navbar-brand-logo" src="{{ asset('/assets/svg/logos/logo.svg') }}" alt="Logo">
                  <img class="navbar-brand-logo-mini" src="{{ asset('/assets/svg/logos/logo-short.svg') }}" alt="Logo">
                </a>

              <!-- End Logo -->

              <!-- Navbar Vertical Toggle -->
              <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                <i class="tio-clear tio-lg"></i>
              </button>
              <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Content -->
            <div class="navbar-vertical-content">
              <ul class="navbar-nav navbar-nav-lg nav-tabs">
                <li class="nav-item">
                  <small class="nav-subtitle" title="Main">Main</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <!-- Dashboards -->
                <li class="nav-item active">
                  <a class="js-nav-tooltip-link nav-link active" href="/dashboard" title="Dashboards">
                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                  </a>
                </li>
                <!-- End Dashboards -->

                <li class="nav-item">
                  <small class="nav-subtitle" title="Data">Data</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <!-- Data Mahasiswa & Alumni -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-nav-tooltip-link nav-link " href="javascript:;" title="Alumin">
                    <i class="tio-apps nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Alumin</span>
                  </a>
                </li>
                <!-- End Data Mahasiswa & Alumni -->

                <!-- Tracer Study -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-nav-tooltip-link nav-link " href="javascript:;" title="Tracer Study">
                    <i class="tio-lock-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Tracer Study</span>
                  </a>
                </li>
                <!-- End Tracer Study -->

                <li class="nav-item">
                  <small class="nav-subtitle" title="Report">Report</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <!-- Data Mahasiswa & Alumni -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Data">
                    <i class="tio-apps nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Report</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link " href="#" title="Kanban">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Statistik Mahasiswa</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Data Mahasiswa & Alumni -->
              </ul>
            </div>
            <!-- End Content -->
          </div>
        </div>
      </aside>
