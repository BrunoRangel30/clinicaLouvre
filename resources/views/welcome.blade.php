@extends('layout.app')
<style>
    .box-1 {
        margin-top: 30%;
        align-items: center;
    }
    
    .box-1 h1 {
        width: 360px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-size: 2.5em;
        line-height: 49px;
        align-items: center;
        color: #000000;
    }
    
    .box-1 button {
        display: flex;
        margin-top: 5%;
        flex-direction: row;
        align-items: center;
        padding: 10px 24px;
        width: 340px;
        height: 40px;
        left: 96px;
        top: 456px;
        background: #FFFFFF;
        border: 2px solid #9AD5B1;
        box-sizing: border-box;
        border-radius: 20px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 1em;
        line-height: 20px;
        padding: auto;
        color: #9AD5B1;
    }

    .box-1 a{
        text-decoration: none;
        color: #9AD5B1;
    }
    .box-1 a:hover{
        text-decoration: none;
        color: #9AD5B1;
    }
    
    @media all and (max-width: 800px) {
        .box-1 {
            margin-top: 10%;
        }
        .nav-link a{
            text-align: center !important;
        }
        .box-1 h1 {
            font-family: Montserrat;
            width: 100%;
            font-style: normal;
            font-weight: 400;
            font-size: 1.8em;
            line-height: 49px;
            color: #000000;
            text-align: center;
        }
        .box-1 button {
            width: 85%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 10vh;
        }
        .box-1 button a {
           padding: 10px;
        }

    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->

</head>
@section('content')

<body>
    <section>
        @component('componentes.whatsapp')   
        @endcomponent
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <div class="box-1">
                    <h1>Esculpindo faces, pintando sorrisos.</h1>
                    <button><a href="https://web.whatsapp.com/send?phone=556199820849" target="_blank">Clique aqui e agende sua consulta</a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img class="imagem-elipse" src="img/elipse.png" alt="Logo">
            </div>
        </div>
    </section>
</body>
@endsection