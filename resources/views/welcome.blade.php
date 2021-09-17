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
    
    .box-titulo {
        width: 100%;
        font-family: Montserrat !important;
        font-style: normal;
        font-weight: 600 !important;
        line-height: 29px;
        color: #000000;
        padding: 10px;
        margin-left: 24px;
    }
    
    .texto-cartao .card-text {
        /* H6 / H6 Regular */
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 25px;
        /* Gray-Scale / Gray-700 */
        color: #495057 !important;
        height: 340px;
        overflow-y: auto;
        padding-left: 16px
    }
    
    .texto-cartao .card-text i {
        color: #FAAB90;
        font-size: 0.5em;
    }
    /*.card .card-img-top {
        width: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 24px 24px 0px 0px;
    }*/
    
    .card h1 {
        text-align: center;
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
    
    .linha {
        /* Linha */
        height: 4px;
        /* Primary-Salmon / Salmon */
        width: 315px;
        background: #FAAB90;
        margin-bottom: 0px;
        padding-bottom: 0px;
    }
    
    .triangulo {
        width: 23.33px;
        height: 18px;
        margin-top: 0px;
        /* Primary-Salmon / Salmon */
        background: #FAAB90;
        border-right: 3px solid transparent;
    }
    
    .imagem-servicos {
        height: 80px;
        width: 80px;
        border-radius: 60%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        /* Primary-Salmon / Salmon */
        background-color: #FAAB90;
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
        .texto-cartao .card-text {
            height: auto;
        }
        .texto-cartao .card-text ul {
            /* H6 / H6 Regular */
            padding-left: 0px;
        }
        .texto-cartao .card-text li {
            /* H6 / H6 Regular */
            padding-left: 15px;
        }
        .linha {
            /* Linha */
            height: 4px;
            /* Primary-Salmon / Salmon */
            width: 300px;
            background: #FAAB90;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
    }
    
    @media (min-width: 600px) and (max-width: 979px) {
        .linha {
            /* Linha */
            height: 4px;
            /* Primary-Salmon / Salmon */
            width: 150px;
            background: #FAAB90;
            margin-bottom: 0px;
            padding-bottom: 0px;
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
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="row">
                            <div class="box-titulo">
                                <h3>Implante</h3>
                                <div class="linha"></div>
                                <img src="img/servicos/seta.svg">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>Implantodontia é um ramo da Odontologia que se destina ao tratamento da ausência de dentes, com reabilitações protéticas suportadas por implante.</p>
                                    <ul style="list-style: none; padding-left: 12px;">
                                        <li><i class="fas fa-circle"></i> Implantes Unitários</li>
                                        <li><i class="fas fa-circle"></i> Protocolos (Prótese Total Sobre Implantes Fixa)</li>
                                        <li><i class="fas fa-circle"></i> Overdenture (Prótese Total Sobre Implantes Removível)</li>
                                        <li><i class="fas fa-circle"></i> Enxertos Ósseos</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="row">
                            <div class="box-titulo">
                                <h3>Prótese</h3>
                                <div class="linha"></div>
                                <img src="img/servicos/seta.svg">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>A prótese dentária é a arte dental, ciência que lida com a reposição de tecidos bucais e dentes perdidos, visando restaurar e manter a forma, função, aparência e saúde bucal.</p>
                                    <ul style="list-style: none; padding-right: 3px;">
                                        <li><i class="fas fa-circle"></i> Prótese Total / Dentadura</li>
                                        <li><i class="fas fa-circle"></i> Prótese Estética Removível / Flexível</li>
                                        <li><i class="fas fa-circle"></i> Prótese Fixa / Coroas (“Pivot”)</li>
                                        <li><i class="fas fa-circle"></i> Placa de Bruxismo / Miorrelaxante</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Clínico Geral</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>O dentista clínico geral é o profissional da saúde capacitado na área de odontologia, entre as suas competências estão prevenção, diagnóstico e tratamento de uma ampla variedade de condições, desordens e doenças dos
                                        dentes e gengivas. O dentista clínico geral prestam serviços relacionados a manutenção da higiene oral e saúde bucal.</p>
                                    <!--<ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Implantes Unitários</li>
                                        <li><i class="fas fa-circle"></i> Protocolos (Prótese Total Sobre Implantes Fixa)</li>
                                        <li><i class="fas fa-circle"></i> Overdenture (Prótese Total Sobre Implantes Removível)</li>
                                        <li><i class="fas fa-circle"></i> Enxertos Ósseos</li>
                                    </ul>-->
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Ortodontia</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>Ortodontia é uma especialidade odontológica que corrige a posição dos dentes e dos ossos maxilares posicionados de forma inadequada. Dentes tortos ou dentes que não se encaixam corretamente são difíceis de serem mantidos
                                        limpos, além de prejudicar a sua aparência e a efetividade da mastigação.
                                    </p>
                                    <ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Aparelhos Ortodônticos Fixos</li>
                                        <li><i class="fas fa-circle"></i> Aparelhos Ortodônticos Removíveis</li>
                                        <li><i class="fas fa-circle"></i> Aparelho Ortopédico Facial</li>
                                        <li><i class="fas fa-circle"></i> Placas de Contenção</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Tratamento de Canal</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>É a remoção do tecido mole que se encontra na parte mais interna do dente (polpa dentária). Esta pode estar sadia ou infectada e, ao ser removida, é substituída por um material obturador.
                                    </p>
                                    <ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Endodontia de Dentes Anteriores</li>
                                        <li><i class="fas fa-circle"></i> Endodontia de Dentes Posteriores</li>
                                        <li><i class="fas fa-circle"></i> Tratamento de Lesões Periapicais</li>
                                        <li><i class="fas fa-circle"></i> Tratamento de Infecções Agudas (Abscessos)</li>
                                        <li><i class="fas fa-circle"></i> Tratamento de Pulpite (Dente Inflamado)</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Estética</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>Ramo da odontologia que atua na área da cosmética e restauração dental.
                                    </p>
                                    <ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Facetas de Porcelana (Lentes de Contato)</li>
                                        <li><i class="fas fa-circle"></i> Restaurações em Resina</li>
                                        <li><i class="fas fa-circle"></i> Alinhamento Gengival</li>
                                        <li><i class="fas fa-circle"></i> Clareamento Dental</li>
                                        <li><i class="fas fa-circle"></i> Bichectomia</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Odontopediatria</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>Odontopediatria é uma especialização da Odontologia que cuida da saúde bucal de crianças e adolescentes.
                                    </p>
                                    <ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Tratamento Preventivo de Cáries</li>
                                        <li><i class="fas fa-circle"></i> Profilaxia e Aplicação de Flúor</li>
                                        <li><i class="fas fa-circle"></i> Restaurações Dentárias</li>
                                        <li><i class="fas fa-circle"></i> Tratamento de Canal</li>
                                        <li><i class="fas fa-circle"></i> Extrações de “Dentes de Leite”</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Periodontia</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>Periodontia ou periodontologia é a ciência que estuda e trata as doenças do sistema de implantação e suporte dos dentes, formado por osso alveolar e tecido gengival.
                                    </p>
                                    <ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Raspagem de Tártaros</li>
                                        <li><i class="fas fa-circle"></i> Limpeza Profilática</li>
                                        <li><i class="fas fa-circle"></i> Controle da Inflamação Gengival (Gengivite)</li>
                                        <li><i class="fas fa-circle"></i> Tratamento de Periodontite</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="card">
                        <div class="box-titulo">
                            <h3>Cirurgias em geral</h3>
                            <div class="linha"></div>
                            <img src="img/servicos/seta.svg">
                        </div>
                        <div class="card-body">
                            <div class="texto-cartao">
                                <div class="card-text">
                                    <p>Cirurgias que a Clínica Louvre realiza
                                    </p>
                                    <ul style="list-style: none">
                                        <li><i class="fas fa-circle"></i> Extrações de Sisos / 3º Molar</li>
                                        <li><i class="fas fa-circle"></i> Extrações de Dentes com Mobilidade</li>
                                        <li><i class="fas fa-circle"></i> Extrações de Dentes Inclusos e Supranumerários</li>
                                        <li><i class="fas fa-circle"></i> Cirurgias para Correção do Sorriso</li>
                                        <li><i class="fas fa-circle"></i> Frenectomia</li>
                                    </ul>
                                </div>
                            </div>
                            <!--<button class="botao"><a href="#" class="link-botao" >Saiba mais</a></button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="diferenciais-clinica" class="config-difernciais">
        <div class="servicos">
            <h1 class="titulo">Nossos Diferenciais</h1>
            <div class="row  p-3 diferenciais">
                <div class="col-lg-3 col-md-3">
                    <div class="row m-3" style="background-color: #FDE1D8;border-radius: 25px 0px 25px 25px; margin-left: auto">
                        <div class="col-lg-4 p-3">
                            <div class=" imagem-servicos ">
                                <img class="p-3" src="img/diferenciais/pro.png " alt="profissionais_qualificados ">
                            </div>
                        </div>
                        <div class="col-lg-8 pt-3">
                            <div class="text">
                                <p>Profissionais Certificados</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="row m-3" style="background-color: #FDE1D8;border-radius: 25px 0px 25px 25px;margin-left: auto;">
                        <div class="col-lg-4 p-3">
                            <div class=" imagem-servicos">
                                <img class="p-3" src="img/diferenciais/ampu.png " alt="profissionais_qualificados ">
                            </div>
                        </div>
                        <div class="col-lg-8 pt-3">
                            <div class="text">
                                <p>Atendimento rápido e eficaz</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="row m-3" style="background-color: #FDE1D8;border-radius: 25px 0px 25px 25px;margin-left: auto;">
                        <div class="col-lg-4 p-3">
                            <div class=" imagem-servicos ">
                                <img class="p-3 " src="img/diferenciais/agen.png " alt="profissionais_qualificados ">
                            </div>
                        </div>
                        <div class="col-lg-8 pt-3">
                            <div class="text">
                                <p>Agendamento online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="row m-3" style="background-color: #FDE1D8;border-radius: 25px 0px 25px 25px;margin-left: auto;">
                        <div class="col-lg-4 p-3">
                            <div class=" imagem-servicos ">
                                <img class="p-3 " src="img/diferenciais/card.png " alt="profissionais_qualificados ">
                            </div>
                        </div>
                        <div class="col-lg-8 pt-3">
                            <div class="text">
                                <p>Pagamentos facilitados</p>
                            </div>
                        </div>
                    </div>
                    <!--<img src="img/diferenciais/pagamentos_facilitados.svg " alt="pagamentos_facilitados ">
                    <div class="text ">
                        <p>Pagamentos facilitados</p>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
</body>
@endsection