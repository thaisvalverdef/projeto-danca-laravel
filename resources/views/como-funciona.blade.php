@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <img class="card-img w-100" src="{{asset("img/banner-danca.png") }}" alt="Imagem do card">
</div>
<br>
<hr>
<div class="container">

    <!--Sobre-->
    <div class="row">
        <div class="col-7">
            <h2>O que é o Dança em Casa</h2>
            <p class="lead">O <strong>Dança Em Casa</strong> é uma plataforma para você conhecer os melhore professores
                de dança para você fazer aula sem sair de casa!
                <br /><br />
                As aulas online de dança e particulares te permitem continuar aprendendo novos passos e se exercitar.
                Descubra os perfis de professores particulares cuidadosamente selecionados. Entre em contato com ele e
                agende sua aula.
                <br /><br />
                A maioria dos professores oferecem uma primeira aula gratuita para conhecer o seu nível e fixar os
                objetivos das aulas, tudo isso para criar uma relação de confiança entre professor e aluno.</p>
        </div>
        <div class="col-5">
            <img class="img-fluid rounded mx-auto" src="{{asset("img/foto-sobre.jpeg")}}" alt="Imagem de capa do card">
        </div>
    </div>
    <br>
    <hr>
    <br>

    <div class="row" class="container">

        <div class="col-lg-6 my-auto lead text-lg-left">
            <h2>Cadastre sua aula!</h2>
            <p> Divulgue o seu trabalho e conquiste mais alunos para as suas aulas de dança em casa e ao vivo.
                <br>
                <br>
                Para participar é bem simples: faça o cadastro, conte um pouco sobre você, sua carreira, para quais
                níveis você dá aula e quais plataformas de videoconferência você utiliza, como Zoom ou Google Meet.
                <br>
                <p>Em seu perfil, alunos de todos os lugares do Brasil e do mundo vão poder entrar em contato
                    diretamente com você!
                    <br>
                    <a href="/register" class="btn">Eu quero me cadastrar!</a></p>
        </div>
        <div class="col-lg-6 order-lg-first pb-5">
            <img class="img-fluid rounded mx-auto" src="{{asset("img/cadastre-se.png") }}" alt="">
        </div>
    </div>
</div>

@endsection
