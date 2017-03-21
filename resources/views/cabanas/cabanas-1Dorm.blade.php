@extends('layouts.master')

@section('content')
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-12">
                <h2>Cabañas de 1 Dormitorio</h2>
                <!-- Filter Buttons -->
                <div class="portfolio-filter-container margin-top-20">
                    <ul class="portfolio-filter">
                        <li class="portfolio-filter-label label label-primary">
                            Filtrar por:
                        </li>
                        <li>
                            <a href="#" class="portfolio-selected btn btn-default" data-filter="*">Todas</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default" data-filter=".cocina">Cocina</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default" data-filter=".exteriores">Exteriores</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default" data-filter=".living">Living</a>
                        </li>
                    </ul>
                </div>
                <!-- End Filter Buttons -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 cocina">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/cocina1.jpg" alt="image1">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 living">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/living1.jpg" alt="image2">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 exteriores">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/exterior1.jpg" alt="image3">

                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 cocina">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/cocina2.jpg" alt="image4">

                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 living">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/living2.jpg" alt="image5">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 living">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/living3.jpg" alt="image6">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 exteriores">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/cabanas/1dorm/exterior2.jpg" alt="image7">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-6 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="img/portfolio/image8.jpg" alt="image8">
                                <figcaption>
                                    <h3 class="margin-top-20">Quam nunc putamus</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
            </div>
        </div>
    </div>
@endsection