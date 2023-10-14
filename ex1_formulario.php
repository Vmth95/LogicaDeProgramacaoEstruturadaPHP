<?php

if(isset($_POST['btn_mostrar'])){


$name = $_POST ['nome_do_prato'];
$descrição = $_POST ['descrição_usuario'];
$preço = $_POST ['preço_usuario'];
$ingredientes = $_POST ['ingredientes_usuario'];

echo '<br> Nome do prato: ' . $name . ' <br> Descrição: ' . $descrição . '<br> Preço: ' . $preço . '<br> Ingredientes: ' . $ingredientes . '<hr>';

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
 <form action="ex1_formulario.php" method="POST">
<label>Nome do prato</label><br>
<input name="nome_do_prato"><br>
<label >Descrição</label><br>
<textarea name="descrição_usuario"></textarea><br>
<label>Preço</label><br>
<input name="preço_usuario"><br>
<label>Ingredientes</label><br>
<input name="ingredientes_usuario"><br>
 <button name="btn_mostrar">mostrar</button>

</form>

</body>
</html>