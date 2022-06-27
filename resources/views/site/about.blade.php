@extends('site.layouts/basic')

@section('titulo', $titulo)

@section('content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Olá, eu sou o Super Gestão</h1>
    </div>

    <div class="informacao-pagina">
        <p>The Super Management is the online administrative control system  that can transform and enhance you company's business</p>
        <p>Developed with the latest high technology for you to take care of what is most important, your business!</p>
    </div>  
</div>

<div class="rodape">
<div class="redes-sociais">
    <h2>Redes sociais</h2>
    <img src="{{ asset('img/facebook.png')}}">
    <img src="{{ asset('img/linkedin.png')}}">
    <img src="{{ asset('img/youtube.png')}}">
</div>
<div class="area-contato">
    <h2>Contato</h2>
    <span>(11) 3333-4444</span>
    <br>
    <span>supergestao@dominio.com.br</span>
</div>
<div class="localizacao">
    <h2>Localização</h2>
    <img src="{{ asset('img/mapa.png')}}">
</div>
</div>

@endsection