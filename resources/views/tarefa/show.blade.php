<x-layout title='Excluir Tarefa'>
    <h1>Excluir Tarefa</h1>
    <form action="/excluir-tarefa/{{ $tarefa->id }}" method="POST">
        @csrf
        @method('DELETE')
    <table class="table table-striped table-bordered table-hover">
        <tr>
           <td>Nome:</td>
           <td> {{$tarefa->nome}} </td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td> {{$tarefa->descricao}} </td>
        </tr>
        <tr>
            <td>Prazo:</td>
            <td>{{date_format(date_create($tarefa->prazo),"d/m/Y")}}</td>
        </tr>
        <tr>
            <td>Prioridade:</td>
            <td>{{$tarefa->prioridade}}</td>
        </tr>
        <tr> 
            <td>Concluida: </td>
            <td>{{$tarefa->concluida}}</td>
        </tr>
    </table>
         <button type="submit" class="btn btn-primary btn-block">Confirmar exclusão</button>
    </form>     
</x-layout>