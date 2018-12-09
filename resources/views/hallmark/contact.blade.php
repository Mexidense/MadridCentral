@extends('hallmark.base')

@section('head')
    <link href="/css/form.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
@endsection
@section('content')
    <h1>Formulario de contacto</h1>
{{--    <img src="{{URL::asset('img/enConstruccion.jpg')}}" style="width: 40%">--}}
    {{--<h4>Disculpen las molestias</h4>--}}
    <div class="container">
    <form action="#" method="post" class="form-consulta col-12">
        <label>Nombre y apellido: <span>*</span>
            <input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
        </label>

        <label>Email: <span>*</span>
            <input type="email" name="email" placeholder="Email" class="campo-form" required>
        </label>

        <label>Consulta:
            <textarea name="consulta" class="campo-form"></textarea>
        </label>
        <br>
        <input type="submit" value="Enviar" class="btn-form">
    </form>
    </div>
@endsection