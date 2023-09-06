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
            $tarefa = Tarefa::find($id);
            return view('tarefa.show')->with('tarefa', $tarefa);
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
            $nome = $tarefa->nome;
            return redirect('/listar-tarefas')->with('sucesso', "Tarefa ${nome} cadastrada com sucesso");

        }

        public function edit($id){
            $tarefa = Tarefa::find($id);
            return view('tarefa.edit')->with('tarefa', $tarefa);
        }

        public function update(Request $request, $id){
           // dd($request->all());
            $tarefa = Tarefa::find($id);
            $nome = $tarefa->nome;
            $data = [
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'prazo' => $request->prazo,
                'prioridade' => $request->prioridade,
                'concluida' => ($request->concluida == Null) ? "Não" : $request->concluida,
            ];
            Tarefa::where('id', $id)->update($data);
            return redirect('/listar-tarefas')->with('sucesso', "Tarefa ${nome} alterada com sucesso");
        }

        public function destroy($id){
            $tarefa = Tarefa::find($id);
            $nome = $tarefa->nome;
            $tarefa->delete();
            return redirect('listar-tarefas')->with('sucesso', "Tarefa ${nome} excluída com sucesso!");
        }
    }