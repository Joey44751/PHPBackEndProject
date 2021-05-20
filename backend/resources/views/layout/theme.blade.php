<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    {{-- Global stylesheet --}}
    <link rel="stylesheet" href="/assets/css/app.css">

     <!-- favicon -->
     <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> 


    <title>The Parent App</title>
</head>
<body>
    

<!-- pink section, navigation bar -->
<nav class="navbar navbar-expand-md navbar-dark balk">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="/home">Home</a></li>
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="/playground">Speeltuin</a></li>
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="/addplayground">Speeltuin toevoegen</a></li>
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="/favorites">Favorieten</a></li>
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="/contact">Contact</a></li>
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" title="Gebruikers info" href="/userpage"><i class="bi bi-person-circle"></i></a></li>
            <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" title="Logout"(click)="authService.SignOut()"><i class="bi bi-box-arrow-right"></i></a></li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Top logo -->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5 text-center">
            <img src="../../assets/img/tpalogo.png" class="homeLogo" alt="">
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@yield('content')
</body>
</html>