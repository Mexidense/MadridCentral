@extends('hallmark.base')

@section('head')
    <link href="/css/single.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron row text-white rounded bg-dark">
            <div class="col-md-7">
                <h1 class="display-4 font-italic font-weight-bold">Madrid Central 2018</h1>
                <p>
                <div class="matricula">
                    <img src="{{URL::asset('img/matriculaVacia.png')}}" alt="Matricula">
                    <div class="numero-matricula">
                        <h2>{{ $hallmark->id }}</h2>
                    </div>
                </div>
                </p>
                <p>
                    Su etiqueta es:
                <h1>
                    @if($hallmark->tagType == 'NOT')
                        <div class="etiqueta-not rounded">SIN DISTINTIVO</div>
                    @elseif ($hallmark->tagType == 'B')
                        <div class="etiqueta-b rounded">B</div>
                    @elseif ($hallmark->tagType == 'C')
                        <div class="etiqueta-c rounded">C</div>
                    @elseif ($hallmark->tagType == 'ECO')
                        <div class="etiqueta-c rounded">E</div><div class="etiqueta-0">C</div><div class="etiqueta-c">0</div>
                    @elseif ($hallmark->tagType == '0')
                        <div class="etiqueta-0 rounded">0</div>
                    @endif
                </h1>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{URL::asset('img/tags/' . $hallmark->tagType . '.png')}}" alt="Etiqueta {{$hallmark->tagType}}" height="350" width="350">
            </div>
        </div>

    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Más información
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">Todo lo que deber saber de Madrid Central</h2>
                    <p class="blog-post-meta">1 de Diciembre por <a href="https://twitter.com/mexidense">Salvador B.</a></p>
                    <p>
                        Madrid Central es una zona de bajas emisiones que comenzará a funcionar el viernes 30 de noviembre de 2018. Esta medida, la primera del Plan A de Calidad del Aire y Cambio Climático, favorecerá al peatón, la bicicleta y el transporte público, que ganarán en protagonismo y espacio también con la reforma de calles como Gran Vía o Atocha. El distrito Centro se convertirá en un pulmón para la ciudad en pleno corazón de Madrid.
                    </p>
                    <p>
                        En sus 472 hectáreas agrupa las cuatro APR actuales y amplía su espacio también a barrios como Justicia y Universidad. En su interior no habrá calles de libre circulación, salvo algunos viales con objeto de permitir determinadas incorporaciones, por lo que se elimina el tráfico de paso por el centro de la ciudad. El perímetro, que coincide con el primer cinturón de circulación de Madrid, el de las rondas y bulevares, es más intuitivo y reconocible que los actuales.

                        Los residentes, personas con movilidad reducida, y servicios de seguridad y emergencias podrán acceder con sus vehículos a Madrid Central. También se han previsto una serie de excepciones, moratorias y horarios para algunos colectivos por su función o características. Para el resto de vehículos, podrán circular si son 0 emisiones o ECO y solo acceder para estacionar en aparcamientos de rotación si son C o B.
                    </p>
                    <h2>Beneficios medioambientales</h2>
                    <p>
                        En sus 472 hectáreas, se evitarán un 37% de los kilómetros recorridos actuales y un 40% de las emisiones de dióxido de nitrógeno (NO2), un contaminante que afecta a la salud y cuyos niveles incumplen la normativa desde 2010.

                        Pero el beneficio de Madrid Central no es solo un aire más limpio, sino que también supondrá menos ruido y la liberación de espacio público para dar el protagonismo a las personas que viven y visitan el distrito en un entorno más acogedor y saludable.
                    </p>

                    <h2>Fases</h2>
                    <p>
                        Madrid Central se está implantando por fases. Durante el verano y principios de otoño se han acometido los siguientes trabajos:

                        Incremento de las reservas de moto aumentando la superficie disponible en calzada. Se habilitan 52 nuevas reservas (52% más) y 940 plazas (90% más).
                        Plazas SER del distrito Centro pasan a ser todas de residentes (color verde).
                        Señalización del perímetro con una doble línea roja.
                        Instalación de la señalización horizontal y vertical informativa
                        El 1 de noviembre comenzará una campaña de información en soportes exteriores y medios de comunicación, que se extenderá hasta diciembre.

                        El 30 de noviembre entrarán en vigor las normas de Madrid Central, con aplicación gradual y progresiva y controles manuales de agentes de policía y movilidad.

                        En enero comenzarán los dos meses de prueba del sistema informático de gestión de multas de Madrid Central. Durante este tiempo, se enviarán comunicaciones sin multa a las personas que incumplan la normativa. En caso de reiteración, se enviará una segunda carta a los 15 días.
                    </p>

                    <h2>¿Cómo realizar los trámites?</h2>
                    <p>
                        29 de octubre: los profesionales que realicen carga y descarga pueden comenzar a darse de alta el lunes 29 de octubre. Para ello tienen que comunicar los vehículos destinados a la distribución urbana de mercancías en las oficinas del Ayuntamiento ubicadas en la calle Bustamante, 16.
                        28 de noviembre: petición de autorizaciones puntuales para los invitados de las personas empadronadas a través del 010, la cuenta de twitter @lineamadrid y las Oficinas de Atención a la Ciudadanía Línea Madrid.
                        8 de enero: inicio del periodo de trámites por vía telemática en el perfil del usuario de Madrid Central que se habilitará en www.madrid.es.
                    </p>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Fuentes
                </h3>
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">Información Madrid Central</h4>
                    <p class="mb-0">La información ha sido consultada en la página web oficial del <a href="https://www.madrid.es">Ayuntamiento de Madrid</a></p>
                </div>
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">Etiquetas DGT</h4>
                    <p class="mb-0">La información relacionada a los distintivos medioambiantes ha sido consultado en el portal estadístico de la <a href="http://www.dgt.es">Dirección General de Tráfico</a></p>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection