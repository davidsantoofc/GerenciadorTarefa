<x-layout title="Alterar Tarefa">
    <form action="/editar-tarefa/{{$tarefa->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Tarefa</label>
            <input name="nome" class="form-control" value="{{$tarefa->nome}}" required />
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="{{$tarefa->descricao}}" required />
        </div>
        <div class="form-group">
            <label>Prazo</label>
            <input name="prazo" type="date" class="form-control" value="{{$tarefa->prazo}}" required/>
        </div>
        <div class="form-group">
            <label>Prioridade: </label><br>
            <input type="radio" name="prioridade"  value="Baixa" @if($tarefa->prioridade == "Baixa") checked @endif /> Baixa
            <input type="radio" name="prioridade" value="Média" @if($tarefa->prioridade == "Média") checked @endif /> Média
            <input type="radio" name="prioridade"  value="Alta" @if($tarefa->prioridade == "Alta") checked @endif /> Alta
        </div>
        <div class="form-group">
            <label>Tarefa  concluída: </label>
            <input type="checkbox"  name="concluida"  value="Sim" @if($tarefa->concluida == "Sim") checked @endif />
        </div>
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>
    </form>
</x-layout>