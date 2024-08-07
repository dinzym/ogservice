<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Gaming Service - Register</title>

    <!-- Custom fonts for this template-->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href="{{asset('dashb/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('dashb/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

{{--                        <input type="email" name="email" value="{{ old('email') }}">--}}
{{--                        @error('email')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}

                        <form class="user" action="{{route('admin.register.create')}}" method="POST">
                                @csrf
                                <div class="form-group ">

                                    <input type="text" class="form-control form-control-user"
                                           placeholder="Username" name="name" required>
                                </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user"
                                       placeholder="Email Address" name="email" required>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                            placeholder="Password" name="password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                            placeholder="Repeat Password" name="password_confirmation" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Sign Up
                            </button>

                        </form>
                        <hr>

                        <div class="text-center">
                            <a class="small" href="{{route('login_form')}}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('dashb/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dashb/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('dashb/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('dashb/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
