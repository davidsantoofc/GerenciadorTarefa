<x-layout title="Nova Tarefa">
    <form action="/cadastrar-tarefa" method="POST">
        @csrf
        <div class="form-group">
            <label>Tarefa</label>
            <input name="nome" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" />
        </div>
        <div class="form-group">
            <label>Prazo</label>
            <input name="prazo" type="date" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Prioridade: </label><br>
            <input type="radio" name="prioridade"  value="Baixa" checked /> Baixa
            <input type="radio" name="prioridade" value="Média" /> Média
            <input type="radio" name="prioridade"  value="Alta" /> Alta
        </div>
        <div class="form-group">
            <label>Tarefa  concluída: </label>
            <input type="checkbox"  name="concluida"  value="Sim" />
        </div>
        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
    </form>
</x-layout>