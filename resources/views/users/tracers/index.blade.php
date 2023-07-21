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
            <div class="col-lg-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title h4">Quesioner Tracer Study</h2>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                        <a href="javascript:;" class="btn btn-primary">Mulai Mengisi Quesioner</a>
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
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
