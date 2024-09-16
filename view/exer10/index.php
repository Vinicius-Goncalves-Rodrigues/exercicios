<?php
require_once __DIR__.'\..\..\controller\Reservas_PassagensController.php';
require_once __DIR__.'\..\..\config.php';

$Controller = new Reservas_PassagensController($pdo);


if(isset($_POST['nome_usuario'])){
    $data_hora = $_POST['dia']." ".$_POST['horario'];
    $reservado = $Controller->reservarTransporte($_POST['nome_usuario'], $data_hora, $_POST['tipo_transporte'], $_POST['assento_numero']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar lugar no transporte</title>
</head>
    <form action="#" method="POST" >
        <h1>Reservar lugar no transporte</h1>
        <input type="text" name="nome_usuario" placeholder="Nome do usuario">
        <input type="date" name="dia" placeholder="dia da passagem">
        <select name="horario">
            <option value="04:00">04:00</option>
            <option value="05:00">05:00</option>
            <option value="06:00">06:00</option>
            <option value="07:00">07:00</option>
            <option value="08:00">08:00</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="16:00">16:00</option>
            <option value="17:00">17:00</option>
            <option value="18:00">18:00</option>
            <option value="19:00">19:00</option>
            <option value="20:00">20:00</option>
            <option value="21:00">21:00</option>
            <option value="22:00">22:00</option>
            <option value="23:00">23:00</option>
        </select>
        <input type="number" name="assento_numero" placeholder="N° do assento (1-50)" min="1" max="50">
        <select name="tipo_transporte">
            <option value="Ônibus">Ônibus</option>
            <option value="Trem">Trem</option>
            <option value="Avião">Avião</option>
        </select>
        
        <button type="submit">ENVIAR</button>
    </form>

    <?php
        if(isset($reservado)){
            if($reservado == "SIM"){
                echo "<h1>SEU LUGAR NO TRANSPORTE FOI RESERVADO!!</h1>";
            }else{
                echo "<h1>SEU LUGAR NO TRANSPORTE FOI <strong style='text-decoration:underline;'>NÃO</strong> RESERVADO!!</h1>";
            }
        }
    ?>
</body>
</html>
