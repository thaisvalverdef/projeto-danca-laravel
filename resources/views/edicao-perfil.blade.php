@extends('layouts.app')

@section('content')

<header class="modalidades" class="bg-danger text-white mt-5">
    <div class="container text-center">
      <h3>Página da edição do perfil</h3>
      <p class="lead"> </p>
    </div>
  </header>

<div class="container" id="containeredicao">
                
    <form method="POST" action="/edicao-perfil/{{$professor->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <br>
        <div class="form-group col-sm-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ $professor->nome }}" class="form-control {{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>       
        </div>
        <div class="form-group col-sm-9">
            <label for="email">Endereço de email</label>
            <input type="text" name="email" value="{{ $professor->email }}" class="form-control {{$errors->has('email') ? ' is-invalid':''}}" id="email">
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>   
        </div>
        <div class="form-group col-sm-9">
            <label for="apresentacao">Edite seu texto de apresentação</label>
            <textarea class="form-control {{$errors->has('apresentacao') ? ' is-invalid':''}}" id="apresentacao" rows="3" name="apresentacao" value="{{ $professor->apresentacao }}" >{{ $professor->apresentacao }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('apresentacao') }}</div>   
        </div>
        <div class="form-group col-sm-9">
            <label for="plataforma">Adicione ou exclua as suas plataformas de ensino</label>
            <textarea class="form-control {{$errors->has('plataforma') ? ' is-invalid':''}}" id="plataforma" rows="3" name="plataforma" value="{{ $professor->plataforma }}" >{{ $professor->plataforma }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('plataforma') }}</div>   
        </div>
        <br>
        <div class="form-group col-sm-6">
            <label for="modalidade">Altere sua modalidade</label>
            <div>
                <input type="checkbox" id="ballet" name="mod" value="1">
                <label for="scales">Ballet</label>
              </div>
              <div>
                <input type="checkbox" id="contemporaneo" name="mod" value="2">
                <label for="horns">Contemporâneo</label>
              </div>
              <div>
                <input type="checkbox" id="salao" name="mod" value="3">
                <label for="horns">Dança de Salão</label>
              </div>
              <div>
                <input type="checkbox" id="ventre" name="mod" value="4">
                <label for="horns">Dança do Ventre</label>
              </div>
              <div>
                <input type="checkbox" id="funk" name="mod" value="5">
                <label for="horns">Funk</label>
              </div>
              <div>
                <input type="checkbox" id="break" name="mod" value="6">
                <label for="horns">Hip Hop / Break</label>
              </div>
              <div>
                <input type="checkbox" id="jazz" name="mod" value="7">
                <label for="horns">Jazz</label>
              </div>
              <div>
                <input type="checkbox" id="samba" name="mod" value="8">
                <label for="horns">Samba</label>
              </div>
              <div>
                <input type="checkbox" id="sapateado" name="mod" value="9">
                <label for="horns">Sapateado</label>
              </div>
              <div>
                <input type="checkbox" id="sertanejo" name="mod" value="10">
                <label for="horns">Sertanejo</label>
              </div>
              <div>
                <input type="checkbox" id="outros" name="mod" value="11">
                <label for="horns">Outros</label>
              </div>
        </div>
        <div class="form-group col-sm-6">
            <label for="niveis">Altere o nível das suas aulas</label>
            <select class="form-control {{$errors->has('niveis') ? ' is-invalid':''}}" id="niveis" name="niveis" value="{{ $professor->niveis }}" >{{ $professor->niveis }}</textarea>
                <div class="invalid-feedback">{{ $errors->first('niveis') }}</div>
                <option value="1">Iniciante</option>
                <option value="2">Intermediário</option>
                <option value="3">Avançado</option>
                <option value="4">Todos os níveis</option>
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
                <input type="file" name="imagem"  value="{{ old('imagem') }}" class="form-control{{$errors->has('imagem') ? ' is-invalid':''}}" id="imagem">
                <div class="invalid-feedback">{{ $errors->first('imagem') }}</div>            </div>
        </form>
        <br>

        <button type="submit" class="btn" id="btnConfirmar" style="margin-left: 10px; margin-bottom:40px">Confirmar</button>           
    </form>
</div>

@endsection