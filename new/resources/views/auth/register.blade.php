<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin </title>
    <link href="signin_logo.png" rel="icon">
  <link href="signin_logo.png" rel="apple-touch-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">





    <link href="bootstrap.min1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/signin.css">
 
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        body {
            background-image: url(assets/img/signin_bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        fieldset {
            border: 3px solid black;
            border-radius: 5px;
            padding: 10px;
            background-color: #c3c7c5;
        }

    </style>


</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <fieldset>
                <img class="mb-4" src="assets\img\signin_logo.png" alt="" width="150" height="150">
                <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

                <div class="form-floating">
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"  placeholder="John Smith" name="name" required autocomplete="name" autofocus>
                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    <label for="password">Password</label>
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit" style=" background: #3b5733; border: black; color: #fff">Sign up</button>
                <div class="form-floating"> Already a user, <a href="{{ route('login')}}" style="color: #3b5733">Login</a></div>
                <p class="mt-5 mb-3 text-muted">&copy; 2020–2022</p>
            </fieldset>
        </form>

    </main>



</body>

</html>





