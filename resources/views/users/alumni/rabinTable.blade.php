@extends('users.layouts.index')

@section('content')
    <!-- Content -->
    <div class="content container">

        <!-- Nav -->
        <div class="text-center">
            <ul class="nav nav-fill nav-tabs mb-7" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Preprocessing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">K-Gram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false">Hashing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-four-eg1-tab" href="#nav-four-eg1" data-bs-toggle="pill" data-bs-target="#nav-four-eg1" role="tab" aria-controls="nav-four-eg1" aria-selected="false">Fingerprint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-five-eg1-tab" href="#nav-five-eg1" data-bs-toggle="pill" data-bs-target="#nav-five-eg1" role="tab" aria-controls="nav-five-eg1" aria-selected="false">Similarity</a>
                </li>
            </ul>
        </div>
        <!-- End Nav -->

        <!-- Tab Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel Preprocessing Input</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-thead-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Hasil Preprocessing</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{$data_i['inputan']}}</td>
                                    <td>{{$data_i['inputan_preprocessing']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel Preprocessing Data Alumni</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-lg table-thead-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th class="pe-0">No</th>
                                    <th class="ps-0">NIM</th>
                                    <th>Nama</th>
                                    <th>Hasil Preprocessing</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['NIM']}}</td>
                                    <td>{{$item['nama']}}</td>
                                    <td>{{$item['preprocessing']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>

            <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel K-gram Input</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-thead-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Hasil Preprocessing</th>
                                    <th>K-Gram</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{$data_i['inputan']}}</td>
                                    <td>{{$data_i['inputan_preprocessing']}}</td>
                                    <td>{{$data_i['inputan_kgram']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel K-Gram Data Alumni</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-lg table-thead-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th class="pe-0">No</th>
                                    <th>Hasil Preprocessing</th>
                                    <th>K-Gram</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['preprocessing']}}</td>
                                    <td>{{$item['kgram']}}</td>
                                    <td>{{count($item['kgrams'])}}</td>
                                </tr>
                                    {{-- @foreach ($item['kgrams'] as $item)
                                    <tr>
                                        <td>
                                                {{$item}}
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>

            <div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel Hash Input</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>K-Gram</th>
                                    <th>Proses</th>
                                    <th>Hash</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td rowspan="{{count($data_i['inputan_kgrams']) + 1}}">{{$data_i['inputan']}}</td>
                                </tr>
                                 @for ($i = 0; $i < count($data_i['inputan_kgrams']); $i++)
                                    <tr>
                                        <td>{{$data_i['inputan_kgrams'][$i]}}</td>
                                        <td>
                                            <?php
                                                $n = strlen($data_i['inputan_kgrams'][$i]);
                                                $hash = null;

                                                for ($j = 0; $j < $n; $j++) {
                                                    echo 'ascii(' . $data_i['inputan_kgrams'][$i][$j] . ')' . ' * ' . 10 . '^' . $n - $j - 1;
                                                    if ($j < $n-1) {
                                                        echo ' + ';
                                                    }
                                                }
                                                echo '<br>';
                                                for ($j = 0; $j < $n; $j++) {
                                                    echo ord($data_i['inputan_kgrams'][$i][$j]) . ' * ' . pow(10, $n - $j - 1);
                                                    if ($j < $n-1) {
                                                        echo ' + ';
                                                    }
                                                }
                                                echo '<br>';
                                                for ($j = 0; $j < $n; $j++) {
                                                    echo ord($data_i['inputan_kgrams'][$i][$j]) * pow(10, $n - $j - 1);
                                                    if ($j < $n-1) {
                                                        echo ' + ';
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>{{$data_i['inputan_hash'][$i]}}</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->

                <div class="card">
                    <div class="card-header">
                        {{-- <h5 class="mb-0">Tabel Hashing Data Alumni</h5> --}}
                        <div class="row justify-content-between align-items-center flex-grow-1">
                            <div class="col-md">
                                <h4 class="card-header-title">Tabel Hashing Data Alumni</h4>
                            </div>

                            <div class="col-auto">
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
                    </div>
                    <!-- Table -->
                    <div class="table-responsive datatable-custom">
                        <table id="exportDatatable" class="js-datatable table table-lg table-bordered table-wrap card-table"
                            data-hs-datatables-options='{
                                "order": []
                            }'>
                            <thead class="thead-light">
                                <tr>
                                    {{-- <th class="pe-0">Nama</th> --}}
                                    <th>K-Gram</th>
                                    <th>Proces</th>
                                    <th>Hash</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td colspan="3">Alumni {{$loop->index+1}}</td>
                                    </tr>
                                    @for ($i = 0; $i < count($item['kgrams']); $i++)
                                    <tr>
                                            {{-- <td colspan="3">Alumni {{$loop->index+1}}</td> --}}
                                            <td>{{$item['kgrams'][$i]}}</td>
                                            <td>
                                                <?php
                                                    $n = strlen($item['kgrams'][$i]);
                                                    $hash = null;

                                                    for ($j = 0; $j < $n; $j++) {
                                                        echo 'ascii<sub>(' . $item['kgrams'][$i][$j] . ')</sub>' . ' * ' . 10 . '<sup>' . $n - $j - 1 . '</sup>';
                                                        if ($j < $n-1) {
                                                            echo ' + ';
                                                        }
                                                    }
                                                    echo '<br>';
                                                    for ($j = 0; $j < $n; $j++) {
                                                        echo ord($item['kgrams'][$i][$j]) . ' * ' . pow(10, $n - $j - 1);
                                                        if ($j < $n-1) {
                                                            echo ' + ';
                                                        }
                                                    }
                                                    echo '<br>';
                                                    for ($j = 0; $j < $n; $j++) {
                                                        echo ord($item['kgrams'][$i][$j]) * pow(10, $n - $j - 1);
                                                        if ($j < $n-1) {
                                                            echo ' + ';
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$item['hashings'][$i]}}</td>
                                        </tr>
                                    @endfor
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>

            <div class="tab-pane fade" id="nav-four-eg1" role="tabpanel" aria-labelledby="nav-four-eg1-tab">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel Frekuensi</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-lg table-thead-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th class="pe-0">No</th>
                                    <th>Hashing Input</th>
                                    <th>Hashing Alumni</th>
                                    <th>Frekuensi</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            @foreach ($data_i['inputan_hash'] as $items)
                                                <span class="d-block">
                                                    {{$items}}
                                                </span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($item['hashings'] as $items)
                                            <span class="d-block">
                                                {{$items}}
                                            </span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @forelse ($item['arr_intersection'] as $items)
                                            <span class="d-block">
                                                {{$items}}
                                            </span>
                                            @empty
                                            <span>Tidak Ada</span>
                                            @endforelse
                                        </td>
                                        <td>{{count($item['arr_intersection'])}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>

            <div class="tab-pane fade" id="nav-five-eg1" role="tabpanel" aria-labelledby="nav-five-eg1-tab">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Tabel Similarity</h5>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="" class="table table-lg table-thead-bordered table-wrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th class="pe-0">No</th>
                                    <th>Data</th>
                                    <th>Jumlah K-gram Input</th>
                                    <th>Jumlah K-gram Alumni</th>
                                    <th>Jumlah Frekuensi</th>
                                    <th>Proses</th>
                                    <th>Hasil Similarity</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $collection = collect($data);

                                    $sorted = $collection->sortByDesc(function ($item, $key) {return $item['similarity'];});

                                    $val = $sorted->values()->all();
                                ?>
                                @foreach ($val as $item)
                                    {{-- @if ($item['similarity'] > 0) --}}
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>Alumni {{$item['id']}}</td>
                                            <td>{{count($data_i['inputan_kgrams'])}}</td>
                                            <td>{{count($item['kgrams'])}}</td>
                                            <td>{{$item['intersection']}}</td>
                                            <td>2 x {{$item['intersection']}} / ({{count($data_i['inputan_kgrams'])}} + {{count($item['kgrams'])}}) x 100</td>
                                            <td>{{$item['similarity']}}%</td>
                                        </tr>
                                    {{-- @endif --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Tab Content -->

    </div>
    <!-- End Content -->
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SELECT2
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')

            // INITIALIZATION OF DATATABLES
            // =======================================================
            HSCore.components.HSDatatables.init($('#exportDatatable'),{
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'd-none'
                    },
                ],
                responsive: true,
            })
            const datatable = HSCore.components.HSDatatables.getItem(0)

            $('#export-excel').click(function() {
                datatable.button('.buttons-excel').trigger()
            });
        });
    </script>
@endpush
