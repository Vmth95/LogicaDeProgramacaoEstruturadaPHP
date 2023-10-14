<?php
$Nome = '';
$idade = '';
$quantidade = '';
if (isset($_POST['btn-mostrar'])) {
    $Nome = trim($_POST['nome']);
    $idade = trim($_POST['idade']);
    $quantidade = trim($_POST['quantidade']);
}


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
    <form method="post" action="ex1_for.php">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Idade</label>
        <input type="text" name="idade">
        <label>Quantidade</label>
        <input type="text" name="quantidade">

        <button name="btn-mostrar">Mostrar</button>


    </form>
</body>

</html>