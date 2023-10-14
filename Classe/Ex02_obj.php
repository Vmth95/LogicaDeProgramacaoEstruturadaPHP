<?php
    require_once 'Ex02_poo.php';

    $tipo = '';
    $convers = '';
    $res = '';

    if (isset($_POST['btn_converter'])){
        $tipo = $_POST['conversor'];
        $convers = ltrim(trim($_POST['conversao']));

        $objconvers = new Conversor();
        $res =$objconvers->ValoresParaConverter($tipo,$convers);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>

<body>
    <form action="Ex02_obj.php" method="post">
        <label>Conversão:</label>
        <br>
        <select name="conversor">
            <option value="">Selecione</option>
            <option value="1"<?= isset($tipo) == 1 ? 'selected' : '' ?>>Fahrenheit - Celsius</option>
            <option value="2"<?= isset($tipo) == 2 ? 'selected' : '' ?>>Celsius - Fahrenheit</option>
        </select>
        <br>
        <input type="text" name="conversao" value="<?= isset($convers) ? $convers : '' ?>">
        <br>
        <button name="btn_converter">Converter</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($res) ? $res : '' ?>">
</body>
</html>