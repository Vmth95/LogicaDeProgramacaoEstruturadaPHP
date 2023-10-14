<?php

    require_once 'class.php';

    if(isset($_POST['btnEnviar'])){
        $meses = $_POST['mTrab'];
        $gMedio = $_POST['gMedio'];
        $pLucro = $_POST['pLucro'];
        $pPerda = $_POST['pPerda'];

        $objSalario = new Faturamento();
        $resultado = $objSalario->ValoresParaFaturar($meses, $gMedio, $pLucro, $pPerda);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - POO</title>
</head>
<body>
    <form action="faturamento.php" method="POST">
        <label>Meses Trabalhados:</label><br>
        <input type="number" name="mTrab" value="<?= isset($meses) ? $meses : '' ?>">
        <br>
        <label>Ganho Médio Mensal:</label><br>
        <input type="number" name="gMedio" value="<?= isset($gMedio) ? $gMedio : '' ?>">
        <br>
        <label>Percentual de Lucro Total:</label><br>
        <input type="number" name="pLucro" value="<?= isset($pLucro) ? $pLucro : '' ?>">
        <br>
        <label>Percentual de Perda Total:</label><br>
        <input type="number" name="pPerda" value="<?= isset($pPerda) ? $pPerda : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button><br>
    </form>
    <hr>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
</body>
</html>