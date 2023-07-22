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

                <div class="card mb-3 mb-lg-5" id="formOne">
                    <div class="card-body">
                        <form>
                            <!-- Form Group -->
                            <div class="row mb-4">
                                <label for="formUsernameLabel" class="col-sm-3 col-form-label form-label">Username</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="formUsernameLabel" placeholder="Username" aria-label="Username" required data-msg="Please enter your username.">

                                    <span class="invalid-feedback">Please enter a valid username.</span>
                                </div>
                            </div>
                            <!-- End Form Group -->
                        </form>
                    </div>
                </div>

                <!-- Footer -->
                <div class="d-flex gap-2 mt-2">
                    <button type="button" class="btn btn-outline-secondary">Batal</button>
                    <button type="button" class="btn btn-outline-primary">Lanjut</button>
                </div>
                <!-- End Footer -->
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection

@push('js')
    <script src="/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
        (function() {
            window.onload = function() {
                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')
            }
        })()
    </script>
@endpush
