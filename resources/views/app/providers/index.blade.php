@extends('app.layouts.basic')

@section('title', 'Providers')

@section('content')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Providers</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.providers.add')}}">New</a></li>
                <li><a href="{{ route('app.providers')}}">Consult</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <form method="POST" action="{{ route('app.providers.list')}}">
                    @csrf
                    <input type="text" name="name" placeholder="Name" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="email" name="email" placeholder="E-mail" class="borda-preta">
                    <button type="submit" class="borda-preta">Search</button>
                </form>
            </div>
        </div>
    </div>
@endsection