<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
   <link rel="stylesheet" href="{{asset('loginregister/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('loginregister/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('loginregister/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('loginregister/css/style.css')}}">

    <title>Online Gaming Service Login </title>
</head>
<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{url('/')}}">
                    <img src="{{asset('page2.png')}}" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Sign In Booster!</h3>
                        </div>

                        @if(Session::has('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{session::get('error')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{route('booster.login')}}" method="post" class="d-block">
                            @csrf
                            <div class="form-group last mb-4">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" name="email" required>

                            </div>

                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>

                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

{{--                            <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>--}}

{{--                            <div class="social-login">--}}
{{--                                <a href="#" class="facebook">--}}
{{--                                    <span class="icon-facebook mr-3"></span>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="twitter">--}}
{{--                                    <span class="icon-twitter mr-3"></span>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="google">--}}
{{--                                    <span class="icon-google mr-3"></span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <hr>
                            <div class="text-center">
                                <a class="small text-primary" href="{{route('booster.register')}}">Create an Account!</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="{{asset('loginregister/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('loginregister/js/popper.min.js')}}"></script>
<script src="{{asset('loginregister/js/bootstrap.min.js')}}"></script>
<script src="{{asset('loginregister/js/main.js')}}"></script>
</body>
</html>
