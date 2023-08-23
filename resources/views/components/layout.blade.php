<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Gerenciador de Tarefa</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/cadastrar-tarefa">Nova Tarefa</a><li>
                    <li><a href="/listar-tarefas">Listar Tarefas</a></i>
                </ul>
            </div>
        </nav>

        {{$slot}}

        <footer class="footer">
            <p>Faetec - Programação para Web - Profº Regina Ramalho.</p>
        </footer>
    </div>

</body>
</html>