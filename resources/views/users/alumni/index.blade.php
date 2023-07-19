@extends('users.layouts.index')

@section('content')
    <!-- Content -->
    <div class="content container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Alumni</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Alumni</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Header -->
        <div class="card card-body">
            <div class="d-flex flex-md-row flex-column justify-content-md-between gap-2">
                <div class="flex-fill mb-2 mb-md-0">
                    <form>
                        <!-- Search -->
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input id="datatableSearch" type="search" class="form-control form-control-sm" placeholder="Cari Alumni" aria-label="Cari Alumni">
                        </div>
                        <!-- End Search -->
                    </form>
                </div>

                <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download me-2"></i> Export
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                            <span class="dropdown-header">Options</span>
                            <a id="export-copy" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                                Copy
                            </a>
                            <a id="export-print" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/illustrations/print-icon.svg" alt="Image Description">
                                Print
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Download options</span>
                            <a id="export-excel" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/brands/excel-icon.svg" alt="Image Description">
                                Excel
                            </a>
                            <a id="export-csv" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                                .CSV
                            </a>
                            <a id="export-pdf" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/brands/pdf-icon.svg" alt="Image Description">
                                PDF
                            </a>
                        </div>
                    </div>
                    <!-- End Dropdown -->

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm w-100" id="usersFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-filter me-1"></i> Filter
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm-end dropdown-card card-dropdown-filter-centered" aria-labelledby="usersFilterDropdown" style="min-width: 22rem;">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-header card-header-content-between">
                                    <h5 class="card-header-title">Filter kyc</h5>

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
                                                <small class="text-cap text-body">Status</small>

                                                <!-- Select -->
                                                <div class="tom-select-custom">
                                                    <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="4"
                                                        data-hs-tom-select-options='{
                                                            "searchInDropdown": false,
                                                            "hideSearch": true,
                                                            "dropdownWidth": "10rem",
                                                            "allowEmptyOption": true
                                                        }'>
                                                        <option value="">Any status</option>
                                                        <option value="0" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-warning"></span>Pending</span>'>
                                                            Pending</option>
                                                        <option value="1" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-success"></span>Approved</span>'>
                                                            Approved</option>
                                                        <option value="2" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-danger"></span>Rejected</span>'>
                                                            Rejected</option>
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
                </div>
            </div>
        </div>
        <!-- End Header -->

        <!-- Card -->
        <div class="card">
            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
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
                            <th>NIM</th>
                            <th>Angkatan</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="pe-0">1</td>
                            <td class="ps-0">
                                <a class="d-flex align-items-center" href="#">
                                    <div class="avatar avatar-sm">
                                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img1.jpg') }}" alt="Image Description">
                                    </div>
                                    <div class="ms-3">
                                        <span class="d-block h5 mb-0">Dimas Dwi <i class="bi-check-circle text-primary" data-toggle="tooltip" data-placement="top" title="Terverifikasi"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>17104410041</td>
                            <td>2017</td>
                            <td>Teknik Informatika</td>
                            <td>
                                <a class="btn btn-sm btn-white" href="javascript:;">
                                    <i class="tio-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-0">2</td>
                            <td class="ps-0">
                                <a class="d-flex align-items-center" href="#">
                                    <div class="avatar avatar-sm">
                                        <img class="avatar-img" src="{{ asset('/assets/img/160x160/img1.jpg') }}" alt="Image Description">
                                    </div>
                                    <div class="ms-3">
                                        <span class="d-block h5 mb-0">Domas Dwi <i class="bi-check-circle text-primary" data-toggle="tooltip" data-placement="top" title="Terverifikasi"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>17104410041</td>
                            <td>2017</td>
                            <td>Teknik Informatika</td>
                            <td>
                                <a class="btn btn-sm btn-white" href="javascript:;">
                                    <i class="tio-edit"></i> Edit
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
                                <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off"
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

        <?php

            // Fungsi untuk melakukan preprocessing
            function preprocess($text) {
                // Mengubah semua karakter menjadi huruf kecil dan menghapus karakter non-alfabet
                $text = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $text));
                return $text;
            }

            // Fungsi untuk melakukan tokenizing menjadi k-gram
            function tokenize($text, $k) {
                $tokens = [];
                $n = strlen($text);

                // Memisahkan teks menjadi k-gram
                for ($i = 0; $i < $n - $k + 1; $i++) {
                    $tokens[] = substr($text, $i, $k);
                }

                return $tokens;
            }

            // Fungsi untuk menghitung nilai hash menggunakan rolling hash
            function rollingHash($token) {
                $hash = 0;
                $n = strlen($token);
                $prime = 11; // Bilangan prima untuk menghindari kolisi hash

                for ($i = 0; $i < $n; $i++) {
                    $hash += ord($token[$i]) * pow($prime, $n - $i - 1);
                }

                return $hash;
            }

            // Fungsi untuk menghitung fingerprint dari token
            function fingerprint($token) {
                return rollingHash($token);
            }

            // Fungsi untuk menghitung kesamaan antara dua set fingerprint
            function similarity($fingerprint1, $fingerprint2) {
                $intersection = count(array_intersect($fingerprint1, $fingerprint2));
                $union = count(array_unique(array_merge($fingerprint1, $fingerprint2)));
                $similarity = $intersection / $union * 100;
                echo (count($fingerprint1) + count($fingerprint2));
                return $similarity;
            }

            // Data input
            $data_input = "17104410041dimasdwi2017";
            $data_sample = "17104410041dimasdwiichtiartoteknologiinfomasiteknikinformatikalakilaki2017";

            // Preprocessing
            $data_input = preprocess($data_input);
            $data_sample = preprocess($data_sample);

            // Tokenizing
            $k = 4;
            $tokens_input = tokenize($data_input, $k);
            $tokens_sample = tokenize($data_sample, $k);

            // Hashing (Rolling Hash)
            $fingerprints_input = [];
            $fingerprints_sample = [];

            foreach ($tokens_input as $token) {
                $fingerprints_input[] = fingerprint($token);
            }

            foreach ($tokens_sample as $token) {
                $fingerprints_sample[] = fingerprint($token);
            }

            // Similarity
            $similarity = similarity($fingerprints_input, $fingerprints_sample);

            // Tampilkan hasil
            echo "Data Input: " . $data_input . "\n";
            echo "Data Sample: " . $data_sample . "\n";
            echo "Token: " . json_encode($tokens_input) . "\n";
            echo "Token: " . json_encode($fingerprints_input) . "\n";
            echo "Similarity: " . $similarity . "\n";
        ?>
    </div>
    <!-- End Content -->
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net.extensions/select/select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).on('ready', function() {
            console.log('{{$similarity}}');
            // =======================================================
            // INITIALIZATION OF SELECT2
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')

            // INITIALIZATION OF DATATABLES
            // =======================================================
            HSCore.components.HSDatatables.init($('#datatable'), {
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        className: 'd-none'
                    },
                    {
                        extend: 'excel',
                        className: 'd-none'
                    },
                    {
                        extend: 'csv',
                        className: 'd-none'
                    },
                    {
                        extend: 'pdf',
                        className: 'd-none'
                    },
                    {
                        extend: 'print',
                        className: 'd-none'
                    },
                ],
                responsive: true,
                language: {
                    zeroRecords: `<div class="text-center p-4">
                        <img class="mb-3" src="/assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
                        <img class="mb-3" src="/assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
                        <p class="mb-0">No data to show</p>
                        </div>`
                }
            });

            const datatable = HSCore.components.HSDatatables.getItem(0)

            $('#export-copy').click(function() {
                datatable.button('.buttons-copy').trigger()
            });

            $('#export-excel').click(function() {
                datatable.button('.buttons-excel').trigger()
            });

            $('#export-csv').click(function() {
                datatable.button('.buttons-csv').trigger()
            });

            $('#export-pdf').click(function() {
                datatable.button('.buttons-pdf').trigger()
            });

            $('#export-print').click(function() {
                datatable.button('.buttons-print').trigger()
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
