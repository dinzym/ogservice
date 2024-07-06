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

    <title>Online Gaming Service SignUp </title>
</head>
<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <a href="{{url('/')}}">
                <img src="{{asset('page1.png')}}" alt="Image" class="img-fluid">
              </a>
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Create Account!</h3>
                        </div>

                        <form action="{{route('booster.register.create')}}" method="post" class="d-block">
                            @csrf
                            <div class="form-group last mb-4">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="name" required>

                            </div>
                            <div class="form-group last mb-4">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email" required>

                            </div>

                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>

                            </div>
                            <div class="form-group last mb-4">
                                <label for="Confirm Password">Confirm-Password</label>
                                <input type="password" class="form-control" name="password_confirmation" required>

                            </div>

{{--                            <div class="form-group last mb-4">--}}
{{--                                <label for="Confirm Password">Game Service</label>--}}
{{--                                <input type="" class="form-control" name="game_service" required>--}}

{{--                            </div>--}}

                            <input type="submit" value="Sign Up" class="btn btn-block btn-primary">
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small text-primary" href="{{route('booster_login_form')}}">Already Have an Account?</a>
                        </div>
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
