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
                                        <div class="row align-items-center" id="">
                                            <label for="formLabel" class="col-lg-3 col-form-label form-label"></label>

                                            <div class="col-lg-9">
                                                <div class="input-group input-group-sm-vertical">
                                                    <!-- Form Radio -->
                                                    <label class="form-control" for="formControlRadioEg1">
                                                        <span class="form-check m-auto">
                                                            <input type="radio" class="form-check-input" name="" id="formControlRadioEg1" value="1">
                                                            <span class="form-check-label">(1) Sangat besar</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Form Radio -->

                                                    <!-- Form Radio -->
                                                    <label class="form-control" for="formControlRadioEg2">
                                                        <span class="form-check m-auto">
                                                            <input type="radio" class="form-check-input" name="" id="formControlRadioEg2" value="2">
                                                            <span class="form-check-label">(2) Besar</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Form Radio -->

                                                    <!-- Form Radio -->
                                                    <label class="form-control" for="formControlRadioEg3">
                                                        <span class="form-check m-auto">
                                                            <input type="radio" class="form-check-input" name="" id="formControlRadioEg3" value="3">
                                                            <span class="form-check-label">(3) Cukup</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Form Radio -->

                                                    <!-- Form Radio -->
                                                    <label class="form-control" for="formControlRadioEg4">
                                                        <span class="form-check m-auto">
                                                            <input type="radio" class="form-check-input" name="" id="formControlRadioEg4" value="4">
                                                            <span class="form-check-label">(4) Kurang</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Form Radio -->

                                                    <!-- Form Radio -->
                                                    <label class="form-control" for="formControlRadioEg5">
                                                        <span class="form-check m-auto">
                                                            <input type="radio" class="form-check-input" name="" id="formControlRadioEg5" value="5">
                                                            <span class="form-check-label">(5) Tidak sama sekali</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Form Radio -->
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    @endif
                                @endif
                            </div>
                        </div>

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
                $('#a1').hide();
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
