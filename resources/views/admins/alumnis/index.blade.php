@extends('admins.layouts.index')

@section('content')
    <!-- Content -->
    <div class="content container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Manage</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Alumni</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Alumni</h1>
                </div>
                <div class="col-sm-auto">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#alumniAddModal">Tambah</button>
                    <!-- End Button trigger modal -->

                    <!-- Modal -->
                    <div id="alumniAddModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="alumniAddModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-top-cover bg-dark text-center">
                                    <figure class="position-absolute end-0 bottom-0 start-0">
                                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                                        </svg>
                                    </figure>

                                    <div class="modal-close">
                                        <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <!-- End Header -->

                                <div class="modal-top-cover-icon">
                                    <span class="icon icon-lg icon-light icon-circle icon-centered shadow-sm">
                                        <i class="bi-person fs-2"></i>
                                    </span>
                                </div>

                                <form action="/admin/manage/alumni" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nameLabel">Nama</label>
                                                    <input type="text" id="nameLabel" class="form-control" name="name" placeholder="John Doe" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nimLabel">NIM</label>
                                                    <input type="text" id="nimLabel" class="form-control" name="nim" placeholder="xxxxxxxxxxx" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="angkatanLabel">Angkatan</label>
                                                    <div class="tom-select-custom">
                                                        <select class="js-select form-select" autocomplete="off" name="thn_masuk" id="angkatanLabel"
                                                                data-hs-tom-select-options='{
                                                                "placeholder": "Pilih Angkatan...",
                                                                "hideSearch": true
                                                                }' required>
                                                            <option value="">Pilih Angkatan...</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="lulusanLabel">Lulusan</label>
                                                    <div class="tom-select-custom">
                                                        <select class="js-select form-select" autocomplete="off" name="thn_keluar" id="lulusanLabel"
                                                                data-hs-tom-select-options='{
                                                                "placeholder": "Pilih Lulusan...",
                                                                "hideSearch": true
                                                                }'>
                                                            <option value="">Pilih Lulusan...</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="genderLabel">Gender</label>
                                                    <div class="row">
                                                        <div class="col-sm mb-2 mb-sm-0">
                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg1">
                                                                <span class="form-check">
                                                                    <input type="radio" class="form-check-input" name="gender" value="Laki - Laki" id="formControlRadioEg1" checked>
                                                                    <span class="form-check-label">Laki - Laki</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->
                                                        </div>

                                                        <div class="col-sm mb-2 mb-sm-0">
                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg2">
                                                                <span class="form-check">
                                                                    <input type="radio" class="form-check-input" name="gender" value="Perempuan" id="formControlRadioEg2">
                                                                    <span class="form-check-label">Perempuan</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->
                                                        </div>
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="fakultasLabel">Fakultas</label>
                                                    <div class="tom-select-custom">
                                                        <select class="js-select form-select" autocomplete="off" name="fakultas" id="fakultasLabel"
                                                                data-hs-tom-select-options='{
                                                                "placeholder": "Pilih Fakultas...",
                                                                "hideSearch": true
                                                                }' required>
                                                            <option value="">Pilih Fakultas...</option>
                                                            <option value="Teknologi Informasi" selected>Teknologi Informasi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="prodiLabel">Program Studi</label>
                                                    <div class="tom-select-custom">
                                                        <select class="js-select form-select" autocomplete="off" name="prodi" id="prodiLabel"
                                                                data-hs-tom-select-options='{
                                                                "placeholder": "Pilih Program Studi...",
                                                                "hideSearch": true
                                                                }' required>
                                                            <option value="">Pilih Program Studi...</option>
                                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                                            <option value="Sistem Komputer">Sistem Komputer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Header -->
        <div class="card card-body mb-3 mb-lg-5">
            <div class="d-flex flex-md-row flex-column justify-content-md-between gap-2">
                <div class="flex-fill mb-2 mb-md-0">
                    <form>
                        <!-- Search -->
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" id="datatableSearch" class="form-control form-control-sm"
                                placeholder="Cari Alumni" aria-label="Cari Alumni">
                        </div>
                        <!-- End Search -->
                    </form>
                </div>

                <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm w-100" id="usersFilterDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-filter me-1"></i> Filter
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm-end dropdown-card card-dropdown-filter-centered"
                            aria-labelledby="usersFilterDropdown" style="min-width: 22rem;">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-header card-header-content-between">
                                    <h5 class="card-header-title">Filter Alumni</h5>

                                    <!-- Toggle Button -->
                                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm ms-2">
                                        <i class="bi-x-lg"></i>
                                    </button>
                                    <!-- End Toggle Button -->
                                </div>

                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm mb-4">
                                                <small class="text-cap text-body">Program Studi</small>

                                                <!-- Select -->
                                                <div class="tom-select-custom">
                                                    <select class="js-select js-datatable-filter form-select form-select-sm"
                                                        data-target-column-index="4"
                                                        data-hs-tom-select-options='{
                                                            "searchInDropdown": false,
                                                            "hideSearch": true,
                                                            "dropdownWidth": "10rem",
                                                            "allowEmptyOption": true
                                                        }'>
                                                        <option value="">Semua</option>
                                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                                        <option value="Sistem Komputer">Sistem Komputer</option>
                                                    </select>
                                                </div>
                                                <!-- End Select -->
                                            </div>
                                            <!-- End Col -->
                                        </div>
                                        <!-- End Row -->

                                        <div class="d-grid">
                                            <a class="btn btn-primary" href="javascript:;">Apply</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <!-- End Dropdown -->

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download me-2"></i> Export
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                            <span class="dropdown-header">Download options</span>
                            <a id="export-excel" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/brands/excel-icon.svg"
                                    alt="Image Description">
                                Excel
                            </a>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
        </div>
        <!-- End Header -->

        <!-- Card -->
        <div class="card">
            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 10,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                    <thead class="thead-light">
                        <tr>
                            <th class="pe-0">No</th>
                            <th class="ps-0">NIM</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Fakultas</th>
                            <th>Jenis Kelamin</th>
                            <th>Angkatan</th>
                            <th>Lulusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($alumni as $value) <tr>
                            <td class="pe-0">{{ $value->id }}</td>
                            <td class="ps-0">{{ $value->NIM }}</td>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->fakultas }}</td>
                            <td>{{ $value->prodi }}</td>
                            <td>{{ $value->gender }}</td>
                            <td>{{ $value->thn_masuk }}</td>
                            <td>{{ $value->thn_keluar }}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="/admin/manage/alumni/detail/1">
                                    <i class="bi-eye"></i> Detail
                                </a>
                            </td>
                        @endforeach

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="me-2">Showing:</span>

                            <!-- Select -->
                            <div class="tom-select-custom">
                                <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                                    autocomplete="off"
                                    data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "auto"
                                    }'>
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <!-- End Select -->

                            <span class="text-secondary me-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->

    </div>
    <!-- End Content -->
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net.extensions/select/select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>

    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SELECT2
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')

            // INITIALIZATION OF DATATABLES
            // =======================================================
            HSCore.components.HSDatatables.init($('#datatable'), {
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excel',
                    className: 'd-none'
                }, ],
                responsive: true,
                // ajax: function(data, callback) {
                //     $.ajax({
                //         url: '/user/data/alumni/ajax',
                //         'data':{
                //             ...data,
                //             string: $('#searchRabin').val(),
                //         },
                //         dataType: 'json',
                //         beforeSend: function() {
                //             // Here, manually add the loading message.
                //             $('#datatable > tbody').html(
                //                 '<tr>' +
                //                 '<td colspan="8"><div class="d-flex justify-content-center"><div class="spinner-border" role="status"></div></div></td>' +
                //                 '</tr>'
                //             );
                //         },
                //         success: function(res) {
                //             callback(res);
                //         }
                //     })
                // },
                // columns: [
                //     {
                //         data: 'id',
                //         name: 'id'
                //     },
                //     {
                //         data: 'NIM',
                //         name: 'Nomor Induk'
                //     },
                //     {
                //         data: 'nama',
                //         name: 'Nama'
                //     },
                //     {
                //         data: 'prodi',
                //         name: 'Program Studi'
                //     },
                //     {
                //         data: 'Fakultas',
                //         name: 'Fakultas'
                //     },
                //     {
                //         data: 'gender',
                //         name: 'jenis Kelamin'
                //     },
                //     {
                //         data: 'thn_masuk',
                //         name: 'Tahun Masuk'
                //     },
                //     {
                //         data: null,
                //         name: 'Action',
                //         render: function (data, type, full) {
                //             return `<a class="btn btn-sm btn-info" href="/user/data/alumni/detail/${data.id}">
            //                     <i class="bi-eye"></i> Detail
            //                 </a>`;
                //         }
                //     },
                // ],
                language: {
                    zeroRecords: `<div class="text-center p-4">
                        <img class="mb-3" src="/assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
                        <img class="mb-3" src="/assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
                        <p class="mb-0">No data to show</p>
                        </div>`
                }
            });

            const datatable = HSCore.components.HSDatatables.getItem(0)

            $('#export-excel').click(function() {
                datatable.button('.buttons-excel').trigger()
            });

            $('.js-datatable-filter').on('change', function() {
                var $this = $(this),
                    elVal = $this.val(),
                    targetColumnIndex = $this.data('target-column-index');

                datatable.column(targetColumnIndex).search(elVal).draw();
            });
        });
    </script>
@endpush
