  <aside class="main-sidebar main-sidebar-custom sidebar-dark-success elevation-4 dark-mode">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
          <img src="../../dist/img/unisba.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-bold text-success">Tracer Study</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Super Admin</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/dashboard"
                          class="nav-link {{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
                          <i class="fas fa-tachometer-alt nav-icon"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li class="nav-item {{ request()->segment(1) == 'master-data' ? ' menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->segment(1) == 'master-data' ? ' active' : '' }}">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Master Data
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/master-data/alumni"
                                  class="nav-link {{ request()->segment(1) == 'master-data' && request()->segment(2) == 'alumni' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Alumni</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item {{ request()->segment(1) == 'tracer-study' ? ' menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->segment(1) == 'tracer-study' ? ' active' : '' }}">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Tracer Study
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/tracer-study/data"
                                  class="nav-link {{ request()->segment(1) == 'tracer-study' && request()->segment(2) == 'data' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/tracer-study/angket"
                                  class="nav-link {{ request()->segment(1) == 'tracer-study' && request()->segment(2) == 'angket' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Angket</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item {{ request()->segment(1) == 'laporan' ? ' menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->segment(1) == 'laporan' ? ' active' : '' }}">
                          <i class="nav-icon fas fa-file-alt"></i>
                          <p>
                              Laporan
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/laporan/alumni"
                                  class="nav-link {{ request()->segment(1) == 'laporan' && request()->segment(2) == 'alumni' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Alumni</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/laporan/tracer-study"
                                  class="nav-link {{ request()->segment(1) == 'laporan' && request()->segment(2) == 'tracer-study' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Tracer Study</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item {{ request()->segment(1) == 'setting' ? ' menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->segment(1) == 'setting' ? ' active' : '' }}">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Setting
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/setting/profile"
                                  class="nav-link {{ request()->segment(1) == 'setting' && request()->segment(2) == 'profile' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Profile</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->

      <div class="sidebar-custom">
          <a href="#" class="btn btn-danger btn-block"><i class="fas fa-sign-out-alt"></i><span
                  class="hide-on-collapse">Log Out</span></a>
      </div>
      <!-- /.sidebar-custom -->
  </aside>
