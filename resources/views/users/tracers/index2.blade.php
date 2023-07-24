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
                    @foreach ($questions as $question)
                        @if ($question->code == 'a1')
                            <div class="card mb-3">
                                <div class="card-body">
                                    <!-- Form Group -->
                                    <label for="formLabel1" class="form-label">{{ $question->question }}</label>

                                    <div class="row">
                                        <div class="col-sm mb-2 mb-sm-0">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg11">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="a1"
                                                        value="ya" id="formControlRadioEg11">
                                                    <span class="form-check-label">Ya</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>

                                        <div class="col-sm mb-2 mb-sm-0">
                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg21">
                                                <span class="form-check">
                                                    <input type="radio" class="form-check-input" name="a1"
                                                        value="tidak" id="formControlRadioEg21">
                                                    <span class="form-check-label">Tidak</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->
                                        </div>
                                    </div>
                                    <!-- End Row -->
                                </div>
                            </div>
                            @if ($question->type == 'choice')
                                <div class="card ms-10 mb-3" id="{{ $question->code }}">
                                    <div class="card-body">
                                        <p class="text-dark text-center">Sub Pertanyaan 1</p>
                                        @foreach ($question->sub_question as $sub_question)
                                            <div class="row align-items-center">
                                                <label for="formLabel"
                                                    class="col-lg-3 col-form-label form-label">{{ $sub_question->question }}</label>

                                                <div class="col-lg-9">
                                                    <div class="input-group input-group-sm-vertical">
                                                        @if (isset($sub_question->answers))
                                                            @foreach ($sub_question->answers as $answer)
                                                                <!-- Form Radio -->
                                                                <label class="form-control"
                                                                    for="formControlRadioEg{{ $loop->index + 1 }}">
                                                                    <span class="form-check m-auto">
                                                                        <input type="radio" class="form-check-input"
                                                                            name="{{ $sub_question->code }}"
                                                                            id="formControlRadioEg{{ $loop->index + 1 }}"
                                                                            value="{{ $answer->value }}">
                                                                        <span
                                                                            class="form-check-label">{{ $answer->name }}</span>
                                                                    </span>
                                                                </label>
                                                                <!-- End Form Radio -->
                                                            @endforeach
                                                        @endif

                                                        {{-- <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg2">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="aa1" id="formControlRadioEg2" value="2">
                                                    <span class="form-check-label">(2) Besar</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg3">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="aa1" id="formControlRadioEg3" value="3">
                                                    <span class="form-check-label">(3) Cukup</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg4">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="aa1" id="formControlRadioEg4" value="4">
                                                    <span class="form-check-label">(4) Kurang</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio -->

                                            <!-- Form Radio -->
                                            <label class="form-control" for="formControlRadioEg5">
                                                <span class="form-check m-auto">
                                                    <input type="radio" class="form-check-input" name="aa1" id="formControlRadioEg5" value="5">
                                                    <span class="form-check-label">(5) Tidak sama sekali</span>
                                                </span>
                                            </label>
                                            <!-- End Form Radio --> --}}
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endif
                        @endif

                        @if ($question->code == 'a2')
                            <div class="card mb-3">
                                <div class="card-body">
                                    <!-- Form Group -->
                                    <label for="formLabelRadio" class="form-label">{{ $question->question }}</label>

                                    @if (isset($question->answers))
                                        @foreach ($question->answers as $answer)
                                            @if ($answer->value == 'Lainnya')
                                                <div class="d-flex mb-3">
                                                    <div class="flex-shrink-0">
                                                        <!-- Form Radio -->
                                                        <label class="form-control" for="formControlRadio2{{ $loop->index }}">
                                                            <span class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                    id="formControlRadio2{{ $loop->index }}" name="{{ $question->code }}" value="{{ $answer->value }}">
                                                                <span class="form-check-label">Lainnya</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <input type="text"
                                                            class="form-control form-control-borderless form-control-flush border-bottom"
                                                            name="other_{{ $question->code }}"
                                                            placeholder="Isi jika memilih lainnya...">
                                                    </div>
                                                    <!-- End Form Radio -->
                                                </div>
                                            @else
                                                <div class="mb-3">
                                                    <!-- Form Radio -->
                                                    <label class="form-control" for="formControlRadio2{{ $loop->index }}">
                                                        <span class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                name="{{ $question->code }}"
                                                                value="{{ $answer->value }}"
                                                                id="formControlRadio2{{ $loop->index }}">
                                                            <span class="form-check-label">{{ $answer->value }}</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Form Radio -->
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach




                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="">
                                <label for="formLabelString1" class="form-label">Pertanyaan String</label>

                                <input type="text" class="form-control" name="string" id="formLabelString1"
                                    placeholder="Jawaban Anda...">
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Form Group -->
                            <label for="formLabelMultiple1" class="form-label">Pertanyaan Multiple</label>

                            <div class="mb-3">
                                <!-- Form Checkbox -->
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="formCheck111" class="form-check-input"
                                        value="Multiple 1">
                                    <label class="form-check-label" for="formCheck111">Multiple 1</label>
                                </div>
                                <!-- End Form Checkbox -->
                            </div>

                            <div class="mb-3">
                                <!-- Form Checkbox -->
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="formCheck121" class="form-check-input"
                                        value="Multiple 2">
                                    <label class="form-check-label" for="formCheck121">Multiple 2</label>
                                </div>
                                <!-- End Form Checkbox -->
                            </div>

                            <div class="mb-3">
                                <!-- Form Checkbox -->
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="formCheck131" class="form-check-input"
                                        value="Multiple 3">
                                    <label class="form-check-label" for="formCheck131">Multiple 3</label>
                                </div>
                                <!-- End Form Checkbox -->
                            </div>

                            <div class="mb-3">
                                <!-- Form Checkbox -->
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="formCheck141" class="form-check-input"
                                        value="Multiple 4">
                                    <label class="form-check-label" for="formCheck141">Multiple 4</label>
                                </div>
                                <!-- End Form Checkbox -->
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <!-- Form Checkbox -->
                                    <div class="form-check">
                                        <input type="checkbox" id="formCheck151" class="form-check-input">
                                        <label class="form-check-label" for="formCheck151">Lainnya</label>
                                    </div>
                                    <!-- End Form Checkbox -->
                                </div>
                                <div class="flex-grow-1">
                                    <input type="text"
                                        class="form-control form-control-sm form-control-borderless form-control-flush border-bottom"
                                        name="1" placeholder="Isi jika memilih lainnya...">
                                </div>
                                <!-- End Form Checkbox -->
                            </div>
                        </div>
                    </div>

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
        $(function() {
            $('input[name="a1"]').on("click", function() {
                var value = $('input[name="a1"]:checked').val();
                if (value == 'ya') {
                    $('#a1').hide();
                } else {
                    $('#a1').show();
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
