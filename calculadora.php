<?php


$numero1 = '';
$numero2 = '';
$soma = '';
if (isset($_POST['btn_somar'])) {


    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];

    $soma = $numero1 + $numero2;
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


    <form method="POST" action="calculadora.php">


        <label> Número 1</label>
        <input type="text" name="n1" value="<?= $numero1 ?>">

        <label>Número 2</label>
        <input type="text" name="n2" value="<?= $numero2 ?>">


        <button name="btn_somar">Somar</button>
        <input disabled value="<?= $soma ?>">

    </form>
</body>

</html>