<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* .config-itens .item-menu {
        border-radius: 0px;
        /* background: #FFFFFF;*/
    /*opacity: 0;*/
    /*border: 2px solid yellow;
    }*/
    
    .config-itens .no-select {
        /* H5 / H5 Regular */
        font-family: Montserrat;
        margin-left: 24px;
        margin-right: 24px;
        font-style: normal;
        font-weight: normal;
        font-size: 1.2em;
        line-height: 24px;
        display: flex;
        align-items: center;
        text-align: center;
        opacity: 1;
        color: #9AD5B1 !important;
    }
    
    .config-itens .active {
        font-family: Montserrat;
        margin-left: 24px;
        margin-right: 24px;
        font-style: normal;
        font-weight: normal;
        font-size: 1.2em;
        line-height: 24px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #30734A !important;
        font-weight: 600;
        border-bottom: 4px solid #30734A;
    }
    
    .logo {
        display: block;
        margin-right: auto;
        margin-left: auto;
        /*  width: 100%;*/
        margin-top: 5%
    }
    
    .imagem-elipse {
        display: block;
        margin-right: auto;
        margin-left: auto;
        width: 80%;
        margin-top: 5%
    }
    
    .navbar-light .navbar-toggler {
        color: #9AD5B1 !important;
        border-color: rgba(0, 0, 0, .1);
    }
    
    @media all and (max-width: 800px) {
        .logo {
            display: block;
            margin-right: auto;
            margin-left: auto;
            /* width: 30%;*/
            margin-top: 5%;
            margin-bottom: 5%
        }
        .config-itens .item-menu {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .config-itens .item {
            /* border-bottom: 2px solid #30734A;*/
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clínica Louvre</title>

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{url(mix('js/home.js'))}}"></script>
</head>

<body class="antialiased">
    <main>
        <div class="container-md container-lg container-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="img/logo.svg" alt="Logo">
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav config-itens pt-3">
                        <li class="nav-item item-menu">
                            <a class="nav-link  active" href="#">Início</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link no-select" href="#">Serviços</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link  no-select" href="#">Diferenciais</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
    </main>
</body>

</html>