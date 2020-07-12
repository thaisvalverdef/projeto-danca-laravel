@extends('layouts.app')

@section('content')
    </header>
    <div class=título>
        Saiba mais sobre o seu Professor!
    </div>
    <div id="divPai">;
        <aside>
            <h3>Professor Fulano</h3>
            <br>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                        <img  src="{{asset("img/1.jpg") }}"  src="./assets/img/" class="d-block w-100" alt="Foto1">
                    </li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1">
                        <img src="{{asset("img/2.jpg") }}" class="d-block w-100" alt="Foto2">
                    </li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2">
                        <img src="{{asset("img/3.jpg") }}" class="d-block w-100" alt="Foto3">
                    </li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3">
                        <img src="{{asset("img/4.jpg") }}" class="d-block w-100" alt="Foto4">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset("img/1.jpg") }}" class="d-block w-100" alt="Foto1">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("img/2.jpg") }}" class="d-block w-100" alt="Foto2">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("img/3.jpg") }}" class="d-block w-100" alt="Foto3">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("img/4.jpg") }}" class="d-block w-100" alt="Foto4">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </br>
                <h6>Modalidade</h6>
                Balé <br><br>
                <h6>Dificuldade</h6>
                Iniciante / Intermediário / Avançado <br><br>
                <h6>Plataforma da aula</h6>
                Zoom / Google Meet<br><br>
                <h6>Redes sociais</h6>
                <a href="" target="_blank" rel="noopener" title="Acesse meu perfil no Facebook"><i class="fab fa-facebook fa-2x"></i></a> <a href="" target="_blank" rel="noopener" title="Acesse meu perfil no Instagram"><i class="fab fa-instagram fa-2x"></i></a></p>
        </aside>
        <main>
            <section>
                <h3>Apresentação</h3></br>
                <article>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates velit, dignissimos dolorum facere reiciendis enim aut sint reprehenderit, iste in sed nemo. Dicta rem nobis corrupti eaque eveniet nesciunt nostrum?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque debitis ullam facere quisquam reprehenderit odit? Voluptatum voluptas modi nostrum fuga sit vel. Iste odio excepturi eius veritatis? Ullam, debitis nulla.
                </article>
            </section>

            </br></br></br>
            <form>
                <div class="form-row">
                    <h5 class="text-center pt-2 pb-0"> Entre em contato com o Professor!</h5>
                </div>
                <div class="form-group col-md-10">
                    <label for="exampleFormControlInput1">Nome Completo</label>
                    <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="Preencha seu nome">
                </div>
                <div class="form-group col-md-10">
                    <label for="exampleFormControlInput2">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                </div>

                <div class="form-group col-md-10">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>
                <div class="form-group mt-4 mb-0 ml-3 d-flex flex-row justify-content-start">
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                    <button type="submit" class="btn ml-2">Enviar</button>
                </div>
            </form>
        </main>
    </div>
    
@endsection