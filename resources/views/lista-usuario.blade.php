@extends('layouts.app')

@section('content')
    <main class="container" id="containerlista">
        <article class="row" style="padding-bottom:300px">
            <section class="col-12 mx-auto my-5 py-5" id="usuariosTb">
                {{-- <h3 class="col-12 text-center my-2"><?= $tituloPagina ?></h3> --}}
                <table class="table my-5">
                    <thead class="thead-light" style="text-align:center">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Apresentação</th>
                            <th scope="col">Plataforma</th>
                            <th scope="col">Níveis</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($professor as $professor)
                        <tr>
                            <td>{{ $professor->nome }}</a></td>
                            <td>{{ $professor->sobrenome }}</a></td>
                            <td>{{ $professor->email }}</a></td>
                            <td>{{ $professor->modalidades }}</a></td>
                            <td>{{ $professor->apresentacao }}</a></td>
                            <td>{{ $professor->plataforma }}</a></td>
                            <td>{{ $professor->niveis }}</a></td>
                            <td>
                                <img src="{{ $professor->imagem != null ? asset($professor->imagem) : asset('img/null.png') }}" alt="">
                            </td>
                            <td>
                                <a href="/edicao-perfil/{{$professor->id}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{ $professor->id }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="modal{{ $professor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja excluir o perfil ? {{ $professor->nome }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Professor: {{ $professor->nome }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <form action="/professor/remove/{{ $professor->id }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button id="delete-contact" type="submit" class="btn btn-danger">Excluir</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach                                                          <
                    </tbody>
                </table>
            </section>
        </article>
    </main>
@endsection