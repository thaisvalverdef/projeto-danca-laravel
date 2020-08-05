<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        // Obtendo todos os registros da tabela professor
        $prof = Professor::all();

        // obtendo todos registros e aplicando paginacao para exibir apenas 10 registros por pagina
        $prof = Professor::paginate(10);

        // obtendo apenas registros com id menor que 50 sempre que for utilizar metodos diferentes do all() e paginate()
        // lembre-se de utilizar o metodo get() no final da sua query
        // $cards = Card::where('id', '<=', '50')->get();

        // verificando se obteve registros para listar
        if ($prof) {
            // retornando resposta JSON com todos cards encontrados
            return view('lista-usuario')->with('professor', $prof);
        }
    }

    public function add()
    {
        return view ('cadastro');
    }

    public function create(Request $request)
    {
        // $request->validate([
        //     'nome'=>'required|min:2',
        //     'sobrenome'=>'required|min:2',
        //     'email'=>'required|min:10',
        //     'apresentacao'=>'required|min:20',
        //     'plataforma'=>'required|min:2',
        //     'senha'=>'required|min:6'

        // ]);

         // obtendo objeto imagem
         $imagem = $request->file('imagem');

         // verificando se usuario nao enviou imagem
         if(empty($imagem)){
             $pathRelative = null;
         } else {
             //
             $imagem->storePublicly('uploads');
 
             // criando caminho ate a pasta uploads
             $absolutePath = public_path()."/storage/uploads";
 
             // obtendo o nome do arquivo
             $name = $imagem->getClientOriginalName();
 
             // mover a imagem para o projeto
             $imagem->move($absolutePath, $name);
 
             // obtendo caminho relativo para passar ao banco de dados
             $pathRelative = "storage/uploads/$name";
         }
 

        $professor = new Professor;

        // atribuindo valores recebidos no corpo da requisicao as respectivas colunas
        $professor->nome = $request->nome;
        $professor->sobrenome = $request->sobrenome;
        $professor->email = $request->email;
        $professor->modalidades = $request->mod;
        $professor->niveis = $request->niveis;
        $professor->apresentacao = $request->apresentacao;
        $professor->plataforma = $request->plataforma;
        $professor->imagem = $pathRelative;
        $professor->senha = $request->senha;


        // efetuando o insert do registro na base de dados
        $professor->save();

        // verificando se obteve registros para listar
        if ($professor) {
            // retornando resposta de perfil criado
            return view('cadastro')->with('success', 'Dados do perfil inserido com sucesso');
        }
    }
    public function edit($id)
    {
        // encontrando registro pelo id atraves do metodo find
        $professor = Professor::find($id);

        if($professor){
            // retornando view de edicao de cadastro
            return view('edicao-perfil')->with('professor', $professor);
        }
    }

    public function update(Request $request, $id){
        // aplicando validacao nos campos com o validate do laravel
        $request->validate([
            'nome'=>'required|min:2',
            'sobrenome'=>'required|min:2',
            'email'=>'required|min:10',
            'apresentacao'=>'required|min:20',
            'plataforma'=>'required|min:2',
            'senha'=>'required|min:6'
        ]);

         // encontrando registro pelo id
         $professor = Professor::find($id);

        // atribuindo valores recebidos no corpo da requisicao as respectivas colunas
        $professor->nome = $request->nome;
        $professor->sobrenome = $request->sobrenome;
        $professor->email = $request->email;
        $professor->apresentacao = $request->apresentacao;
        $professor->plataforma = $request->plataforma;
        $professor->imagem = $pathRelative;
        $professor->senha = $request->senha;

        $professor->update();

        // verificando se obteve registros para listar
        if ($professor) {
            // retornando resposta JSON com card criado
            return view('edicao-perfil')->with([
                'professor' => $professor,
                'success' => 'Perfil atualizado com sucesso'
            ]);
        }
    }

    public function delete($id) {
        // encontrando registro pelo id
        $professor = Professor::find($id);

        // efetuando soft delete 
        if ($professor->delete()) {
        

            

            // obtendo todos registros da tabela professor
            $prof = Professor::all();

            return view('lista-usuario')->with([
                'professor' => $prof,
                'success' => 'Registro excluído com sucesso'
            ]);
        }
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $prof = Professor::where('nome','like','%' . $search . '%')
        ->orWhere('sobrenome','like','%' . $search . '%')
        ->paginate(10);

        return view('lista-usuario')->with ([
            'search' => $search,
            'professor' => $prof
        ]);
    }
        
    
}
