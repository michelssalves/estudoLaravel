@extends('app.layouts.basic')

@section('title', 'Providers')

@section('content')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Providers - List</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.providers.add')}}">New</a></li>
                <li><a href="{{ route('app.providers')}}">Consult</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                    List
            </div>
        </div>
    </div>
@endsection