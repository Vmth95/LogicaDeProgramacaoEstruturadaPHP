<?







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>Nome do Produto:</label><br>
        <input name="produto" value="<?= isset($nome) ? $nome : '' ?>"><br>
        <label>Valor unitário:</label><br>
        <input name="unitario" value="<?= isset($unitario) ? $unitario : '' ?>"><br>
        <label>Quantidade de compra:</label><br>
        <input name="compra" value="<?= isset($compra) ? $compra : '' ?>"><br>
        <button name="btn_calc">Calcular</button>
    </form>
</body>

</html>