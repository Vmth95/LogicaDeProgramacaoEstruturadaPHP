<?php

if(isset($_POST['btn-verificar'])){

$numero = $_POST['numero'];



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
    <form method="POST"  action="operador_exemplo.php">
<label>Número digitado</label>
<input type="text" name="numero">
<button name="btn-verificar">Verificar</button>
    </form>
</body>
</html>