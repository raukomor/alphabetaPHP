@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comentários</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        @foreach ($comentarios as $comentario)
                            <ol>
                                @foreach($users as $user) 
                                    @if ($user->id == $comentario->cdUsuario)
                                    
                                        <b style='color: blue'>{{$user->name}}:</b> <br> {{$comentario->dsComentario}}
                                    <br>
                                    @endif
                                @endforeach
                                @if(Auth::check() == true)
                                    @if (Auth::user()->id == $comentario->cdUsuario)
                                        <a href = "/comentario/edit/{{$comentario->id}}">Editar</a> |
                                        <a href = "/comentario/destroy/{{$comentario->id}}">Excluir</a> |
                                    @endif
                                    <a href = "/resposta/create/{{$comentario->id}}">Responder</a>
                                @endif
                                @foreach ($respostas as $resposta)
                                    @if ($comentario->id == $resposta->cdComentario)         
                                        @foreach($users as $user)
                                            @if($user->id == $resposta->cdADM)
                                                <ul>
                                                    <ol>
                                                        <b style='color: blue'>{{$user->name}}:</b> <br>{{$resposta->dsResposta}}
                                                        <Br>
                                                        @if(Auth::check() == true)
                                                            @if (Auth::user()->id == $resposta->cdADM)
                                                                <a href = "/resposta/edit/{{$resposta->id}}">Editar</a> |
                                                            @endif
                                                            @if (Auth::user()->id == $resposta->cdADM || Auth::user()->id == $comentario->cdUsuario )
                                                                <a href = "/resposta/destroy/{{$resposta->id}}">Excluir</a>
                                                            @endif
                                                        @endif
                                                    </ol>
                                                </ul>
                                            @endif
                                        @endforeach
                                    @endif 
                                @endforeach
                            </ol>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    @if (Auth::check() == true)
                        <p>
                            <a href = "comentario/create" class="btn btn-primary">Novo Comentario</a>
                        </p>
                    @else
                        <p class="alert alert-success" role="alert">
                            Para fazer um comentario ou responder, <a href="{{ route('login') }}">Acesse o site</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('beta4.png');
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

</html>