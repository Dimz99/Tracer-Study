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
        <div class="card card-body mb-3 mb-lg-5">
            <form action="/user/data/alumni/detail/rabin" method="get">
                <div class="d-flex flex-md-row flex-column justify-content-md-between gap-2">
                    <div class="flex-fill mb-2 mb-md-0">
                        <div class="d-flex gap-2">
                            <!-- Search -->
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend input-group-text">
                                    <i class="bi-search"></i>
                                </div>
                                <input type="search" id="searchRabin" name="search" class="form-control form-control-sm" placeholder="Cari Alumni format[NIM][nama]" aria-label="Cari Alumni format[NIM][nama]">
                            </div>
                            <a href="javascript:;" id="srcButton" class="btn btn-sm btn-primary">Rabin</a>
                            <button type="submit" class="btn btn-sm btn-primary d- ">Detail</button>
                            <!-- End Search -->
                        </div>
                    </div>

                    <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-download me-2"></i> Export
                            </button>

                            <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                                <span class="dropdown-header">Download options</span>
                                <a id="export-excel" class="dropdown-item" href="javascript:;">
                                    <img class="avatar avatar-xss avatar-4x3 me-2" src="/assets/svg/brands/excel-icon.svg" alt="Image Description">
                                    Excel
                                </a>
                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>
                </div>
            </form>
        </div>
        <!-- End Header -->

        <!-- Card -->
        <div class="card">
            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
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
                            <th>Kecocokan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

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
                                    <option value="5">5</option>
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
            // function preprocess($text) {
            //     // Mengubah semua karakter menjadi huruf kecil dan menghapus karakter non-alfabet
            //     $text = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $text));
            //     return $text;
            // }

            // // Fungsi untuk melakukan tokenizing menjadi k-gram
            // function tokenize($text, $k) {
            //     $tokens = [];
            //     $n = strlen($text);

            //     // Memisahkan teks menjadi k-gram
            //     for ($i = 0; $i < $n - $k + 1; $i++) {
            //         $tokens[] = substr($text, $i, $k);
            //     }

            //     return $tokens;
            // }

            // // Fungsi untuk menghitung nilai hash menggunakan rolling hash
            // function rollingHash($token) {
            //     $hash = 0;
            //     $n = strlen($token);
            //     $prime = 11; // Bilangan prima untuk menghindari kolisi hash

            //     for ($i = 0; $i < $n; $i++) {
            //         $hash += ord($token[$i]) * pow($prime, $n - $i - 1);
            //     }

            //     return $hash;
            // }

            // // Fungsi untuk menghitung fingerprint dari token
            // function fingerprint($token) {
            //     return rollingHash($token);
            // }

            // // Fungsi untuk menghitung kesamaan antara dua set fingerprint
            // function similarity($fingerprint1, $fingerprint2) {
            //     $intersection = count(array_intersect($fingerprint1, $fingerprint2));
            //     $union = count(array_unique(array_merge($fingerprint1, $fingerprint2)));
            //     $similarity = $intersection / $union * 100;
            //     echo (count($fingerprint1) + count($fingerprint2));
            //     return $similarity;
            // }

            // // Data input
            // $data_input = "17104410041 Dimas Dwi 2017";
            // $data_sample = "17104410041dimasdwiichtiartoteknologiinfomasiteknikinformatikalakilaki2017";

            // // Preprocessing
            // $data_input = preprocess($data_input);
            // $data_sample = preprocess($data_sample);

            // // Tokenizing
            // $k = 3;
            // $tokens_input = tokenize($data_input, $k);
            // $tokens_sample = tokenize($data_sample, $k);

            // // Hashing (Rolling Hash)
            // $fingerprints_input = [];
            // $fingerprints_sample = [];

            // foreach ($tokens_input as $token) {
            //     $fingerprints_input[] = fingerprint($token);
            // }

            // foreach ($tokens_sample as $token) {
            //     $fingerprints_sample[] = fingerprint($token);
            // }

            // // Similarity
            // $similarity = similarity($fingerprints_input, $fingerprints_sample);

            // // Tampilkan hasil
            // echo "Data Input: " . $data_input . "\n";
            // echo "Data Sample: " . $data_sample . "\n";
            // echo "Token: " . json_encode($tokens_input) . "\n";
            // echo "Token: " . json_encode($fingerprints_input) . "\n";
            // echo "Similarity: " . $similarity . "\n";

            // function calculateHash($str, $base, $length) {
            //     $hash = 0;
            //     for ($i = 0; $i < $length; $i++) {
            //         $hash += ord($str[$i]) * pow($base, $length - 1 - $i);
            //     }
            //     return $hash;
            // }

            // function updateHash($prevHash, $prevChar, $newChar, $k, $base) {
            //     $newHash = $prevHash - ord($prevChar);
            //     $newHash /= $base;
            //     $newHash += ord($newChar) * pow($base, $k - 1);
            //     return $newHash;
            // }

            // function tokenizeAndRollingHash($str, $k, $base) {
            //     $result = [];

            //     $length = strlen($str);
            //     if ($length < $k) {
            //         return $result;
            //     }

            //     $currentHash = calculateHash(substr($str, 0, $k), $base, $k);

            //     for ($i = 0; $i <= $length - $k; $i++) {
            //         $kgram = substr($str, $i, $k);
            //         $result[] = '{' . $currentHash . '}';
            //         if ($i + $k < $length) {
            //             $currentHash = updateHash($currentHash, $str[$i], $str[$i + $k], $k, $base);
            //         }
            //     }

            //     return $result;
            // }

            // // Example usage:
            // $string = "17104410041dimasdwi2017";
            // $k = 3;
            // $base = 11;

            // $tokens = tokenizeAndRollingHash($string, $k, $base);
            // echo implode(" ", $tokens);
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
<script src="/assets/vendor/jszip/dist/jszip.min.js"></script>
<script src="/assets/vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="/assets/vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SELECT2
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')

            // INITIALIZATION OF DATATABLES
            // =======================================================
            HSCore.components.HSDatatables.init($('#datatable'), {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'd-none'
                    },
                ],
                responsive: true,
                ajax: function(data, callback) {
                    $.ajax({
                        url: '/user/data/alumni/ajax',
                        'data':{
                            ...data,
                            string: $('#searchRabin').val(),
                        },
                        dataType: 'json',
                        beforeSend: function() {
                            // Here, manually add the loading message.
                            $('#datatable > tbody').html(
                                '<tr>' +
                                '<td colspan="8"><div class="d-flex justify-content-center"><div class="spinner-border" role="status"></div></div></td>' +
                                '</tr>'
                            );
                        },
                        success: function(res) {
                            callback(res);
                            console.log(res);
                        }
                    })
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'NIM',
                        name: 'Nomor Induk'
                    },
                    {
                        data: 'nama',
                        name: 'Nama'
                    },
                    {
                        data: 'prodi',
                        name: 'Program Studi'
                    },
                    {
                        data: 'fakultas',
                        name: 'Fakultas'
                    },
                    {
                        data: 'gender',
                        name: 'jenis Kelamin'
                    },
                    {
                        data: 'thn_masuk',
                        name: 'Tahun Masuk'
                    },
                    {
                        data: 'thn_keluar',
                        name: 'Tahun Keluar'
                    },
                    {
                        data: null,
                        name: 'Similarity',
                        render: function (data, type, full) {
                            if (Object.keys(data).some(key => key === 'similarity')){
                                return data.similarity + '%';
                            }
                            else return '';
                        }
                    },
                    {
                        data: null,
                        name: 'Action',
                        render: function (data, type, full) {
                            return `<a class="btn btn-sm btn-info" href="/user/data/alumni/detail/${data.id}">
                                    <i class="bi-eye"></i> Detail
                                </a>`;
                        }
                    },
                ],
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

            $('#srcButton').click(function() {
                datatable.ajax.reload()
            });
        });
    </script>
@endpush
