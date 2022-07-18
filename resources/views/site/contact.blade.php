@extends('site.layouts/basic')

@section('titulo', $titulo)

@section('content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Contact Us</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('site.layouts._components.form_contact', ['class' => 'borda-preta', 'reason_for_contact' => $reason_for_contact])
                <p>Your registration will be avaluated by our team</p>
                <p>Within 48 hour we will have a response to your request</p>
            @endcomponent
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