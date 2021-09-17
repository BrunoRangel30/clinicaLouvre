<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* .config-itens .item-menu {
        border-radius: 0px;
        /* background: #FFFFFF;*/
    /*opacity: 0;*/
    /*border: 2px solid yellow;
    }*/
    
    body {
        background: #FAFFFC !important;
    }
    
    .config-nav .navbar-expand-lg {
        position: -webkit-sticky;
        /* Necessário para funcionar no Safari */
        position: sticky;
        top: 0;
        z-index: 1000;
        background: #FAFFFC;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    
    .config-nav .config-itens {
        margin-left: 60%;
    }
    
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
        width: 75%;
        margin-top: 5%;
    }
    
    .rodape-imagem img {
        display: block;
        margin-left: 0px;
        margin-right: auto;
        position: relative;
    }
    
    .rodape {
        background-image: url("img/rodape/Background.png");
        background-repeat: no-repeat, repeat;
        background-size: cover;
        height: 75vh;
    }
    
    .box-inf-rod {
        margin-top: 27%;
    }
    
    .texto-rodape li {
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 20px;
        color: #000000;
        /*  padding-left: 5px;*/
        padding-top: 10px;
        list-style: none;
    }
    
    .texto-rodape i {
        font-size: 0.53em;
        color: #FAAB90;
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
    
    .mapa iframe {
        margin-top: 25%;
        width: 70%;
        height: 360px;
        padding-top: 15px;
    }
    /*  .info-rodape img {
        display: inline-block;
    }*/
    
    .config-rodape {
        margin-top: 50px;
        display: inline-block;
    }
    
    .link-contato {
        text-decoration: none;
        color: #000000;
    }
    
    .link-contato:hover {
        color: #000000;
    }
    
    .info-rodape .icone {
        font-size: 2.2em;
        color: #FFFF8B;
    }
    
    .redes-sociais img {
        padding: 10%;
    }
    
    @media all and (max-width: 800px) {
        .redes-sociais img {
            padding: 3%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .logo {
            display: block;
            margin-right: auto;
            margin-left: auto;
            width: 70%;
            margin-top: 5%;
            margin-bottom: 5%
        }
        .rodape {
            background-image: url("img/rodape/Background.png");
            background-repeat: no-repeat, repeat;
            background-size: cover;
            height: 160vh;
        }
        .box-inf-rod {
            margin-top: 20%;
        }
        .rodape-imagem img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-top: 10px;
        }
        .config-nav .config-itens {
            margin-left: 0%;
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
        .mapa iframe {
            width: 100%;
            height: 300px;
            padding-bottom: 10%;
        }
        .info-rodape img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .texto-rodape li {
            font-family: Montserrat;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
            /*  padding-left: 5px;*/
            padding-top: 10px;
            list-style: none;
            text-align: center;
        }
        /* .info-rodape li {
            display: block;
            text-align: center;
            font-family: Montserrat;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
            padding-left: 5px;
            padding-top: 10px;
            text-align: center;
            border: 1px solid yellow;
        }*/
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

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css')}}">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{url(mix('js/home.js'))}}"></script>
</head>

<body class="antialiased">
    <main>
        <div class="config-nav">
            <nav class="container-fluid navbar navbar-expand-lg navbar-light">
                <div class="row">
                    <a class="navbar-brand" href="#">
                        <div class="box-imagem-logo">
                            <img class="logo" src="img/logo.svg" alt="Logo">
                        </div>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse d-lg-flex" id="navbarSupportedContent">
                    <ul class="navbar-nav config-itens pt-3 mr-4">
                        <li class="nav-item item-menu">
                            <a class="nav-link  active" href="#box-apresentacao">Início</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link no-select" href="#servicos-clinica">Serviços</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link  no-select" href="#diferenciais-clinica">Diferenciais</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="container-fluid">
                <div class="rodape">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="box-inf-rod ">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="rodape-imagem">
                                                <img src="img/rodape/alarm.png">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="texto-rodape">
                                                <li style="color: #000000;font-weight: bold;">Horários de atendimento:</li>
                                                <ul>
                                                    <li><i class="fas fa-circle"></i> Segunda a Sexta-feira das 09 às 18 horas</li>
                                                    <li> <i class="fas fa-circle"></i> Sábado de 08 às 12 horas</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tefefone-->
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="rodape-imagem">
                                                <img src="img/rodape/tele.png">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="texto-rodape">
                                                <li style="color: #000000;font-weight: bold;">Telefone</li>
                                                <li><a class="link-contato" href="https://wa.me/556199820849" target="_blank">(61) 99982-0849</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Email-->
                                    <div class="row pt-3">
                                        <div class="col-lg-1">
                                            <div class="rodape-imagem">
                                                <img src="img/rodape/email.png">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="texto-rodape">
                                                <li style="color: #000000;font-weight: bold;">E-mail</li>
                                                <li><a class="link-contato" href="mailto:clinicaslouvre@gmail.com?Subject=Título%20da%20mensagem" target="_blank">clinicaslouvre@gmail.com</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Endereco-->
                                    <div class="row pt-3">
                                        <div class="col-lg-1">
                                            <div class="rodape-imagem">
                                                <img src="img/rodape/endereco.png">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="texto-rodape">
                                                <li style="color: #000000;font-weight: bold;">Endereço</li>
                                                <li>Avenida Bosque, nº 160 - Formosa/GO</li>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Redes sociais-->
                                    <div class="redes-sociais">
                                        <div class="row pt-3">
                                            <div class="col-lg-1 col-xs-12">
                                                <a href="https://www.facebook.com/clinicaslouvre" target="_blank"><img src="img/rodape/Facebook.png"></a>
                                            </div>
                                            <div class="col-lg-1 col-xs-12">
                                                <a href="//www.instagram.com/louvreclinica/" target="_blank"><img src="img/rodape/Instagram.png"></a>
                                            </div>
                                            <div class="col-lg-1 col-xs-12">
                                                <a href="https://wa.me/556199820849" target="_blank"><img src="img/rodape/WhatsApp.png"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="texto-rodape">
                                        <li>© 2021 Clínica Louvre - Todos os direitos reservados.</li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mapa">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.7762012213366!2d-47.34021838460501!3d-15.550123621138205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9350a36cf7b36529%3A0xd5cfaa5984ad4245!2sCl%C3%ADnica%20Louvre!5e0!3m2!1spt-BR!2sbr!4v1629177469269!5m2!1spt-BR!2sbr"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>

    </main>
</body>

</html>