@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Divulgue suas aulas online!</h1>
      <p class="lead">Cadastre o seu perfil no <strong>Dança Em Casa</strong> e conquiste mais alunos para as suas aulas on-line.</p>
    </div>
  </div>
  
  <div class="container">
    <form method="POST" action="/cadastro" enctype="multipart/form-data">
      @csrf
      <div class="form-group col-sm-9">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome">
      </div>
      <div class="form-group col-sm-9">
        <label for="nome">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome">
      </div>
      <div class="form-group col-sm-9">
        <label for="email">Endereço de email</label>
        <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
      </div>
      <br>
      <div class="form-group col-sm-9">
        <label for="apresentacao">Apresentação</label>
        <textarea class="form-control" name="apresentacao" rows="3"></textarea>
      </div>
      <br>
      <div class="form-group col-sm-9">
        <label for="plataforma">Plataforma</label>
        <textarea class="form-control" name="plataforma" rows="2"></textarea>
      </div>
      <br>
      <div class="form-group col-sm-6">
        <label for="modalidade">Modalidades</label>
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
          <input type="checkbox" id="ventre" name="mod">
          <label for="horns">Dança do Ventre</label>
        </div>
        <div>
          <input type="checkbox" id="funk" name="mod">
          <label for="horns">Funk</label>
        </div>
        <div>
          <input type="checkbox" id="break" name="mod">
          <label for="horns">Hip Hop / Break</label>
        </div>
        <div>
          <input type="checkbox" id="jazz" name="mod">
          <label for="horns">Jazz</label>
        </div>
        <div>
          <input type="checkbox" id="sapateado" name="mod">
          <label for="horns">Sapateado</label>
        </div>
        <div>
          <input type="checkbox" id="sertanejo" name="mod">
          <label for="horns">Sertanejo</label>
        </div>
        <div>
          <input type="checkbox" id="outros" name="mod">
          <label for="horns">Outros</label>
        </div>
      </div>
      <div class="form-group col-sm-6">
        <label for="niveis">Níveis</label>
        <select class="form-control" id="niveis" name="niveis">
          <option value="1">Iniciante</option>
          <option value="2">Intermediário</option>
          <option value="3">Avançado</option>
          <option value="4">Todos os níveis</option>
        </select>
      </div>
  
  
      <div class="form-group col-sm-6">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>
      <br>
      
        <div class="form-group col-sm-10">
          <label for="foto">Insira a sua imagem de divulgação (Dimensões recomendadas: 285x175) </label>
          <input type="file" class="form-control-file" id="foto">
        </div>
      
      <br>
  
      <button type="submit" class="btn" id="btnCadastrar" style="margin-left: 10px; margin-bottom: 40px">Cadastrar</button>
     
    </form>
  </div> 
@endsection

