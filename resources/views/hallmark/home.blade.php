@extends('hallmark.base')

@section('head')
    <script type="text/javascript" src="/js/loader.js"></script>
    <script type="text/javascript" src="/js/allTagsChart.js"></script>
@endsection
@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-12">
                <h1 class="display-4 font-weight-normal">Consulta tu matricula</h1>
                <p class="lead font-weight-normal">Identifique el distintivo medioambiental de su vehículo con la matricula.</p>
            <p>Sabrá si posee una etiqueta ambiental 0, ECO, B o C.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img style="width: 80%;" class="" src="{{URL::asset('/img/logoMadridCentral.jpg')}}" alt="Card image cap">
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

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Etiqueta Ambiental B - Amarilla</h2>
                <img src="{{URL::asset('img/tags/B.png')}}"/>
                <div class="text-justify">
                    <p class="lead">Turismos y comerciales ligeros, clasificados en el Registro de Vehículos como gasolina EURO 3/III o Diésel EURO 4/IV o 5/V.</p>
                    <p>Vehículos de más de 8 plazas y transporte de mercancías, clasificados en el Registro de Vehículos con nivel de emisiones del vehículos sea Euro IV/4 o V/5, indistintamente del tipo de combustible.</p>
                    <p>Vehículos ligeros (categoría L), clasificados en el Registro de Vehículos con nivel de emisiones del vehículos Euro II/2.</p>
                </div>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Etiqueta Ambiental C - Verde</h2>
                <img src="{{URL::asset('img/tags/C.png')}}"/>
                <div class="text-justify">
                    <p class="lead">Turismos y comerciales ligeros, clasificados en el Registro de Vehículos como gasolina EURO 4/IV, 5/V o 6/VI o diésel EURO 6/VI.</p>
                    <p>Vehículos de más de 8 plazas y transporte de mercancías, clasificados en el Registro de Vehículos con nivel de emisiones del vehículos sea EURO 6/VI, indistintamente del tipo de combustible.</p>
                    <p>Vehículos ligeros (categoría L), clasificados en el Regristro de Vehículos con nivel de emisiones del vehículos Euro III/3 o Euro IV/4. </p>
                </div>
            </div>
        </div>
    </div>
    <div id='allTagsChart' style="height: 600px;" class="row position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"></div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Etiqueta Ambiental Eco - Verde/Azul</h2>
                <img src="{{URL::asset('img/tags/ECO.png')}}" style="width: 60%;"/>
                <div class="text-justify">
                    <p class="lead">Turismos y comerciales ligeros, clasificados en el Registro de Vehículos como vehículos híbridos enchufables con autonomía <40km, vehículos híbridos no enchufables (HEV), vehículos propulsados por gas natural, vehículos propulsados por gas natural comprimido (GNC) o gas licuado del petróleo (GLP). En todo caso, además deberán cumplir los siguientes parámetro, Vehículos con combustible gasolina con nivel de emisiones EURO 4/IV, 5/V o 6/VI o combustible diésel con nivel de emisiones EURO 6/VI.</p>
                    <p>Vehículos de más de 8 plazas y transporte de mercancías, clasificados en el Registro de Vehículos como híbridos enchufables con autonomía <40km, híbridos no enchufables (HEV), propulsados por gas natural comprimido (GNC), gas natural licuado (GNL) o gas licuado del petróleo (GLP). En todo caso, además deberán cumplir que el nivel de emisiones del vehículos sea EURO 6/VI, indistintamente del tipo de combustible.</p>
                    <p>Vehículos ligeros (categoría L), clasificados en el Registro de Vehículos como vehículos híbridos enchufables(PHEV) con autonomía <40Km o vehículos híbridos no enchufables (HEV).</p>
                </div>
            </div>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Etiqueta Ambiental 0 - Azul</h2>
                <img src="{{URL::asset('img/tags/0.png')}}"/>
                <div class="text-justify">
                    <p class="lead">Vehículos clasificados en el Registro de Vehículos como vehículos eléctricos de batería (BEV), vehículo eléctrico de autonomía extendida (REEV), vehículo eléctrico híbrido enchufable (PHEV) con una autonomía mínima de 40 kilómetros o vehículos de pila de combustible.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
