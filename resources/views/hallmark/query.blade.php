@extends('hallmark.base')

@section('head')
@endsection
@section('content')
    @isset($plate)
        <div class="alert alert-danger" role="alert">
            <i>Matricula '{{$plate}}' incorrecta</i>
        </div>
    @endisset
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-12">
            <h1 class="display-4 font-weight-normal">Consulta tu matricula</h1>
            <p class="lead font-weight-normal">Identifique el distintivo medioambiental de su vehículo con la matricula.</p>
            <p>Sabrá si posee una etiqueta ambiental 0, ECO, B o C.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img style="width: 60%;" class="" src="{{URL::asset('/img/logoMadridCentral.jpg')}}" alt="Card image cap">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="matricula">
                    <img src="{{URL::asset('/img/matricula.png')}}" alt="Matricula">
                </div>
                <div class="matricula">
                    <img src="{{URL::asset('/img/matricula_2.png')}}" alt="Matricula">
                </div>
                {!! Form::open([
                'url' => '/matricula',
                'method' => 'get',
                ])
                !!}
                <div class="form-group">
                    {!!
                        Form::label('plate', 'Introduzca su matricula')
                    !!}
                    <br>
                    {!!
                        Form::text('plate', '', [
                            'placeholder' => '0000ABC/XX0000YY',
                            'class' => 'form-control-lg text-center',
                            'required',
                            'maxlength' => 10,
                            'pattern' => '(([a-zA-Z]{1,}[0-9]{4}[a-zA-Z]{1,})|([0-9]{4}[a-zA-Z]{3}))',
                            'title' => 'Introduzca la matricula correcta: XX0000YY / 0000ABC',
                        ])
                    !!}
                </div>
                {!!
                Form::submit('Consultar', [
                    'class' => 'btn btn-success',
                ])
                !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection