<?php

if(isset($_POST['btncalcular'])){

$name = '';
$pes = '';
$altura = '';

if(trim($name) ==''){
    echo 'Preencher o campo Seu Nome';
}

else if(trim($pes ) == ''){
    echo 'Preencher o campo Peso';
}
else if (trim($altura) ==''){
    echo 'Preencher o campo altura';
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
    <form method="POST" action="ex1_mostrardados.php">

<label>Seu Nome:</label>
<input name="nome">
<label> Seu peso:</label>
<input name="peso">
<label>Sua Altura:</label>
<input name="alt">

<button name="btncalcular">Calcular</button>





    </form>
</body>
</html>