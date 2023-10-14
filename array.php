<?php

if (isset($_POST['btn_mostrar'])) {
    $n = array();
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];

    $guardar[] = $n1;
    $guardar[] = $n2;
    $guardar[] = $n3;
    $guardar[] = $n4;
    $guardar[] = $n5;
    for ($i = 0; $i < count($n); $i++) {

        echo "NUMERO $n[$i] GUARDADO NA POSIÇÃO $i. <br>  ";
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
    <form action="array.php" method="POST">
        <label>NUMERO 1:</label>
        <input name="n1">
        <label>NUMERO 2:</label>
        <input name="n2">
        <label>NUMERO 3:</label>
        <input name="n3">
        <label>NUMERO 4:</label>
        <input name="n4">
        <label>NUMERO 5:</label>
        <input name="n5">

        <button name="btn_mostrar">MOSTRAR</button>
    </form>
</body>

</html>