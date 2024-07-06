<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

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
                <a href="/">
                <img src="{{asset('page4.png')}}"  alt="Image" class="img-fluid" style="width: auto; height: auto">
                    </a>
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Sign In Gamer!</h3>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 text-danger " :errors="$errors" />


                        <form action="{{ route('login') }}" method="post" class="d-block">
                            @csrf
                            <div class="form-group last mb-4">
                                <label for="username"  >Email</label>
                                <input type="email" class="form-control" name="email"  required autofocus >

                            </div>

                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required autocomplete="current-password">

                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
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
                                <a class="text-sm" href="{{ route('register') }}">Create an Account!</a>
                                <div class="flex items-center justify-end mt-2">
{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot your password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
                                </div>
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
