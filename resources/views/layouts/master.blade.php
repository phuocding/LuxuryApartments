<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/admin/apartment"><i class="fas fa-home fa-4x"></i></a>
        <span class="text-muted">My Sweet Home</span>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-md-7 collapse navbar-collapse">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Best Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Life style</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="col-md-5">
            <form class="row">
                <div class="col-md-8">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </nav>
    <div class="container-fluid row mt-2">
        <main class="col-md-10">
            @section('content')
            @show
        </main>
        <nav class="col-md-2">
            <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-profile-tab" href="#"
                   aria-controls="v-pills-profile" aria-selected="false">Price</a>
                <a class="nav-link" id="v-pills-profile-tab" href="#"
                   aria-controls="v-pills-profile" aria-selected="false">Location</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab"
                   aria-controls="v-pills-messages" aria-selected="false">Detail</a>
            </div>
        </nav>
    </div>
    <footer class="container-fluid mt-3 mb-3">
        <p class="text-center">Aptech FPT &copy; Copyright 2018</p>
    </footer>
</body>
</html>
