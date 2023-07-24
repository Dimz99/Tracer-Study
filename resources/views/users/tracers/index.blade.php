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
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tracer Study</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Tracer Study</h1>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            PENDATAAN ALUMNI
                        </h2>
                    </div>
                </div>

                <form action="/user/data/tracer-study" method="POST">
                    @csrf
                    @foreach ($question as $item)
                        <div class="card mb-3">
                            <div class="card-body">
                                <!-- Form Group -->

                                @if ($item->type == 'choice')
                                    @if ($item->code == 'a1' || $item->code == 'a3' || $item->code == 'a4' || $item->code == 'c1' || $item->code == 'e9')
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <div class="row">
                                            <div class="col-sm mb-2 mb-sm-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg1{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" value="ya" id="formControlRadioEg1{{$item->code}}">
                                                        <span class="form-check-label">Ya</span>
                                                    </span>
                                                </label>
                                                <!-- End Form Radio -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg2{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" value="tidak" id="formControlRadioEg2{{$item->code}}">
                                                        <span class="form-check-label">Tidak</span>
                                                    </span>
                                                </label>
                                                <!-- End Form Radio -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    @elseif ($item->code == 'a2')
                                        <div id="{{ $item->code}}">
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg1{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Rumah sendiri/bersama orang tua" id="formControlRadioEg1{{$item->code}}">
                                                    <span class="form-check-label">Rumah sendiri/bersama orang tua</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg2{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Kos" id="formControlRadioEg2{{$item->code}}">
                                                    <span class="form-check-label">Kos</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg3{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Pondok Pesantren" id="formControlRadioEg3{{$item->code}}">
                                                    <span class="form-check-label">Pondok Pesantren</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg4{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg4{{$item->code}}">
                                                        <span class="form-check-label">Lainnya</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Radio -->
                                        </div>
                                    </div>
                                    @elseif ($item->code == 'e1' || $item->code == 'e3')
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <div class="row">
                                            <div class="col-sm mb-2 mb-sm-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg1{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" value="sebelum" id="formControlRadioEg1{{$item->code}}">
                                                        <span class="form-check-label">Sebelum Lulus</span>
                                                    </span>
                                                </label>
                                                <!-- End Form Radio -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg2{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" value="setelah" id="formControlRadioEg2{{$item->code}}">
                                                        <span class="form-check-label">Setelah Lulus</span>
                                                    </span>
                                                </label>
                                                <!-- End Form Radio -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    @elseif ($item->code == 'e11')
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg1{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Tidak" id="formControlRadioEg1{{$item->code}}">
                                                    <span class="form-check-label">Tidak</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg2{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja" id="formControlRadioEg2{{$item->code}}">
                                                    <span class="form-check-label">Tidak, tapi saya sedang menunggu hasil lamaran kerja</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg3{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan" id="formControlRadioEg3{{$item->code}}">
                                                    <span class="form-check-label">Ya, saya akan mulai bekerja dalam 2 minggu ke depan</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg4{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan" id="formControlRadioEg4{{$item->code}}">
                                                    <span class="form-check-label">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg5{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg5{{$item->code}}">
                                                        <span class="form-check-label">Lainnya</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Radio -->
                                        </div>
                                    @elseif ($item->code == 'e12')
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg1{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="1" id="formControlRadioEg1{{$item->code}}">
                                                    <span class="form-check-label">(1) Instansi pemerintah (termasuk BUMN)</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg2{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="2" id="formControlRadioEg2{{$item->code}}">
                                                    <span class="form-check-label">(2) Organisasi non-profit/Lembaga Swadaya Masyarakat</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg3{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="3" id="formControlRadioEg3{{$item->code}}">
                                                    <span class="form-check-label">(3) Perusahaan swasta</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg4{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="4" id="formControlRadioEg4{{$item->code}}">
                                                    <span class="form-check-label">(4) Wiraswasta/perusahaan sendiri</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg5{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg5{{$item->code}}">
                                                        <span class="form-check-label">Lainnya</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Radio -->
                                        </div>
                                    @elseif ($item->code == 'e13')
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg1{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="1" id="formControlRadioEg1{{$item->code}}">
                                                    <span class="form-check-label">[1] Biaya Sendiri / Keluarga</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg2{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="2" id="formControlRadioEg2{{$item->code}}">
                                                    <span class="form-check-label">[2] Beasiswa ADIK</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg3{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="3" id="formControlRadioEg3{{$item->code}}">
                                                    <span class="form-check-label">[3] Beasiswa BIDIKMISI</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg4{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="4" id="formControlRadioEg4{{$item->code}}">
                                                    <span class="form-check-label">[4] Beasiswa PPA</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg5{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="5" id="formControlRadioEg5{{$item->code}}">
                                                    <span class="form-check-label">[5] Beasiswa AFIRMASI</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="mb-3">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg6{{$item->code}}">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" value="6" id="formControlRadioEg6{{$item->code}}">
                                                    <span class="form-check-label">[6] Beasiswa Perusahaan/Swasta</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Radio -->
                                                <label class="form-control" for="formControlRadioEg7{{$item->code}}">
                                                    <span class="form-check">
                                                        <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg7{{$item->code}}">
                                                        <span class="form-check-label">Lainnya</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Radio -->
                                        </div>
                                    @elseif ($item->code == 'e17')
                                        <label for="formLabel{{$loop->index}}" class="form-label">{{$item->question}}</label>

                                        <div class="input-group input-group-vertical">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}1">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}1" value="1">
                                                    <span class="form-check-label">(1) Sangat Erat</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}2">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}2" value="2">
                                                    <span class="form-check-label">(2) Erat</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}3">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}3" value="3">
                                                    <span class="form-check-label">(3) Cukup Erat</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}4">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}4" value="4">
                                                    <span class="form-check-label">(4) Kurang Erat</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}5">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}5" value="5">
                                                    <span class="form-check-label">(5) Tidak sama sekali</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <!-- End Row -->
                                    @elseif ($item->code == 'e18')
                                        <label for="formLabel{{$loop->index}}" class="form-label">{{$item->question}}</label>

                                        <div class="input-group input-group-vertical">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}1">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}1" value="1">
                                                    <span class="form-check-label">(1) Setingkat Lebih Tinggi</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}2">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}2" value="2">
                                                    <span class="form-check-label">(2) Tingkat yang Sama</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}3">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}3" value="3">
                                                    <span class="form-check-label">(3) Setingkat Lebih Rendah</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}4">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}4" value="4">
                                                    <span class="form-check-label">(4) Tidak Perlu Pendidikan Tinggi</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <!-- End Row -->
                                    @elseif ($item->title == 'tracer')
                                        <label for="formLabel{{$loop->index}}" class="form-label">{{$item->question}}</label>

                                        <div class="input-group input-group-sm-vertical">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}1">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}1" value="1">
                                                    <span class="form-check-label">(1) Sangat Rendah</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}2">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}2" value="2">
                                                    <span class="form-check-label">(2) Rendah</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}3">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}3" value="3">
                                                    <span class="form-check-label">(3) Cukup</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}4">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}4" value="4">
                                                    <span class="form-check-label">(4) Tinggi</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}5">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}5" value="5">
                                                    <span class="form-check-label">(5) Sangat Tinggi</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <!-- End Row -->
                                    @else
                                        <label for="formLabel{{$loop->index}}" class="form-label">{{$item->question}}</label>

                                        <div class="input-group input-group-sm-vertical">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}1">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}1" value="1">
                                                    <span class="form-check-label">(1) Sangat besar</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}2">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}2" value="2">
                                                    <span class="form-check-label">(2) Besar</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}3">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}3" value="3">
                                                    <span class="form-check-label">(3) Cukup</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}4">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}4" value="4">
                                                    <span class="form-check-label">(4) Kurang</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg{{$item->code}}5">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="{{$item->code}}" id="formControlRadioEg{{$item->code}}5" value="5">
                                                    <span class="form-check-label">(5) Tidak sama sekali</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                        <!-- End Row -->
                                    @endif
                                @elseif ($item->type == 'string')
                                    <div class="">
                                        <label for="formLabel{{$item->code}}" class="form-label">{{$item->question}}</label>

                                        <input type="text" class="form-control" name="{{$item->code}}" id="formLabel{{$item->code}}" placeholder="Jawaban Anda...">
                                    </div>
                                @elseif ($item->type == 'multiple')
                                    <label for="formLabel{{$loop->index}}" class="form-label">{{$item->question}}</label>

                                    @if ($item->code == 'e2')
                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck11{{$item->code}}" class="form-check-input" value="Melalui iklan di koran/majalah, brosur">
                                                <label class="form-check-label" for="formCheck11{{$item->code}}">Melalui iklan di koran/majalah, brosur</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck12{{$item->code}}" class="form-check-input" value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada">
                                                <label class="form-check-label" for="formCheck12{{$item->code}}">Melamar ke perusahaan tanpa mengetahui lowongan yang ada</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck13{{$item->code}}" class="form-check-input" value="Pergi ke bursa/pameran kerja">
                                                <label class="form-check-label" for="formCheck13{{$item->code}}">Pergi ke bursa/pameran kerja</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck14{{$item->code}}" class="form-check-input" value="Mencari lewat internet/iklan online/milis">
                                                <label class="form-check-label" for="formCheck14{{$item->code}}">Mencari lewat internet/iklan online/milis</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck15{{$item->code}}" class="form-check-input" value="Dihubungi oleh perusahaan">
                                                <label class="form-check-label" for="formCheck15{{$item->code}}">Dihubungi oleh perusahaan</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck16{{$item->code}}" class="form-check-input" value="Menghubungi Kemenakertrans">
                                                <label class="form-check-label" for="formCheck16{{$item->code}}">Menghubungi Kemenakertrans</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck17{{$item->code}}" class="form-check-input" value="Menghubungi agen tenaga kerja komersial/swasta">
                                                <label class="form-check-label" for="formCheck17{{$item->code}}">Menghubungi agen tenaga kerja komersial/swasta</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck18{{$item->code}}" class="form-check-input" value="Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas">
                                                <label class="form-check-label" for="formCheck18{{$item->code}}">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck19{{$item->code}}" class="form-check-input" value="Menghubungi kantor kemahasiswaan/hubungan alumni">
                                                <label class="form-check-label" for="formCheck19{{$item->code}}">Menghubungi kantor kemahasiswaan/hubungan alumni</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck20{{$item->code}}" class="form-check-input" value="Membangun jejaring (network) sejak masih kuliah">
                                                <label class="form-check-label" for="formCheck20{{$item->code}}">Membangun jejaring (network) sejak masih kuliah</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck21{{$item->code}}" class="form-check-input" value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.">
                                                <label class="form-check-label" for="formCheck21{{$item->code}}">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck22{{$item->code}}" class="form-check-input" value="Membangun bisnis sendiri">
                                                <label class="form-check-label" for="formCheck22{{$item->code}}">Membangun bisnis sendiri</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck23{{$item->code}}" class="form-check-input" value="Melalui penempatan kerja atau magang">
                                                <label class="form-check-label" for="formCheck23{{$item->code}}">Melalui penempatan kerja atau magang</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck24{{$item->code}}" class="form-check-input" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah">
                                                <label class="form-check-label" for="formCheck24{{$item->code}}">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Checkbox -->
                                                <div class="form-check">
                                                    <input type="checkbox" id="formCheck25{{$item->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck25{{$item->code}}">Lainnya</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-sm form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>
                                    @elseif ($item->code == 'e10')
                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck11{{$item->code}}" class="form-check-input" value="Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana">
                                                <label class="form-check-label" for="formCheck11{{$item->code}}">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck12{{$item->code}}" class="form-check-input" value="Saya menikah">
                                                <label class="form-check-label" for="formCheck12{{$item->code}}">Saya menikah</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck13{{$item->code}}" class="form-check-input" value="Saya sibuk dengan keluarga dan anak-anak">
                                                <label class="form-check-label" for="formCheck13{{$item->code}}">Saya sibuk dengan keluarga dan anak-anak</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck14{{$item->code}}" class="form-check-input" value="Saya sekarang sedang mencari pekerjaan">
                                                <label class="form-check-label" for="formCheck14{{$item->code}}">Saya sekarang sedang mencari pekerjaan</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Checkbox -->
                                                <div class="form-check">
                                                    <input type="checkbox" id="formCheck15{{$item->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck15{{$item->code}}">Lainnya</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-sm form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>
                                    @elseif ($item->code == 'e19')
                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck11{{$item->code}}" class="form-check-input" value="Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.">
                                                <label class="form-check-label" for="formCheck11{{$item->code}}">Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck12{{$item->code}}" class="form-check-input" value="Saya belum mendapatkan pekerjaan yang lebih sesuai.">
                                                <label class="form-check-label" for="formCheck12{{$item->code}}">Saya belum mendapatkan pekerjaan yang lebih sesuai.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck13{{$item->code}}" class="form-check-input" value="Di pekerjaan ini saya memeroleh prospek karir yang baik.">
                                                <label class="form-check-label" for="formCheck13{{$item->code}}">Di pekerjaan ini saya memeroleh prospek karir yang baik.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck14{{$item->code}}" class="form-check-input" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.">
                                                <label class="form-check-label" for="formCheck14{{$item->code}}">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck15{{$item->code}}" class="form-check-input" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.">
                                                <label class="form-check-label" for="formCheck15{{$item->code}}">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck16{{$item->code}}" class="form-check-input" value="Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.">
                                                <label class="form-check-label" for="formCheck16{{$item->code}}">Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck17{{$item->code}}" class="form-check-input" value="Pekerjaan saya saat ini lebih aman/terjamin/secure">
                                                <label class="form-check-label" for="formCheck17{{$item->code}}">Pekerjaan saya saat ini lebih aman/terjamin/secure</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck18{{$item->code}}" class="form-check-input" value="Pekerjaan saya saat ini lebih menarik">
                                                <label class="form-check-label" for="formCheck18{{$item->code}}">Pekerjaan saya saat ini lebih menarik</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck19{{$item->code}}" class="form-check-input" value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.">
                                                <label class="form-check-label" for="formCheck19{{$item->code}}">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck20{{$item->code}}" class="form-check-input" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.">
                                                <label class="form-check-label" for="formCheck20{{$item->code}}">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck21{{$item->code}}" class="form-check-input" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.">
                                                <label class="form-check-label" for="formCheck21{{$item->code}}">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="mb-3">
                                            <!-- Form Checkbox -->
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="formCheck22{{$item->code}}" class="form-check-input" value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.">
                                                <label class="form-check-label" for="formCheck22{{$item->code}}">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.</label>
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <!-- Form Checkbox -->
                                                <div class="form-check">
                                                    <input type="checkbox" id="formCheck23{{$item->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck23{{$item->code}}">Lainnya</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-sm form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                            </div>
                                            <!-- End Form Checkbox -->
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>

                        @if (!empty($item->sub_question))
                            @if ($item->title != '' )
                                <div class="card ms-10 mb-3">
                                    <div class="card-body">
                                        <p class="text-dark text-center">{{$item->title}}</p>
                                        @foreach ($item->sub_question as $items)
                                            @if ($item->type == 'choice')
                                                <div class="row align-items-center" id="{{ $items->code }}">
                                                    <label for="formLabel{{$loop->index}}" class="col-lg-3 col-form-label form-label">{{$items->question}}</label>

                                                    <div class="col-lg-9">
                                                        <div class="input-group input-group-sm-vertical">
                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg{{$items->code}}1">
                                                                <span class="form-check m-auto">
                                                                    <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}1" value="1">
                                                                    <span class="form-check-label">(1) Sangat besar</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->

                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg{{$items->code}}2">
                                                                <span class="form-check m-auto">
                                                                    <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}2" value="2">
                                                                    <span class="form-check-label">(2) Besar</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->

                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg{{$items->code}}3">
                                                                <span class="form-check m-auto">
                                                                    <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}3" value="3">
                                                                    <span class="form-check-label">(3) Cukup</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->

                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg{{$items->code}}4">
                                                                <span class="form-check m-auto">
                                                                    <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}4" value="4">
                                                                    <span class="form-check-label">(4) Kurang</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->

                                                            <!-- Form Radio -->
                                                            <label class="form-control" for="formControlRadioEg{{$items->code}}5">
                                                                <span class="form-check m-auto">
                                                                    <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}5" value="5">
                                                                    <span class="form-check-label">(5) Tidak sama sekali</span>
                                                                </span>
                                                            </label>
                                                            <!-- End Form Radio -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                @foreach ($item->sub_question as $items)
                                <div class="card ms-10 mb-3">
                                    <div class="card-body">
                                        @if ($items->type == 'choice')
                                            <div class="row align-items-center">
                                                <label for="formLabel{{$loop->index}}" class="col-lg-3 col-form-label form-label">{{$items->question}}</label>

                                                <div class="col-lg-9">
                                                    <div class="input-group input-group-sm-vertical">
                                                        <!-- Form Radio -->
                                                        <label class="form-control" for="formControlRadioEg{{$items->code}}1">
                                                            <span class="form-check m-auto">
                                                                <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}1" value="1">
                                                                <span class="form-check-label">(1) Sangat aktif</span>
                                                            </span>
                                                        </label>
                                                        <!-- End Form Radio -->

                                                        <!-- Form Radio -->
                                                        <label class="form-control" for="formControlRadioEg{{$items->code}}2">
                                                            <span class="form-check m-auto">
                                                                <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}2" value="2">
                                                                <span class="form-check-label">(2) Aktif</span>
                                                            </span>
                                                        </label>
                                                        <!-- End Form Radio -->

                                                        <!-- Form Radio -->
                                                        <label class="form-control" for="formControlRadioEg{{$items->code}}3">
                                                            <span class="form-check m-auto">
                                                                <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}3" value="3">
                                                                <span class="form-check-label">(3) Biasa</span>
                                                            </span>
                                                        </label>
                                                        <!-- End Form Radio -->

                                                        <!-- Form Radio -->
                                                        <label class="form-control" for="formControlRadioEg{{$items->code}}4">
                                                            <span class="form-check m-auto">
                                                                <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}4" value="4">
                                                                <span class="form-check-label">(4) Pasif</span>
                                                            </span>
                                                        </label>
                                                        <!-- End Form Radio -->

                                                        <!-- Form Radio -->
                                                        <label class="form-control" for="formControlRadioEg{{$items->code}}5">
                                                            <span class="form-check m-auto">
                                                                <input type="radio" class="form-check-input" name="{{$items->code}}" id="formControlRadioEg{{$items->code}}5" value="5">
                                                                <span class="form-check-label">(5) Sangat pasif</span>
                                                            </span>
                                                        </label>
                                                        <!-- End Form Radio -->
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        @elseif ($items->type == 'string')
                                            <label for="formLabel{{$loop->index}}" class="form-label">{{$items->question}}</label>

                                            <input type="text" class="form-control" name="{{$items->code}}" id="formLabel{{$loop->index}}" placeholder="Masukkan Jawaban Anda" required data-msg="Please enter your username.">
                                        @elseif ($items->type == 'multiple')
                                            <label for="formLabel{{$loop->index}}" class="form-label">{{$items->question}}</label>

                                            <div class="mb-3">
                                                <!-- Form Checkbox -->
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="formCheck11{{$items->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck11{{$items->code}}">Pengoperasian komputer (MS Office dan yang sejenisnya)</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>

                                            <div class="mb-3">
                                                <!-- Form Checkbox -->
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="formCheck12{{$items->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck12{{$items->code}}">Piranti lunak aplikasi (Accurate, autoCAD,CorelDraw, dll)</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>

                                            <div class="mb-3">
                                                <!-- Form Checkbox -->
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="formCheck13{{$items->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck13{{$items->code}}">Bahasa Inggris</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>

                                            <div class="mb-3">
                                                <!-- Form Checkbox -->
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="formCheck14{{$items->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck14{{$items->code}}">Bahasa asing lainya</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>

                                            <div class="mb-3">
                                                <!-- Form Checkbox -->
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="formCheck15{{$items->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck15{{$items->code}}">Kewirausahaan</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>

                                            <div class="mb-3">
                                                <!-- Form Checkbox -->
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="formCheck16{{$items->code}}" class="form-check-input">
                                                    <label class="form-check-label" for="formCheck16{{$items->code}}">Kepemimpinan</label>
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>

                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-shrink-0">
                                                    <!-- Form Checkbox -->
                                                    <div class="form-check">
                                                        <input type="checkbox" id="formCheck17{{$items->code}}" class="form-check-input">
                                                        <label class="form-check-label" for="formCheck17{{$items->code}}">Lainnya</label>
                                                    </div>
                                                    <!-- End Form Checkbox -->
                                                </div>
                                                <div class="flex-grow-1">
                                                    <input type="text" class="form-control form-control-sm form-control-borderless form-control-flush border-bottom" name="{{$item->code}}" placeholder="Isi jika memilih lainnya...">
                                                </div>
                                                <!-- End Form Checkbox -->
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        @endif
                    @endforeach

                    <!-- Footer -->
                    <div class="d-flex justify-content-end gap-2 mt-2">
                        <button type="button" class="btn btn-outline-secondary">Batal</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                    <!-- End Footer -->
                </form>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection

@push('js')
    <script src="/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
    $(function(){
        $('input[name="a1"]').on("click", function() {
            var value = $('input[name="a1"]:checked').val();
            if(value == 'ya') {
                $('#aa1').hide();
            }
        });
    });
        (function() {
            window.onload = function() {
                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')
            }
        })()
    </script>
@endpush
