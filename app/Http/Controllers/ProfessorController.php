<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller
{
    public function index()
    {
        // Obtendo todos os registros da tabela professor
        $professor = Professor::all();

        // obtendo todos registros e aplicando paginacao para exibir apenas 10 registros por pagina
        $professor = Professor::paginate(20);

      
        // verificando se obteve registros para listar
        if ($professor) {
            // retornando resposta JSON com todos os professores encontrados
            return view('lista-usuario')->with('professor', $professor);
        }
    }

  
    public function perfilProfessor($id)
    {
       
        // Obtendo todos os registros da tabela professor
        $professor = Professor::find($id);
        $professor = DB::table('professor')
        ->leftjoin('modalidades', 'professor.modalidades','=', 'modalidades.id')
        ->leftjoin('niveis', 'professor.niveis','=', 'niveis.id')
        ->where('professor.id', $id)
        ->select('professor.id', 'professor.nome', 'professor.email', 'professor.apresentacao', 'professor.plataforma', 'professor.imagem','professor.niveis', 'modalidades.modalidades', 'niveis.niveis')
        ->first();
    
        // verificando se obteve registros para listar
        if ($professor) {
            // retornando perfil para o próprio professor visualizar
            return view('perfil-professor')->with('professor',$professor);
        }
    }

    public function perfil($id)
    {
       
        // Obtendo todos os registros da tabela professor
        $professor = Professor::find($id);
        $professor = DB::table('professor')
        ->leftjoin('modalidades', 'professor.modalidades','=', 'modalidades.id')
        ->leftjoin('niveis', 'professor.niveis','=', 'niveis.id')
        ->where('professor.id', $id)
        ->select('professor.id', 'professor.nome', 'professor.email', 'professor.apresentacao', 'professor.plataforma', 'professor.imagem','professor.niveis', 'modalidades.modalidades', 'niveis.niveis')
        ->first();
    
        // verificando se obteve registros para listar
        if ($professor) {
            // retornando perfil para o próprio professor visualizar
            return view('perfil')->with('professor',$professor);
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

         // obtendo imagem
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
        $professor->email = $request->email;
        $professor->modalidades = $request->mod;
        $professor->niveis = $request->niveis;
        $professor->apresentacao = $request->apresentacao;
        $professor->plataforma = $request->plataforma;
        $professor->imagem = $pathRelative;
        


        // efetuando o insert do registro na base de dados
        $professor->save();

        // verificando se obteve perfil para listar
        if ($professor) {
            // retornando resposta de perfil criado.
            return view('perfil-professor')->with(['professor'=>$professor,'success'=>'Dados do perfil inserido com sucesso']);
        }
    }
    public function edit($id)
    {
        // encontrando registro pelo id atraves do metodo find
        $professor = Professor::find($id);

        if($professor){
            // retornando view de edicao de cadastro
            return view('edicao-perfil')->with('professor',$professor);        }
    }

    public function update(Request $request, $id){
        // aplicando validacao nos campos com o validate do laravel
        // $request->validate([
        //     'nome'=>'required|min:2',
        //     'sobrenome'=>'required|min:2',
        //     'email'=>'required|min:10',
        //     'apresentacao'=>'required|min:20',
        //     'plataforma'=>'required|min:2',
        //     'senha'=>'required|min:6'
        // ]);


        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
                $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {
                return redirect()->back()->withInput();
            }
        }

         // encontrando registro pelo id
         $professor = Professor::find($id);

        // atribuindo valores recebidos no corpo da requisicao as respectivas colunas
        $professor->nome = $request->nome;
        $professor->email = $request->email;
        $professor->apresentacao = $request->apresentacao;
        $professor->modalidades = $request->mod;
        $professor->niveis = $request->niveis;
        $professor->plataforma = $request->plataforma;
        $professor->imagem = $pathRelative;
        

        $professor->update();

        // verificando se obteve registros para listar
        if ($professor) {
            // retornando resposta JSON com perfil atualizado
            return view('perfil-professor')->with(['professor'=>$professor,'success'=>'Perfil atualizado com sucesso']);
            }
    }

    public function delete($id) {
        // encontrando registro pelo id
        $professor = Professor::find($id);

        // efetuando soft delete 
        if ($professor->delete()) {
        

            

            // obtendo todos registros da tabela professor
            $professor = Professor::all();

            return view('lista-usuario')->with([
                'professor' => $professor,
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
