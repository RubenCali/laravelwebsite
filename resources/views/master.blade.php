<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG {{ Route::currentRouteName() == "blogPosten" ? '| POST BLOG' : '' }}{{ Route::currentRouteName() == "login" ? '| LOGIN' : '' }}{{ Route::currentRouteName() == "register" ? '| REGISTREER' : '' }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo asset('img/icon.ico') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
    <style>
        @font-face {
  font-family: Syncopate;
  src: url(<?php echo asset('fonts/Syncopate-Bold.ttf') ?>);
}

    </style>
</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="row">

         
        <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="<?php echo route('homepage') ?>">RUBEN CALI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() == "homepage" ? 'active' : '' }}" href="<?php echo route('homepage') ?>">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://rubencali.nl/" target="_blank">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() == "blogPosten" ? 'active' : '' }}" href="<?php echo route('blogPosten') ?>">Blog posten</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() == "contact" ? 'active' : '' }}" href="<?php echo route('contact') ?>">Contact</a>
                </li>
              
                <div class="user">
                    <li class="nav-item">
                        <a class="nav-link  registerBTN {{ Route::currentRouteName() == "register" ? 'registerBTNClicked' : '' }}" href="<?php echo route('register') ?>">REGISTREER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link inlogBTN {{ Route::currentRouteName() == "login" ? 'active' : '' }}" href="<?php echo route('login') ?>"><i class="far fa-user"></i> Login</a>
                      </li>
                </div>
                  
                
              </ul>
            </div>
        </div>
    </div>
          </nav>
    </section>
@yield('content')



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/f28585beb5.js" crossorigin="anonymous"></script>
    
</body>
</html>