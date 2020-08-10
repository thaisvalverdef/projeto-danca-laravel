<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Dança Em Casa')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
</head>

<body>
    
    <header>
        <nav class="navbar text-primary navbar-expand-lg navbar-light"> 

            <a class="navbar-brand" href="">
                <img src="{{asset("img/logo_danca.png") }}" width="100" height="100" href="/index">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/como-funciona">Como funciona</a>
                    </li>

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modalidades</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/modalidades">Ballet</a>
                            <a class="dropdown-item" href="#">Contemporâneo</a>
                            <a class="dropdown-item" href="#">Dança de Salão</a>
                            <a class="dropdown-item" href="#">Dança do Ventre</a>
                            <a class="dropdown-item" href="#">Funk</a>
                            <a class="dropdown-item" href="#">Hip Hop/Breaking</a>
                            <a class="dropdown-item" href="#">Jazz</a>
                            <a class="dropdown-item" href="#">Samba</a>
                            <a class="dropdown-item" href="#">Sapateado</a>
                            <a class="dropdown-item" href="#">Vídeo Dance</a>
                            <a class="dropdown-item" href="#">Outros</a>
                        </div>
                    </li>

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>                      

                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Quero dar aulas</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/edicao-perfil/{{ Auth::user()->id }}">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li class="logout" class="nav-item">
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endguest
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#btnLogin">Quero dar aulas</a>
                    </li> --}}

                </ul>
            </div>
        </nav>

        <!--Modal: Login / Register Form-->
        <div class="modal fade" id="btnLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Modal cascading tabs-->
                    <div class="modal-c-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                                        class="fas fa-user mr-1"></i>
                                    Faça o seu Login</a>
                            </li>

                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 7-->
                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body mb-1">
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="email" id="modalLRInput10"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput10">Seu
                                            email</label>
                                    </div>

                                    <div class="md-form form-sm mb-4">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" id="modalLRInput11"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput11">Sua
                                            senha</label>
                                    </div>
                                    <div class="text-center mt-2">
                                        <button class="btn">Acesse<i class="fas fa-sign-in ml-1"></i></button>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="ml auto">
                                        <p>Ainda não cadastrou seu perfil? <a href="#"
                                                class="blue-text">Cadastre-se!</a></p>
                                        <p>Esqueceu <a href="#" class="blue-text">a senha?</a></p>
                                    </div>
                                    <button type="button" class="btn" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>


    <main class="container-fluid px-0">
        @yield('content')
    </main>
    <footer class="container-fluid text-white bg-dark pt-4"> 
        <div>
            <ul class="text-center mb-0 py-2">
                <li class="list-inline-item">
                    <h5>Você dá aula de dança on-line?</h5>
                </li>
                <li class="list-inline-item">
                    <a href="/register" class="btn" style="margin-bottom:15px;">Cadastre-se!</a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script> $('.modal .close').click(function(){
        $('.modal').hide();
        }) </script>
</body>

</html>
