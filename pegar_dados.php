<?php
$nome = '';
$sobrenome = '';

if(isset($_POST['btn_mostrar'])){
    $nome = $_POST['nome_usuario'];
    $sobrenome = $_POST['sobrenome_usuario'];

   if(trim($nome) == ''){
  echo 'Preencher o campo Nome';   
}

else if(trim($sobrenome) ==''){
echo 'Preencher campo Sobrenome';
}






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
    <form action="pegar_dados.php" method="POST">
    <label>Nome</label>
    <input name="nome_usuario" value="<?= $nome ?>">
    <label>Sobrenome</label>
    <input name="sobrenome_usuario" value="<?= $sobrenome ?>">
    <button name="btn_mostrar">Mostrar</button>
    </form>
</body>
</html> 