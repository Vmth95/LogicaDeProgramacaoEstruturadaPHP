<?


if(isset($_POST['btn_verificar'])){

echo " Preencher todos os campos";





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
<form action="exl_capiroto01.php" method="post">

<label>Painel A :</label>
<input name="p1" value="<?= isset($p1) ? $p1 :''?>">

<label>Painel B :</label>
<input name="p2" value="<?= isset($p2) ? $p2 :''?>">

<label>Painel C :</label>
<input name="p3" value="<?= isset($p3) ? $p3 :''?>">

<label>Painel D :</label>
<input name="p4" value="<?= isset($p4) ? $p4 :''?>">

<label>Painel E :</label>
<input name="p5" value="<?= isset($p5) ? $p5 :''?>">

<button name="btn_verificar">Verificar</button>

</form>
</body>
</html>