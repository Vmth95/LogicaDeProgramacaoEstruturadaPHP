<?
$n1 = '';
$n2 = '';
$n3 = '';
$n4 = '';
$n5 = '';
$soma = '';
$resultado = '';
$verificar = '';
if (isset($_POST['btn_mostrar'])) {

    $n1 = trim($_POST['num1']);
    $n2 = trim($_POST['num2']);
    $n3 = trim($_POST['num3']);
    $n4 = trim($_POST['num4']);
    $n5 = trim($_POST['num5']);




    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') {
        echo ' Todos os campos deverão ser preenchidos';
    } else {
        $soma = $n1 * $n2;
        $resultado = $n3 * $n4 * $n5;
        $verificar = $soma + $resultado;
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
    <form action="ex1_operador.php" method="POST">
        <label>Número 1 :</label><br>
        <input name="num1"><br>


        <label>Número 2 :</label><br>
        <input name="num2"><br>


        <label>Número 3:</label><br>
        <input name="num3"><br>


        <label>Número 4:</label><br>
        <input name="num4"><br>


        <label> Número 5:</label><br>
        <input name="num5"><br>
        <button name="btn_mostrar">Mostrar</button><br>





    </form>
</body>

</html>