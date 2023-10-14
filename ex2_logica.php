<?php

$numero1 = '';
$numero2 = '';
$numero4 = '';
$numero5 = '';
$numero6 = '';
$numero7 = '';
$numero8 = '';
$numero9 ='';
$resultado = '';





if(isset($_POST['btn_calc'])){
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$numero3 = $_POST['n3'];
$numero4 = $_POST['n4'];
$numero5 = $_POST['n5'];
$numero6 = $_POST['n6'];
$numero7 = $_POST['n7'];
$numero8 = $_POST['n8'];
$numero9 = $_POST['n9'];
$soma = $numero1 + $numero9;
$multiplicacao = $numero3 * $numero4 * $numero5 * $numero6 * $numero7 * $numero8;
$resultado = $soma * $numero2 + $multiplicacao;


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
  <form action="ex2_logica.php" method="POST">
<label>Número1</label>
<input type="text" name="n1">
<label>Número2</label>
<input type="text" name="n2">
<label>Número3</label>
<input type="text" name="n3">
<label>Número4</label>
<input type="text"  name="n4">
<label>Número5</label>
<input type="text" name="n5">
<label>Número6</label>
<input type="text" name="n6">
<label>Número7</label>
<input type="text" name="n7">
<label>Número8</label>
<input type="text" name="n8">
<label>Número9</label>
<input type="text" name="n9">

<button name="btn_calc">calcular</button>
<input disabled value="<?= $resultado ?>">
  </form>  
</body>
</html>