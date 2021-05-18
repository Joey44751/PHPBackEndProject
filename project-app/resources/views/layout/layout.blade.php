<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- pink section, navigation bar -->
<nav class="navbar navbar-expand-md navbar-dark balk">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" routerLink="/home">Home</a></li>
            <li class="nav-item"><a class="nav-link" routerLink="/playground">Speeltuin</a></li>
            <li class="nav-item"><a class="nav-link" routerLink="/addplayground">Speeltuin toevoegen</a></li>
            <li class="nav-item"><a class="nav-link" routerLink="/favorites">Favorieten</a></li>
            <li class="nav-item"><a class="nav-link" routerLink="/contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" title="Gebruikers info" routerLink="/userpage"><i class="bi bi-person-circle"></i></a></li>
            <li class="nav-item"><a class="nav-link" title="Logout"(click)="authService.SignOut()"><i class="bi bi-box-arrow-right"></i></a></li>
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