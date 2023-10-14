<?php

if(isset($_POST['btn_mostrar'])){
   #verifica se o botão está chegando via post
    $nome = $_POST['nome_usuario'];
    $sobrenome = $_POST['sobrenome_usuario'];
    
    echo 'Nome Completo: <br> ' . $nome  . ' '  . $sobrenome ;

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
    <form action="formulario.php" method="POST">
    <label>Nome</label><br>
    <input name="nome_usuario"><br>
    <label>Sobrenome</label><br>
    <input name="sobrenome_usuario"><br>
    <button name="btn_mostrar">Mostrar</button><br>
    </form>
</body>
</html> 