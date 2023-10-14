<?php
$tabuada ='';
$calcular = '';
if (isset($_POST['btn-mostrar'])){
    $tabuada = trim($_POST['tabuada']);
    $calcular = trim($_POST['calcular']);
    $conta_vez = '';


for($i=1;$i <= $calcular; $i++){
  $conta_vez = $tabuada * $i;


echo "$tabuada x $i = $conta_vez" . "<br>";
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
    <form method="post" action="ex2_for.php">
        <label>TABUADA:</label>
        <input type="text" name="tabuada">
        <label>CALCULAR ATÉ:</label>
        <input type="text" name="calcular">


        <button name="btn-mostrar">CALCULAR</button>


    </form>
</body>

</html>