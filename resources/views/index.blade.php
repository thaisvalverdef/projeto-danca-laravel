@extends('layouts.app')

@section('content')

  <div class="carousel slide w-100 mx-0" id="carouselExampleControls" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset("img/slide3.jpg") }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset("img/slide4.jpg") }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset("img/slide2.jpg") }}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <h2 class="col-12 text-center text info mt-5 mb-5">Professores da semana</h2>
    <div class="card-deck flex-box">
      <div class="card">
        <img class="card-img-top" src="{{asset("img/aula1.png") }}" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Dança de Salão com Caroline e Sandro Fagundes</h5>
          <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
          <a href="/perfil-publico" class="btn" class="saiba">Saiba mais</a>
  
        </div>
      </div>
      <div class="card flex-box">
        <img class="card-img-top" src="{{asset("img/aula5.png") }}" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Hip Hop com Jefferson e Amanda</h5>
          <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
          <a href="/perfil-publico" class="btn">Saiba mais</a>
        </div>
      </div>
      <div class="card flex-box">
        <img class="card-img-top" src="{{asset("img/aula7.png") }}" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Ballet com Juliana Alves</h5>
          <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
          <a href="/perfil-publico" class="btn">Saiba mais</a>
        </div>
      </div>
    </div>
    <div class="card-deck">
      <div class="card flex-box">
        <img class="card-img-top" src="{{asset("img/aula4.png") }}" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Funk e Pop com Isadora Silva</h5>
          <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
          <a href="/perfil-publico" class="btn btn-rigth">Saiba mais</a>
        </div>
      </div>
      <div class="card flex-box">
        <img class="card-img-top" src="{{asset("img/aula8.png") }}" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Dança do Ventre com Samira Brito</h5>
          <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
          <a href="/perfil-publico" class="btn">Saiba mais</a>
        </div>
      </div>
      <div class="card flex-box">
        <img class="card-img-top" src="{{asset("img/aula6.png") }}" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Breakdance Alex Castro</h5>
          <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
          <a href="/perfil-publico" class="btn">Saiba mais</a>
        </div>

      
      {{-- </div>
    </div>  
  </div>
  </div> --}}
@endsection