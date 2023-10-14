<?php
    
    require_once '../Classe/Ex_poo.php';

    $g1 = '';
    $e1 = '';
    $res = '';
    $qtd = '';

    if(isset($_POST['btn_calcular'])) {
        $qtd = $_POST['combustivel'];
        $tipo = ltrim(trim($_POST['quantidade']));

        $objcombu = new Combustivel();
        $res = $objcombu->ValoresCombustivel($qtd, $tipo);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combustivel</title>
</head>
<body>
    <form action="ex1.obj.php" method="post">
        <label>Tipo do Combustível:</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="1"<?= isset($qtd) == 1 ? 'selected' : '' ?>>Etanol</option>
            <option value="2"<?= isset($qtd) == 2 ? 'selected' : '' ?>>Gasolina</option>
        </select>
        <br>
        <label>Qantidade de litros desejados</label>
        <br>
        <input type="text" name="quantidade" value="<?= isset($tipo) ? $tipo : '' ?>">
        <br>
        <button name="btn_calcular">Calcular total</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($res) ? $res : '' ?>">
</body>
</html>