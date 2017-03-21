@extends('layouts.master')

@section('content')
    <div class="container no-padding">
        <div class="row">
            <!-- Carousel Slideshow -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                    <li data-target="#carousel-example" data-slide-to="3"></li>
                </ol>
                <div class="clearfix"></div>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/slideshow/slide1.jpg">
                    </div>
                    <div class="item">
                        <img src="img/slideshow/slide2.jpg">
                    </div>
                    <div class="item">
                        <img src="img/slideshow/slide3.jpg">
                    </div>
                    <div class="item">
                        <img src="img/slideshow/slide4.jpg">
                    </div>
                </div>
                <!-- End Carousel Images -->
                <!-- Carousel Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->
        </div>
    </div>
    <div class="container background-gray-lighter">
        <div class="row margin-vert-40">
            <div class="col-md-6">
                <div class="col-md-4">
                    <i class="fa-bed fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">8,5</h2>
                    <p>BOOKING (2015)</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <i class="fa-bed fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">9</h2>
                    <p>BOOKING (2016)</p>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-users fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div> -->
        </div>
    </div>
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Text -->
            <div class="col-md-12">
                <h2 class="text-center">Bienvenido a Cabañas Temporada</h2>
                <p class="text-center">En un lugar privilegiado de nuestra coordillera, rodeado por el bosque Andino Patagónico y acariciado por las cristalinas aguas de un arroyo, se encuentra nuestro el Complejo de Cabañas Temporada, donde usted podrá disfrutar unas merecidas e inolvidables vacaciones.</p>
            </div>
            <!-- End Main Text -->
        </div>
    </div>
    <div class="container background-gray-lighter">
        <div class="row padding-vert-20">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!-- Portfolio -->
                <ul class="portfolio-group">
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image1" src="img/frontpage/image1.jpg">
                                <figcaption>
                                    <h3>Cabañas</h3>
                                    <span>Contamos con cabañas de 1, 2 y 3 dormitorios, totalmente equipadas.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image2" src="img/frontpage/image2.jpg">
                                <figcaption>
                                    <h3>Exteriores</h3>
                                    <span>Los huéspedes podrán relajarse en el jardín o junto a la piscina.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image3" src="img/frontpage/image3.jpg">
                                <figcaption>
                                    <h3>Video</h3>
                                    <span>Mira nuestro video en youtube</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="/ubicacion-acceso">
                            <figure class="animate fadeInRight">
                                <img alt="image4" src="img/frontpage/image4.jpg">
                                <figcaption>
                                    <h3>Ubicación</h3>
                                    <span>Fijate como llegar mediante Google Maps.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image1" src="img/frontpage/image5.jpg">
                                <figcaption>
                                    <h3>Ciudad</h3>
                                    <span>San Martín de los Andes es una ciudad, en el sudoeste de la provincia del Neuquén, dentro en la Cordillera de los Andes, Argentina, sobre la costa este del lago Lácar.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image2" src="img/frontpage/image2.jpg">
                                <figcaption>
                                    <h3>Exteriores</h3>
                                    <span>Los huéspedes podrán relajarse en el jardín o junto a la piscina.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>-->
                    <!-- //Portfolio Item// -->
                </ul>
                <!-- End Portfolio -->
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
@endsection