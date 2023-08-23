<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Models\Tarefa;

    class TarefaController extends Controller {

        public function index(){
            $tarefas = Tarefa::all();
            //dd($tarefas);

            return view('tarefa.index')->with('tarefas', $tarefas);
        }

        public function show($id){
            echo "<h1>Visualizar Tarefa $id.</h1>";
        }

        public function create(){
            return view('tarefa.create');
        }

        public function store(Request $request){
            /*dd($request->all());
            Tarefa::create($request->all());*/

            $tarefa = new Tarefa();
            $tarefa->nome = $request->nome;
            $tarefa->descricao = $request->descricao;
            $tarefa->prazo = $request->prazo;
            $tarefa->prioridade = $request->prioridade;

            if($request->concluida==null)
                $tarefa->concluida = 'Não';
            else
                $tarefa->concluida = $request->concluida;

            $tarefa->save();

            return redirect('/listar-tarefas');

        }
    }