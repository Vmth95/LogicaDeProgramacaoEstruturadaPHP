<?php
 $nome = '';
 $rua = '';
 $bairro = '';
 $cep = '';

if (isset($_POST['btn_mostrar'])){
    echo 'Nome completo:' . $nome . ' ' . 'Rua:' . $rua . ' ' . 'Bairro:' . $bairro . ' ' . 'Cep:' . $cep;





    $nome = $_POST['nome_usuario'];
    $rua = $_POST['rua_usuario'];
    $bairro = $_POST['bairo_usuario'];
    $cep = $_POST['cep_usuario'];
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
    <form action="tarefa_logica.php" method="post">
        <label>Nome completo:</label>
        <input type="text" name="nome_usuario">
        <label>Rua:</label>
        <input type="text" name="rua_usuario">
        <label>Bairo:</label>
        <input type="text" name="bairro_usuario">
        <label>Cep:</label>
        <input type="text" name="cep_usuario">



<button name="btn_mostrar"> Mostrar </button>


        

    </form>

</body>

</html>