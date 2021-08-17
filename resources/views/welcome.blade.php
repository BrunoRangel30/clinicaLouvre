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
    
    .box-1 a {
        text-decoration: none;
        color: #9AD5B1;
    }
    
    .box-1 a:hover {
        text-decoration: none;
        color: #9AD5B1;
    }
    
    .servicos .titulo {
        /* H2 / H2 SemiBold */
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 39px;
        /* identical to box height */
        text-align: center;
        /* Primary-Salmon / Salmon */
        color: #FAAB90;
    }
    
    .card {
        align-items: flex-start;
        left: 0px;
        top: 0px;
        /* Gray-Scale / White */
        background: #FFFFFF !important;
        /* Gray-Scale / Gray-400 */
        border: 1px solid #CED4DA !important;
        box-sizing: border-box;
        border-radius: 24px !important;
        margin-top: 15px;
    }
    
    .box-image {
        border-bottom: 1px solid #CED4DA;
        width: 100%;
        padding: 20px;
    }
    
    .texto-cartao .card-text {
        height: 120px;
        /* H6 / H6 Regular */
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 20px;
        /* Gray-Scale / Gray-700 */
        color: #495057 !important;
    }
    
    .card .card-img-top {
        width: 40%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 24px 24px 0px 0px;
    }
    
    .card-body .card-title {
        /* H4 / H4 SemiBold */
        font-family: Montserrat !important;
        font-style: normal;
        font-weight: 600 !important;
        font-size: 24px;
        line-height: 29px;
        color: #000000;
    }
    
    .card-body .botao {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 10px 24px;
        position: static;
        /* Gray-Scale / White */
        background: #FFFFFF;
        /* Primary-Green / Green */
        border: 2px solid #9AD5B1;
        box-sizing: border-box;
        border-radius: 20px;
        /* Inside Auto Layout */
        flex: none;
        order: 1;
        flex-grow: 0;
        margin: 24px 0px;
    }
    
    .card-body .link-botao {
        position: static;
        width: 89px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        color: #9AD5B1;
        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 0px 0px;
        text-decoration: none;
    }
    
    .diferenciais img {
        width: 120px;
        height: 120px;
        display: block;
        margin-right: auto;
        margin-left: auto;
    }
    
    .text p {
        width: 100%;
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 20px;
        color: #000000;
        padding: 15px;
        text-align: center;
    }
    
    .text a {
        text-decoration: none;
        color: #000000;
    }
    
    .text a:hover {
        color: #000000;
    }
    
    .config-difernciais {
        margin-top: 150px;
        margin-bottom: 150px;
    }
    
    @media all and (max-width: 800px) {
        .box-1 {
            margin-top: 10%;
        }
        .config-difernciais {
            margin-top: 100px;
            margin-bottom: 100px;
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
        .servicos .titulo {
            /* H2 / H2 SemiBold */
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            font-size: 1.8em;
            line-height: 39px;
            /* identical to box height */
            text-align: center;
            /* Primary-Salmon / Salmon */
            color: #FAAB90;
        }
    }
</style>

@section('content')

<body>
    <section id="box-apresentacao">
        @component('componentes.whatsapp') @endcomponent
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <div class="box-1">
                    <h1>Esculpindo faces, pintando sorrisos.</h1>
                    <button><a href="https://wa.me/556199820849" target="_blank">Clique aqui e agende sua consulta</a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img class="imagem-elipse" src="img/elipse.png" alt="Logo">
            </div>
        </div>
    </section>
    <section id="servicos-clinica">
        <div class="servicos pt-5">
            <h1 class="titulo">Nossos Serviços</h1>
            <div class="row pt-3">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="card" style="width: 100%;">
                        <div class="row">
                            <div class="col">
                                <div class="box-image">
                                    <!--<div>Ícones feitos por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>-->
                                    <img src="img/servicos/implante-dentario.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Implante</h5>
                            <div class="texto-cartao">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="card" style="width: 100%;">
                        <div class="row">
                            <div class="col">
                                <div class="box-image">
                                    <!--<div>Ícones feitos por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>-->
                                    <img src="img/servicos/implante-dentario.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cirurgia</h5>
                            <div class="texto-cartao">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="card" style="width: 100%;">
                        <div class="row">
                            <div class="col">
                                <div class="box-image">
                                    <!--<div>Ícones feitos por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>-->
                                    <img src="img/servicos/implante-dentario.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ordontia</h5>
                            <div class="texto-cartao">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="diferenciais-clinica" class="config-difernciais">
        <div class="servicos">
            <h1 class="titulo">Nossos Diferenciais</h1>
            <div class="row  pt-3 diferenciais">
                <div class="col p-3">
                    <img src="img/diferenciais/profissionais_qualificados.svg" class="card-img-top" alt="profissionais_qualificados">
                    <div class="text">
                        <p>Profissionais Certificados</p>
                    </div>
                </div>
                <div class="col p-3">
                    <img src="img/diferenciais/atendimento_rapido.svg" class="card-img-top" alt="atendimento_rapido">
                    <div class="text">
                        <p> Atendimento rápido e eficaz </p>
                    </div>
                </div>
                <div class="col p-3">
                    <img src="img/diferenciais/agendamento_online.svg" class="card-img-top" alt="agendamento_online">
                    <div class="text">
                        <p><a href="https://wa.me/556199820849" target="_blank">Agendamento online</a></p>
                    </div>
                </div>
                <div class="col p-3">
                    <img src="img/diferenciais/pagamentos_facilitados.svg" class="card-img-top" alt="pagamentos_facilitados">
                    <div class="text">
                        <p>Pagamentos facilitados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection