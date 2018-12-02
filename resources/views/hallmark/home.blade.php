
<!doctype html>
<html lang="en">
<head>
    {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
    {{--<script>--}}
    {{--(adsbygoogle = window.adsbygoogle || []).push({--}}
    {{--google_ad_client: "ca-pub-4137127071067215",--}}
    {{--enable_page_level_ads: true--}}
    {{--});--}}
    {{--</script>--}}
    {{--<!-- Global site tag (gtag.js) - Google Analytics -->--}}
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130235235-1"></script>--}}
    {{--<script>--}}
    {{--window.dataLayer = window.dataLayer || [];--}}
    {{--function gtag(){dataLayer.push(arguments);}--}}
    {{--gtag('js', new Date());--}}

    {{--gtag('config', 'UA-130235235-1');--}}
    {{--</script>--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Consulta tu matricula en Madrid Central</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="css/home.css" rel="stylesheet">
</head>

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead">
        <div class="inner">
            <h3 class="masthead-brand">Madrid Central</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="/">Inicio</a>
                <a class="nav-link" href="https://twitter.com/mexidense">Contacto</a>
            </nav>
        </div>
    </header>
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Consulta tu matricula</h1>
        <div>
            <img style="width: 100%;" class="card-img-right flex-auto d-none d-lg-block" src="img/logoMadridCentral.jpg" alt="Card image cap">
        </div>
        {!! Form::open([
            'url' => '/matricula',
            'method' => 'get',
            ])
        !!}
            <div class="form-group">
                {!!
                    Form::label('plate', 'Introduzca la matricula')
                !!}
                <br>
                {!!
                    Form::text('plate', '', [
                        'placeholder' => '0000ABC',
                        'class' => 'form-control-lg'
                    ])
                !!}
            </div>
            {!!
            Form::submit('Consultar', [
                'class' => 'btn btn-success',
            ])
            !!}
        {!! Form::close() !!}
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p><a href="">Madrid Central 2018</a> por <a href="https://twitter.com/mexidense">@mexidense</a>.
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>