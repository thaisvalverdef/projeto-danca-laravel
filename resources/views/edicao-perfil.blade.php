@extends('layouts.app')

@section('content')

<header class="bg-danger text-white">
    <div class="container text-center">
      <h3>Página da edição do perfil</h3>
      <p class="lead"> </p>
    </div>
  </header>

<div class="container" id="containeredicao">
                {{-- falta arrumar todos os campos igual campo nome --}}

    <form method="POST" action="/edicao-perfil/{{$professor->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group col-sm-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ $professor->nome }}" class="form-control {{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>       
        </div>
        <div class="form-group col-sm-9">
            <label for="nome">Sobrenome</label>
            <input type="text" name="sobrenome" value="{{ $professor->sobrenome }}" class="form-control {{$errors->has('sobrenome') ? ' is-invalid':''}}" id="sobrenome">
            <div class="invalid-feedback">{{ $errors->first('sobrenome') }}</div>       
        </div>
        <div class="form-group col-sm-9">
            <label for="email">Endereço de email</label>
            <input type="text" name="email" value="{{ $professor->email }}" class="form-control {{$errors->has('email') ? ' is-invalid':''}}" id="email">
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>   
        </div>
        <br>
        <div class="form-group col-sm-9">
            <label for="apresentacao">Edite seu texto de apresentação</label>
            <textarea class="form-control {{$errors->has('apresentacao') ? ' is-invalid':''}}" id="apresentacao" rows="3" name="apresentacao" value="{{ $professor->apresentacao }}" >{{ $professor->apresentacao }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('apresentacao') }}</div>   
        </div>
        <br>
        <div class="form-group col-sm-9">
            <label for="plataforma">Adicione ou exclua as suas plataformas de ensino</label>
            <textarea class="form-control {{$errors->has('plataforma') ? ' is-invalid':''}}" id="plataforma" rows="3" name="plataforma" value="{{ $professor->plataforma }}" >{{ $professor->plataforma }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('plataforma') }}</div>   
        </div>
        <br>
        <div class="form-group col-sm-6">
            <label for="modalidade">Adicione ou exclua suas modalidades</label>
            <div>
                <input type="checkbox" id="ballet" name="ballet" checked>
                <label for="scales">Ballet</label>
            </div>
            <div>
                <input type="checkbox" id="contemporaneo" name="contemporaneo">
                <label for="horns">Contemporâneo</label>
            </div>
            <div>
                <input type="checkbox" id="salao" name="salao">
                <label for="horns">Dança de Salão</label>
            </div>
            <div>
                <input type="checkbox" id="ventre" name="ventre">
                <label for="horns">Dança do Ventre</label>
            </div>
            <div>
                <input type="checkbox" id="funk" name="funk">
                <label for="horns">Funk</label>
            </div>
            <div>
                <input type="checkbox" id="break" name="break">
                <label for="horns">Hip Hop / Break</label>
            </div>
            <div>
                <input type="checkbox" id="jazz" name="jazz">
                <label for="horns">Jazz</label>
            </div>
            <div>
                <input type="checkbox" id="sapateado" name="sapateado">
                <label for="horns">Sapateado</label>
            </div>
            <div>
                <input type="checkbox" id="sertanejo" name="sertanejo">
                <label for="horns">Sertanejo</label>
            </div>
            <div>
                <input type="checkbox" id="outros" name="outros">
                <label for="horns">Outros</label>
            </div>
        </div>
        <div class="form-group col-sm-6">
            <label for="niveis">Altere o nível das suas aulas</label>
            <select class="form-control {{$errors->has('niveis') ? ' is-invalid':''}}" id="niveis" name="niveis" value="{{ $professor->niveis }}" >{{ $professor->niveis }}</textarea>
                <div class="invalid-feedback">{{ $errors->first('niveis') }}</div>
                <option>Iniciante</option>
                <option>Intermediário</option>
                <option>Avançado</option>
                <option>Todos os níveis</option>
            </select>
        </div>


        <div class="form-group col-sm-6">
            <label for="senha">Nova Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <br>
        <form>
            <div class="form-group col-sm-10">
                <label for="foto">Altere suas imagens de divulgação (Dimensões recomendadas: 285x175) </label>
                <input type="file" class="form-control-file" id="foto">
            </div>
        </form>
        <br>

        <button type="submit" class="btn" id="btnConfirmar" style="margin-left: 10px; margin-bottom:40px">Confirmar</button>
        <div class="form-group">
            <?php
            if (isset($_POST) && $_POST) {
                if ($cadastrou) {
                    echo '<div class="col-md-6 mt-2 alert alert-success">Usuário cadastrado com sucesso</div>';
                } else {
                    echo '<div class="col-md-6 mt-2 alert alert-danger">Falha ao processar requisição</div>';
                }
            }
            ?>
        </div>
    </form>
</div>

@endsection