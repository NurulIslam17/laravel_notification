<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">noTify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>

                    <li class="nav-item dropdown">
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            Dropdown link--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>

    <section class=" container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card rounded-0">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Notification</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('email.notification') }}" method="post">
                            @csrf
                            <p class="text-center text-success">{{ session('success') }}</p>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" value="Send Email Notification" class="btn btn-success rounded-0" placeholder="Enter name">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card rounded-0">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Contact us</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            <p class="text-center text-success">{{ session('success') }}</p>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control rounded-0" placeholder="Enter name">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control rounded-0" placeholder="Enter email">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" class="form-control rounded-0" placeholder="Enter phone">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">message</label>
                                <div class="col-md-8">
                                    <textarea name="message" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success rounded-0" placeholder="Enter name">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
