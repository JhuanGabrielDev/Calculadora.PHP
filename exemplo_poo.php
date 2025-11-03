<?php

require_once 'Classe/Calculo.php';


$numero1 = '';
$numero2 = '';
$numero3 = ''; 
$res = '';


if(isset($_POST['btnSomar'])){
    $numero1 = 'n1';
    $numero2 = 'n2';
    $numero3 = 'n3'; 

    $objcalculo = new Calculo();

   $res =  $objcalculo-> SomarNumeros($numero1, $numero2, $numero3);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exemplo_poo.php" method="post">
<label>Numero 1</label>
<input type="text" name="n1" value="<?= $numero1 ?>">
<label>Numero 2</label>
<input type="text" name="n2" value="<?= $numero2 ?>">
<label>Numero 3</label>
<input type="text" name="n3" value="<?= $numero3 ?>">

<button name="btnSomar">Somar</button>

<br><br>

<input disabled value="<?= $res ?>">
</form>
    
</body>
</html>