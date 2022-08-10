@extends('site.layouts/basic')

@section('titulo', $titulo)

@section('content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Login</h1>
    </div>

    <div class="informacao-pagina">
        <div style="width:30%; margin-left:auto; margin-right: auto">

            <form action="{{ route('site.login')}}" method="POST">

                @csrf

                <input  name="user" value="{{ old('user') }}" type="text" placeholder="User" class="borda-preta">

                {{ $errors->has('user') ? $errors->first('user') : ''}}
                
                <input  name="password" value="{{ old('password') }}" type="password" placeholder="Password" class="borda-preta">

                {{ $errors->has('password') ? $errors->first('password') : ''}}

                <button type="submit" class="borda-preta">Acess</button>
                
            </form>
                {{ isset($error) && $error != '' ? $error : '' }}
        </div>
    </div>  
</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Social Media</h2>
        <img src="{{ asset('img/facebook.png')}}">
        <img src="{{ asset('img/linkedin.png')}}">
        <img src="{{ asset('img/youtube.png')}}">
    </div>
    <div class="area-contato">
        <h2>Contact</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localization</h2>
        <img src="{{ asset('img/mapa.png')}}">
    </div>
</div>


@endsection
