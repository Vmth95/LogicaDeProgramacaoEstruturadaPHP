<?php

$ENTR1 = '';
$ENTR2 = '';
$ENTR3 = '';
$ENTR4 = '';
$ENTR5 = '';
$ENTR6 = '';
$ENTR7 = '';
$ENTR8 = '';
$ENTR9 = '';
$ENTR10 = '';
$ENTR11 = '';
$ENTR12 = '';
$SAIDA1 = '';
$SAIDA2 = '';
$SAIDA3 = '';
$SAIDA4 = '';
$SAIDA5 = '';
$SAIDA6 = '';
$SAIDA7 = '';
$SAIDA8 = '';
$SAIDA9 = '';
$SAIDA10 = '';
$SAIDA11 = '';
$SAIDA12 = '';
$resultado = '';
$soma ='';




if (isset($_POST['BTN_MOSTRAR'])) {
    $ENTR1 = $_POST['E1'];
    $ENTR2 = $_POST['E2'];
    $ENTR3 = $_POST['E3'];
    $ENTR4 = $_POST['E4'];
    $ENTR5 = $_POST['E5'];
    $ENTR6 = $_POST['E6'];
    $ENTR7 = $_POST['E7'];
    $ENTR8 = $_POST['E8'];
    $ENTR9 = $_POST['E9'];
    $ENTR10 = $_POST['E10'];
    $ENTR11 = $_POST['E11'];
    $ENTR12 = $_POST['E12'];
    $SAIDA1 = $_POST['S1'];
    $SAIDA2 = $_POST['S2'];
    $SAIDA3 = $_POST['S3'];
    $SAIDA4 = $_POST['S4'];
    $SAIDA5 = $_POST['S5'];
    $SAIDA6 = $_POST['S6'];
    $SAIDA7 = $_POST['S7'];
    $SAIDA8 = $_POST['S8'];
    $SAIDA9 = $_POST['S9'];
    $SAIDA10 = $_POST['S10'];
    $SAIDA11 = $_POST['S11'];
    $SAIDA12 = $_POST['S12'];
    $ANUAL = $_POST ['EA'];

   
    $resultado = $ENTR1 + $ENTR2 + $ENTR3 + $ENTR4 + $ENTR5 + $ENTR6 + $ENTR7 + $ENTR8 + $ENTR9 + $ENTR10 + $ENTR11 + $ENTR12;
    $ANUAL = $resultado;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tarefalogic.css">
</head>

<body>
    <form action="tarefa.php" method="POST">
        <div class="tarefalogic">
            <label>Entradas Janeiro:</label>
            <input type="text" name="E1">
            <label>Saídas Janeiro:</label>
            <input type="text" name="S1">
            <label>lucro:</label>
            <input disabled>
        </div>

        <div class="tarefalogic">
            <label>Entradas Fevereiro:</label>
            <input type="text" name="E2">
            <label>Saídas Fevereito:</label>
            <input type="text" name="S2">
            <label>lucro:</label>
            <input disabled>
        </div>
        <div class="tarefalogic">
            <label>Entradas Março:</label>
            <input type="text" name="E3">
            <label>Saídas Março:</label>
            <input type="text" name="S3">
            <label>lucro:</label>
            <input disabled>
        </div>
        <div class="tarefalogic">
            <label>Entradas Abril:</label>
            <input type="text" name="E4">
            <label>Saídas Abril:</label>
            <input type="text" name="S4">
            <label>lucro:</label> 
            <input disabled>
        </div>

        <div class="tarefalogic">
            <label>Entradas Maio:</label>
            <input type="text" name="E5">
            <label>Saídas Maio:</label>
            <input type="text" name="S5">
            <label>lucro:</label>
            <input disabled>
        </div>

        <div class="tarefalogic">
            <label>Entradas Junho:</label>
            <input type="text" name="E6">
            <label>Saídas Junho:</label>
            <input type="text" name="S6">
            <label>Lucro:</label>
            <input disabled>
        </div>
        <div class="tarefalogic">
            <label>Entradas Julho:</label>
            <input type="text" name="E7">
            <label>Saídas Julho:</label>
            <input type="text" name="S7">
            <label>Lucro:</label>
            <input disabled>
        </div>
        <div class="tarefalogic">
            <label>Entradas Agosto:</label>
            <input type="text" name="E8">
            <label>Saídas Agosto:</label>
            <input type="text" name="S8">
            <label>Lucro:</label>
            <input disabled>
        </div>
        <div class="tarefalogic">
            <label>Entradas Setembro:</label>
            <input type="text" name="E9">
            <label>Saídas Setembro:</label>
            <input type="text" name="S9">
            <label>Lucro:</label>
            <input disabled>
        </div>

        <div class="tarefalogic">
            <label>Entradas Outubro:</label>
            <input type="text" name="E10">
            <label>Saídas Outubro:</label>
            <input type="text" name="S10">
            <label>Lucro:</label>
            <input disabled>
        </div>

        <div class="tarefalogic">
            <label>Entradas Novembro:</label>
            <input type="text" name="E11">
            <label>Saídas Novembro:</label>
            <input type="text" name="S11">
            <label>Lucro:</label>
            <input disabled>
        </div>

        <div class="tarefalogic">
            <label>Entradas Dezembro:</label>
            <input type="text" name="E12">
            <label>Saídas Dezembro:</label>
            <input type="text" name="S12">
            <label>Lucro:</label>
            <input disabled>
        </div>
        <label>Total de Entradas ano:</label>
        <input disabled name="EA">
        <label>Total de Saídas ano:</label>
        <input disabled>
        <label>Lucro no ano:</label>
        <input disabled>

        <button name="'BTN_MOSTRAR'" value="<?= $resultado ?>">Mostrar</button>
        
    </form>
</body>

</html>