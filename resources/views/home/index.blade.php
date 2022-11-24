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
                <h2>Games</h2>
                @if(isset($allProjects))
                    @foreach($allProjects as $project)
                        @if($project->idTypeProject == 1)
                            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal" data-id ={{$project->idProject}}>
                                <p>{{$project->nameProject}}</p>
                            </a>
                        @endif
                    @endforeach
                @endif
            </button>

            <button type="button" id="btnWeb" class="item">
                <h2>Web</h2>
                @if(isset($allProjects))
                    @foreach($allProjects as $project)
                        @if($project->idTypeProject == 2)
                            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal" data-id ={{$project->idProject}}>
                                {{$project->nameProject}}
                            </a>
                        @endif
           @endforeach
                @endif
            </button>
    </section>

{{--ProjectModal--}}
@include('home.modals.projects')


{{--JS--}}
@include('home.js')

</body>

<footer>
    @include('template/footer')
</footer>

</html>