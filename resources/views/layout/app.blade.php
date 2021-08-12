<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .config-itens .item-menu {
        border-radius: 0px;
        /* background: #FFFFFF;*/
        bottom: 0px;
        /*opacity: 0;*/
        /*border: 2px solid yellow;*/
    }
    
    .config-itens .item {
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
        /* Primary-Green / Green */
        color: #9AD5B1 !important;
        opacity: 1;
        border-bottom: 4px solid #30734A;
    }
    
    .logo {
        display: block;
        margin-right: auto;
        margin-left: auto;
        width: 100%;
        margin-top: 5%
    }
    
    .imagem-elipse {
        display: block;
        margin-right: auto;
        margin-left: auto;
        width: 80%;
        margin-top: 5%
    }
    
    @media all and (max-width: 800px) {
        .logo {
            display: block;
            margin-right: auto;
            margin-left: auto;
            width: 30%;
            margin-top: 5%
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="antialiased">
    <main>
        <div class="container-md container-lg">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="img/logo_louvre.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav config-itens">
                        <li class="nav-item item-menu ">
                            <a class="nav-link item" href="#">Início</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link item" href="#">Serviços</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link item" href="#">Diferenciais</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
    </main>
</body>

</html>