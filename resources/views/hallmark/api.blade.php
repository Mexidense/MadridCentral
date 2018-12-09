@extends('hallmark.base')

@section('head')
@endsection
@section('content')
    <div style="padding-top: 30px;">
        <h1>API</h1>
        {{--    <img src="{{URL::asset('img/enConstruccion.jpg')}}" style="width: 40%">--}}
        <h4>GET</h4>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12" style="text-align: right">
                <div class="btn btn-success">200</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <span>https://madrid-central.es/matricula/<b>{plate}</b></span>
                <br>
                <i><b>{plate}</b>: Número de matricula</i>
            </div>
        </div>
        <hr>
    </div>
@endsection