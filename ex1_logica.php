<?php
$numero1 = '';
$numero2 = '';
$numero3 = '';
$soma = '';
if(isset($_POST['btn_calc'])) {



$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$numero3 = $_POST['n3'];

$soma = ($numero1 + $numero2 + $numero3) /3 ;

// $soma = $numero1 + $numero2 + $numero3;
// $resultado = $soma /3
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
<form action="ex1_logica.php"  method="POST">


<labe>Número1</labe>
<input type="text" name="n1" value="<?= $numero1 ?>">

<label>Número2</label>
<input type="text" name="n2" value="<?= $numero2 ?>">

<label>Número3</label>
<input type="text" name="n3" value="<?= $numero3 ?>">




<button name="btn_calc">Calcular</button>
<input disabled value="<?= $soma?>">
</form>    
</body>
</html>