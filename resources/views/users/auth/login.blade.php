@extends('users.layouts.auth')

@section('content')
        <div class="container py-5 py-sm-7">
            <a class="d-flex justify-content-center mb-5" href="/">
                <img class="zi-2" src="{{asset('assets/img/Logo_Universitas_Islam_Balitar.png')}}" alt="Image Description" style="width: 8rem;">
            </a>

            <div class="mx-auto" style="max-width: 30rem;">
                <!-- Card -->
                <div class="card card-lg mb-5">
                    <div class="card-body">
                        <!-- Form -->
                        <form action="/login" method="post">
                            @csrf
                            <div class="text-center">
                                <div class="mb-5">
                                    <h1 class="display-5">Login Mahasiswa</h1>
                                </div>
                            </div>
                            <div class="mb-5 mb-md-7">

                                @if (session('alert-success'))
                                    <div class="alert alert-success">
                                        {{ session('alert-success') }}
                                    </div>
                                @endif
                                @if (session('alert-danger'))
                                    <div class="alert alert-danger">
                                        {{ session('alert-danger') }}
                                    </div>
                                @endif
                            </div>
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="signinSrEmail">Username</label>
                                <input type="text" class="form-control form-control-lg" name="username" id="signinSrEmail" tabindex="1" placeholder="Nomor Induk Mahasiswa" aria-label="Nomor Induk Mahasiswa" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="signupSrPassword">Password</label>

                                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8"
                                        data-hs-toggle-password-options='{
                                            "target": "#changePassTarget",
                                            "defaultClass": "bi-eye-slash",
                                            "showClass": "bi-eye",
                                            "classChangeTarget": "#changePassIcon"
                                        }'>
                                    <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;"><i id="changePassIcon" class="bi-eye"></i></a>
                                </div>

                            </div>
                            <!-- End Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                                <a href="/admin/login" class="link text-center mt-3">Login Admin</a>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Card -->

            </div>
        </div>
@endsection
