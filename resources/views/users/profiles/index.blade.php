@extends('users.layouts.index')

@section('content')
    <div class="content container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Profile</h1>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-3">
                <!-- Navbar -->
                <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                    <!-- Navbar Toggle -->
                    <div class="d-grid">
                        <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
                            data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
                            aria-controls="navbarVerticalNavMenu">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="text-dark">Menu</span>

                                <span class="navbar-toggler-default">
                                    <i class="bi-list"></i>
                                </span>

                                <span class="navbar-toggler-toggled">
                                    <i class="bi-x"></i>
                                </span>
                            </span>
                        </button>
                    </div>
                    <!-- End Navbar Toggle -->

                    <!-- Navbar Collapse -->
                    <div id="navbarVerticalNavMenu" class="collapse navbar-collapse" style="">
                        <ul id="navbarSettings"
                            class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical"
                            data-hs-sticky-block-options="{
                                &quot;parentSelector&quot;: &quot;#navbarVerticalNavMenu&quot;,
                                &quot;targetSelector&quot;: &quot;#header&quot;,
                                &quot;breakpoint&quot;: &quot;lg&quot;,
                                &quot;startPoint&quot;: &quot;#navbarVerticalNavMenu&quot;,
                                &quot;endPoint&quot;: &quot;#stickyBlockEndPoint&quot;,
                                &quot;stickyOffsetTop&quot;: 20
                            }"
                            style="">
                            <li class="nav-item">
                                <a class="nav-link" href="#content">
                                    <i class="bi-person nav-icon"></i> Profil Mahasiswa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#passwordSection">
                                    <i class="bi-key nav-icon"></i> Password
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
                <!-- End Navbar -->
            </div>

            <div class="col-lg-9">
                <div class="d-grid gap-3 gap-lg-5">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title h4">Profil Mahasiswa</h2>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <form>
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="nameLabel" class="col-sm-3 col-form-label form-label">Nama Lengkap</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" id="nameLabel" placeholder="Nama Lengkap" value="Dimas Dwi">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="nimLabel" class="col-sm-3 col-form-label form-label">NIM</label>

                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="nim" id="nimLabel" placeholder="Nomor Induk Mahasiswa" value="17104410041">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div id="accountType" class="row mb-4">
                                    <label class="col-sm-3 col-form-label form-label">Jenis Kelamin</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <!-- Radio Check -->
                                            <label class="form-control" for="jkRadio1">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="jk" id="jkRadio1" checked>
                                                    <span class="form-check-label">Laki-Laki</span>
                                                </span>
                                            </label>
                                            <!-- End Radio Check -->

                                            <!-- Radio Check -->
                                            <label class="form-control" for="jkRadio2">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="jk" id="jkRadio2">
                                                    <span class="form-check-label">Perempuan</span>
                                                </span>
                                            </label>
                                            <!-- End Radio Check -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="firstYearLabel" class="col-sm-3 col-form-label form-label">Tahun</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <input type="number" class="form-control" name="thn_masuk" id="firstYearLabel" placeholder="Tahun Masuk" value="2017">
                                            <input type="number" class="form-control" name="thn_keluar" id="lastYearLabel" placeholder="Tahun Keluar" value="2020">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="prodiLabel" class="col-sm-3 col-form-label form-label">Program Studi</label>

                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" id="prodiLabel">
                                                <option value=" ">Pilih Program Studi</option>
                                                <option value="55201">55201 - Teknik Informatika</option>
                                                <option value="52201">56201 - Sistem Komputer</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="fakultasLabel" class="col-sm-3 col-form-label form-label">Fakultas</label>

                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" id="fakultasLabel">
                                                <option value=" ">Pilih Fakultas</option>
                                                <option value="fti">Fakultas Teknologi Informasi</option>
                                            </select>
                                        </div>
                                        <!-- End Select -->
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email" value="mark@site.com">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="phoneLabel" class="col-sm-3 col-form-label form-label">No Telepon</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone" id="phoneLabel" placeholder="No Telepon" value="08712312312312">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="addressLabel" class="col-sm-3 col-form-label form-label">Alamat</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="alamat" id="addressLabel" placeholder="Alamat Saat ini" value="Blitar">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div id="passwordSection" class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ubah password</h4>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <form id="changePasswordForm">
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Password Sekarang</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Masukkan Password Sekarang">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="newPassword" class="col-sm-3 col-form-label form-label">Password Baru</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Masukkan password baru">
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label form-label">Konfirmasi password baru</label>

                                    <div class="col-sm-9">
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPasswordLabel" placeholder="Konfirmasi password baru mu">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->
                </div>

                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection

@push('js')
    <script src="/assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
    <script src="/assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js"></script>
    <script src="/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
        (function() {
            window.onload = function() {
                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')

                // INITIALIZATION OF STICKY BLOCKS
                // =======================================================
                new HSStickyBlock('.js-sticky-block', {
                    targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ?
                        '#header' : null
                })

                // SCROLLSPY
                // =======================================================
                new bootstrap.ScrollSpy(document.body, {
                    target: '#navbarSettings',
                    offset: 100
                })

                new HSScrollspy('#navbarVerticalNavMenu', {
                    breakpoint: 'lg',
                    scrollOffset: -20
                })
            }
        })()
    </script>
@endpush
