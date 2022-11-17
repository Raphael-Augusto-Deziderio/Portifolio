<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Portifólio Raphael Deziderio</title>
    <meta charset="utf-8">

    {{--CSS--}}
    <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}" media="screen" />
</head>
<body>
    @include('template/header')
    <section class="container flex">
            <button type="button" id="btnGames" class="item">
                <p>Games</p>
            </button>

            <button type="button" id="btnWeb" class="item">
                <p>Web</p>
            </button>
    </section>



    <script type="text/javascript" src="{{url('js/home.js')}}"></script>

</body>

<footer>
    @include('template/footer')
</footer>

</html>