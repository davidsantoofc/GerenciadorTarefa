<x-layout title='Listar as Tarefas' li='Cadastrar Tarefa'>

    <h1>Listar Tarefas</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Concluida</th>
                <th colspan="2" style="text-align:center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{$tarefa->nome}}</td>
                    <td>{{$tarefa->descricao}}</td>
                    <td>{{$tarefa->concluida}}</td>
                    <td><a href="editar-tarefa/{{$tarefa->id}}">Alterar</a></td>
                    <td><a href="">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>

