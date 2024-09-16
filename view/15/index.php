<?php
require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/config.php';
require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio15/Controller/Exercicio15Controller.php';

$exercicio15Controller = new Exercicio15Controller($pdo);

$afazeres = $exercicio15Controller->listarAfazeres();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de eventos</title>
</head>
<body>
    <a href="C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio15/View/cadastrar.php">Cadastrar</a>

    <div>
        <h1>
            Gerenciamento de Agenda:
        </h1>
        <h2>
            Lista:
        </h2>
        <?php if(isset($afazeres) && is_array($afazeres) && count(value:$afazeres)):?>
<table>
    <thead>
        <tr>
        <th>ID evento</th>
        <th>nome usuario</th>
        <th>data</th>
        <th>hora</th>
        <th>local</th>
        <th>descricao evento</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($afazeres as $afazer): ?>
            <tr>
                <td><?Php echo htmlspecialchars($afazer['id_evento']);?></td>
                <td><?Php echo htmlspecialchars($afazer['nome_usuario']);?></td>
                <td><?Php echo htmlspecialchars($afazer['data']);?></td>
                <td><?Php echo htmlspecialchars($afazer['hora']);?></td>
                <td><?Php echo htmlspecialchars($afazer['local']);?></td>
                <td><?Php echo htmlspecialchars($afazer['descricao_evento']);?></td>
            </tr>

        <?php endforeach;?>
    </tbody>
</table>
<php else: ?>
    <p>Nenhum evento ou compromisso detectado</p>
    <?php endif; ?>
    </div>
</body>
</html>