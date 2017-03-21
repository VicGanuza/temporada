@extends('layouts.master')

@section('content')
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-12">
                <h2>Ubicación</h2>
                <div class="row">
                    <div class="col-md-6 margin-bottom-10 margin-top-10 animate fadeInRight">
                        <div class="clearfix"></div>
                        <p>San Martín de los Andes es una ciudad de montaña, en el sudoeste de la provincia del Neuquén enclavada en la Cordillera de los Andes, Argentina, sobre la costa este del lago Lácar, y es la localidad turística más importante de la provincia.
                        </p>
                        <p>El complejo "Cabañas Temporada" se encuentran ubicadas a sólo 15 cuadras del centro de San Martín de los andes.
                        </p>
                        <p>A continuación se detalla en el plano de la ciudad de San Martín de los Andes los dos distintos modos de acceso al complejo, dependiendo de si usted llega por la ruta de Siete Lagos, o por la ruta Nacional 40 (desde Junín de los Andes).</p>
                    </div>
                    <div class="col-md-6 animate fadeIn">
                        <img src="img/ubicacion/mapa.jpg" alt="Mapa" class="margin-top-10">
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 animate fadeIn">
                        <h3  class="padding-top-10 pull-left">
                            Plano de la ciudad
                            <small>- Detallado</small>
                        </h3>
                        <img src="img/ubicacion/plano.jpg" alt="Plano Ciudad" class="margin-top-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection