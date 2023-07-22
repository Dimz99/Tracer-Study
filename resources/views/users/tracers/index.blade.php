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

        <!-- Step Form -->
        <form class="js-step-form"
            data-hs-step-form-options='{
                "progressSelector": "#basicVerStepFormProgress",
                "stepsSelector": "#basicVerStepFormContent",
                "endSelector": "#basicVerStepFinishBtn"
            }'>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Step -->
                    <ul id="basicVerStepFormProgress" class=" js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{ "targetSelector": "#basicVerStepDetails" }'>
                                <span class="step-icon step-icon-soft-dark">1</span>
                                <div class="step-content">
                                    <span class="step-title"></span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{ "targetSelector": "#basicVerStepTerms" }'>
                                <span class="step-icon step-icon-soft-dark">2</span>
                                <div class="step-content">
                                    <span class="step-title"></span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{ "targetSelector": "#basicVerStepMembers" }'>
                                <span class="step-icon step-icon-soft-dark">3</span>
                                <div class="step-content">
                                    <span class="step-title"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End Step -->

                    <!-- Content Step Form -->
                    <div id="basicVerStepFormContent">
                        <div id="basicVerStepDetails" class="card card-body active" style="">
                            <h4>Form 1</h4>

                            <!-- Form Group -->
                            <div class="row mb-4">
                                <label for="formUsernameLabel" class="col-sm-3 col-form-label form-label">Username</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="formUsernameLabel" placeholder="Username" aria-label="Username" required data-msg="Please enter your username.">

                                    <span class="invalid-feedback">Please enter a valid username.</span>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Footer -->
                            <div class="d-flex align-items-center mt-auto">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{ "targetSelector": "#basicVerStepTerms" }'> Next <i class="bi-chevron-right small"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>

                        <div id="basicVerStepTerms" class="card card-body" style="display: none; ">
                            <h4>Form 2</h4>

                            <p>...</p>

                            <!-- Footer -->
                            <div class="d-flex align-items-center mt-auto">
                                <button type="button" class="btn btn-ghost-secondary me-2" data-hs-step-form-prev-options='{ "targetSelector": "#basicVerStepDetails" }'>
                                    <i class="bi-chevron-left small"></i> Previous step
                                </button>

                                <div class="ms-auto">
                                    <button type="button" class="btn btn-primary"
                                        data-hs-step-form-next-options='{ "targetSelector": "#basicVerStepMembers" }'>
                                        Next <i class="bi-chevron-right small"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>

                        <div id="basicVerStepMembers" class="card card-body" style="display: none; ">
                            <h4>Form 3</h4>

                            <p>...</p>

                            <!-- Footer -->
                            <div class="d-sm-flex align-items-center mt-auto">
                                <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-hs-step-form-prev-options='{ "targetSelector": "#basicVerStepTerms" }'>
                                    <i class="bi-chevron-left small"></i> Previous step
                                </button>

                                <div class="d-flex justify-content-end ms-auto">
                                    <button id="basicVerStepFinishBtn" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div>
                    <!-- End Content Step Form -->
                </div>
            </div>
            <!-- End Row -->
        </form>
        <!-- End Step Form -->
    </div>
@endsection

@push('js')
    <script src="/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src="/assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>

    <script>
        (function() {
            window.onload = function() {
                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')

                // INITIALIZATION OF STEP FORM
                // =======================================================
                new HSStepForm('.js-step-form')
            }
        })()
    </script>
@endpush
