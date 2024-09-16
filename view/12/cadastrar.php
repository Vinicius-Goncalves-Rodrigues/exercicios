<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção</title>
</head>

<body>
    <h1>Oficina do Tião:</h1>
    <form method="POST">
        <input type="text" name="placa_veiculo" placeholder="Placa" required>

        <label for="tipo_manutencao">Tipo de Manutenção:</label>
        <select id="tipo_manutencao" name="tipo_manutencao" required>
            <option value="" disabled selected>Selecione uma opção</option>
            <option value="Troca de Óleo">Troca de Óleo</option>
            <option value="Troca de Filtros">Troca de Filtros</option>
            <option value="Troca de Pneus">Troca de Pneus</option>
            <option value="Troca de Amortecedores">Troca de Amortecedores</option>
            <option value="Revisão no Ar-condicionado">Revisão no Ar-condicionado</option>
        </select>

        <input type="number" name="quilometragem_atual" placeholder="Km atual" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quilometragem_atual = $_POST["quilometragem_atual"];
        $tipo_manutencao = $_POST["tipo_manutencao"];

        switch ($tipo_manutencao) {
            case 'Troca de Óleo':
                $incremento = 4000;
                break;
            case 'Troca de Filtros':
                $incremento = 10000;
                break;
            case 'Troca de Pneus':
                $incremento = 40000;
                break;
            case 'Troca de Amortecedores':
                $incremento = 50000;
                break;
            case 'Revisão no Ar-condicionado':
                $incremento = 20000;
                break;
            default:
                $incremento = 0;
                break;
        }

        $alerta_proxima_manutencao = $quilometragem_atual + $incremento;

        echo "<p>A nova quilometragem após o serviço de {$tipo_manutencao} será: {$alerta_proxima_manutencao} km</p>";

        // Aqui você pode instanciar o controller e chamar o método para salvar no banco
        require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/config.php';
        require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio12/Controller/Exercicio12.php';

        $exercicio12Controller = new Exercicio12Controller($pdo);
        $exercicio12Controller->criarExercicio12(
            $_POST["placa_veiculo"],
            $_POST["tipo_manutencao"],
            $alerta_proxima_manutencao,
            $quilometragem_atual
        );

        // Redirecionar para a página de exibição após o processamento
        header("Location: ../View/mostrar.php");

    }
    ?>

</body>

</html>