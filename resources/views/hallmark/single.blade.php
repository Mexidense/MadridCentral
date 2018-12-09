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
@endsection