<html>
    <head>
        <title> Pizza Hut <?php if(isset($_GET['op'])){ echo $_GET['op']; } ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    </head>
    <body style="background-color: #f3c30c;">
    <div class="container" style="background-color: #f3c30c;">

    <!---NavBar-->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light" style="background-color: #f3c30c;">
                <a class="navbar-brand" href="index.php">
                    <h5 style="font-style: italic;">
                        <img src="img/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
                         Pizza Hut
                    </h5>
                </a>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"> Home </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CardápioHut
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?op=1">PromoçõesHut</a>
                            <a class="dropdown-item" href="index.php?op=2">Pizza'sTradicionaisHut</a>
                            <a class="dropdown-item" href="index.php?op=3">SobremesasHut</a>
                        </div>
                </div>
            </nav>
        </div>
    </div>

    <br/>

        <?php if(isset($_GET['op'])){ ?>
            <?php if($_GET['op'] == 1){ ?>
                <div class="row">
            <div class="col">
                <img src="img/logo2.png" class="d-block w-100">
                <br>
                <h3> Sobre a Pizza Hut</h3>
                <h5> Criada em 1958 nos EUA, a Pizza Hut é a maior rede de pizzaria do mundo com presença em 100 países,
                    com mais de 16 mil restaurantes distribuídos pelos cinco continentes. </h5>
                <p style="text-align: justify;">
                    A marca emprega mais de 250 mil funcionários globalmente. Por dia, são mais de 4 milhões de
                    consumidores atendidos em unidades Pizza Hut ao redor do mundo.
                    Presente no Brasil desde 1989, atualmente a Pizza Hut conta com mais de 230 restaurantes
                    distribuídos em 24 estados e mais de 60 cidades.
                    No país, a Pizza Hut faz parte da IMC - International Meal Company - empresa de capital aberto
                    também detentora das marcas KFC, Frango Assado, Viena, Olive Garden, entre outras.
                </p>
            </div>


            <div class="col">
                <h3> PromoçõesHut </h3>
                <br>
                <img src="img/promo1.jpg" class="d-block w-100">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <b> Dá Um Hut (12 fatias) + 3 Bebidas latas - R$59,90 </b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Aproveite os sabores Calabresa, Mussarela, Marguerita, Frango & Requeijão com um
                                preço especial e leve + 3 bebidas latas!
                            </div>
                        </div>
                    </div>
                    <br>
                    <img src="img/promo2.jpg" class="d-block w-100">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <b>Dá Um Hut (12 fatias) + Pizza de Brigadeiro (4 fatias) - R$49,90 </b>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Aproveite os sabores Calabresa, Mussarela, Marguerita, Frango & Requeijão com um
                                preço especial e leve + 3 Pizza de Brigadeiro!
                            </div>
                        </div>
                    </div>
                    <br>
                    <img src="img/promo3.jpg" class="d-block w-100">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <b> Dá Um Hut Grande (12 fatias) R$59,90 </b>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Aproveite os sabores Calabresa, Mussarela, Marguerita, Frango & Requeijão com um
                                preço especial!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php }elseif($_GET['op'] == 2){ ?>
                <div class="row">
            <div class="col">
                <img src="img/logo2.png" class="d-block w-100">
                <br>
                <h3> Sobre a Pizza Hut</h3>
                <h5> Criada em 1958 nos EUA, a Pizza Hut é a maior rede de pizzaria do mundo com presença em 100 países,
                    com mais de 16 mil restaurantes distribuídos pelos cinco continentes. </h5>
                <p style="text-align: justify;">
                    A marca emprega mais de 250 mil funcionários globalmente. Por dia, são mais de 4 milhões de
                    consumidores atendidos em unidades Pizza Hut ao redor do mundo.
                    Presente no Brasil desde 1989, atualmente a Pizza Hut conta com mais de 230 restaurantes
                    distribuídos em 24 estados e mais de 60 cidades.
                    No país, a Pizza Hut faz parte da IMC - International Meal Company - empresa de capital aberto
                    também detentora das marcas KFC, Frango Assado, Viena, Olive Garden, entre outras.
                </p>
            </div>


            <div class="col">
                <h3> Pizza's TradicionaisHut </h3>
                <br>
                <img src="img/tradi1.jfif" class="d-block w-100">
                <br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color:#f8f4f4;" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <b> Napolitana (Grande PAM.) - R$66,90 </b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Parmesão, exclusiva mussarela Pizza Hut, rodelas de tomates, orégano e alho.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <b> Calabresa (Grande PAM.) - R$66,90 </b>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Calabresa acompanhada de cebola, azeitonas verdes e mussarela.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <b> Marguerita (Grande PAM.) - R$69,90 </b>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Exclusiva mussarela Pizza Hut coberta com tomates fatiados com um toque de manjericão.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color:#f8f4f4;" data-bs-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                <b> Mussarela (Grande PAM.) - R$69,90</b>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Queijo mussarela servido sobre molho de tomates especial Pizza Hut.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4" data-bs-target="#collapseSeven" aria-expanded="false"
                                aria-controls="collapseSeven">
                                <b> Portuguesa (Grande PAM.) - R$72,90</b>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Molho de tomate, mussarela Pizza Hut, tiras de presunto, cebola e azeitonas verdes
                                cobertas com cream cheese.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4" data-bs-target="#collapseEight" aria-expanded="false"
                                aria-controls="collapseEight">
                                <b>Pepperoni (Grande PAM.) - R$72,90</b>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Muitas fatias de pepperoni (salame especial condimentado com páprica) servidas sobre
                                mussarela e de molho de tomate.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <?php }else{ ?>
                <div class="row">
            <div class="col">
                <img src="img/logo2.png" class="d-block w-100">
                <br>
                <h3> Sobre a Pizza Hut</h3>
                <h5> Criada em 1958 nos EUA, a Pizza Hut é a maior rede de pizzaria do mundo com presença em 100 países,
                    com mais de 16 mil restaurantes distribuídos pelos cinco continentes. </h5>
                <p style="text-align: justify;">
                    A marca emprega mais de 250 mil funcionários globalmente. Por dia, são mais de 4 milhões de
                    consumidores atendidos em unidades Pizza Hut ao redor do mundo.
                    Presente no Brasil desde 1989, atualmente a Pizza Hut conta com mais de 230 restaurantes
                    distribuídos em 24 estados e mais de 60 cidades.
                    No país, a Pizza Hut faz parte da IMC - International Meal Company - empresa de capital aberto
                    também detentora das marcas KFC, Frango Assado, Viena, Olive Garden, entre outras.
                </p>
            </div>


            <div class="col">
                <h3> SobremesasHut </h3>
                <br>
                <div class="accordion" id="accordionExample">
                    <img src="img/sobremesa1.png" class="d-block w-100">
                    <br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <b> Média Brigadeiro - R$39,90 </b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pan Média de brigadeiro: Nossa famosa massa Pan Pizza de 8 fatias, coberta com o
                                tradicional e delicioso Brigadeiro e chocolate granulado.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <b>Slider de Ovomaltine - R$7,90 </b>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O mini disco de pizza vai conquistar você! Peça já o delicioso sabor ovomaltine.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4;" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <b> Slider Brigadeiro - R$8,90 </b>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O mini disco de pizza vai conquistar você! Peça já o delicioso sabor Brigadeiro.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4" data-bs-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                <b> Slider de Doce de Leite - R$8,90 </b>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O mini disco de pizza vai conquistar você! Peça já o delicioso sabor Doce de Leite.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4" data-bs-target="#collapseSeven" aria-expanded="false"
                                aria-controls="collapseSeven">
                                <b> Individual de Ovomaltine - R$21,90 </b>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Exclusividade Pizza Hut: Pizza de Ovomaltine! Se delicie com a pizza creme crocante
                                OVOMALTINE® e flocos OVOMALTINE®.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                style="background-color: #f8f4f4" data-bs-target="#collapseEight" aria-expanded="false"
                                aria-controls="collapseEight">
                                <b>Individual de Brigadeiro - R$21,90</b>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O autêntico brigadeiro preparado com leite condensado e chocolate, desde a borda até o
                                topo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php } ?>
        <?php }else{ ?>

        <div class="row">
         <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/pizza1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pizza2.jpg" width="60" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pizza3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <br/>

    <div class="row">
        <div class="col" style="text-align: left;">
            <figure class="figure">
                 <img src="img/foto5.jpg" class="figure-img img-fluid rounded" width="400" alt="A generic square placeholder image with rounded corners in a figure.">
                  <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
        </div>
            <div class="col" style="text-align: center;">
                <figure class="figure">
                        <img src="img/foto4.jpg" class="figure-img img-fluid rounded" width="400" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
            <div class="col" style="text-align: right;">
                <figure class="figure">
                        <img src="img/foto3.jpg" class="figure-img img-fluid rounded" width="400" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>
            </div>
         </div>
    </div>
        <?php } ?>

    <br>

    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light ml-auto" style="background-color: #da291c;">
                <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
                    PizzaHut - Copyright 2022 - Todos os direitos reservados
                </a>
            </nav>
        </div>
    </div>

    </body>
</html>