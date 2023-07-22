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
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Laporan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tracer Study</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Laporan Tracer Study</h1>
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
                     "columnDefs": [{
                        "targets": [5],
                        "orderable": false
                      }],
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
                            <th class="ps-0">Nama</th>
                            <th>Program Studi</th>
                            <th>Fakultas</th>
                            <th>Angkatan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="pe-0">1</td>
                            <td class="ps-0">Dimas Dwi</td>
                            <td>Teknologi Informasi</td>
                            <td>Teknik Informatika</td>
                            <td>2017</td>
                            <td>
                                <span class="badge bg-warning">Belum Tervalidasi</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-success" href="/admin/report/tracer-study/validate/1">
                                    <i class="bi-check-circle"></i> Validasi
                                </a>
                                <a class="btn btn-sm btn-info" href="/admin/report/tracer-study/detail/1">
                                    <i class="bi-eye"></i> Detail
                                </a>
                            </td>
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
