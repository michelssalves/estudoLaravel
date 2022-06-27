@extends('site.layouts/basic')

@section('titulo', $titulo)

@section('content')

<div class="conteudo-destaque"> 
    <div class="esquerda">
        <div class="informacoes">
            <h1>System Super Management</h1>
            <p>Best business management software for you company.<p>
            <div class="chamada">
                <img src="{{ asset('img/check.png')}}">
                <span class="texto-branco">Complete and uncomplicated management</span>
            </div>
            <div class="chamada">
                <img src="{{ asset('img/check.png')}}">
                <span class="texto-branco">Your company in the cloud</span>
            </div>
        </div>
        <div class="video">
            <img src="{{ asset('img/player_video.jpg')}}">
        </div>
    </div>
    <div class="direita">
        <div class="contato">
            <h1>Contact</h1>
            <p>If you have any questions, please contact our team using the form below.<p>
            @component('site.layouts._components.form_contact', ['class' => 'borda-branca'])
            
            @endcomponent
        </div>
    </div>
</div>
@endsection