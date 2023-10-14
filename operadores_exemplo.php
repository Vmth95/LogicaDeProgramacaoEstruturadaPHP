<?
if (isset($_POST['btn_verificar'])) {
    $numero = $_POST['num1'];

    if (trim($numero) == '') {
        echo 'Preecher campo Numero ';
    } else {

        if ($numero > 100) {
            echo 'O Número' . $numero . 'é maior do que 100';
        }
         else if ($numero == 100) {
            echo 'O Número ' . $numero . 'é igual a 100';
        }
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
    <form method="POST" action="operadores_exemplo.php">
        <label>Numero </label>
        <input type="text" name="num1">
        <button name="btn_verificar">verificar</button>


    </form>
</body>

</html>