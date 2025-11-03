<?php

require_once  'Calculo.php';

$n1 = '';
$n2 = '';
$res = '';

if(isset($_POST['btnCalcular'])){
$n1 = $_POST['$n1'];
$n2 = $_POST['$n2'];
$op = $_POST['operacao'];

$objcalc = new Calculo ();

  $res = $objcalc-> CalcularCalculadora($n1, $n2, $op);

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
    <form action="calculadora_poo.php" method="post">
<label>Numero 1</label>
<input type="text" name="$n1" value="<?= $n1 ?>">

<select name="operacao">


<option value="x">Multiplicar</option>
<option value="/">Dividir</option>
<option value="+">Somar</option>
<option value="-">Subtrair</option>


</select>

<label>Numero 2</label>
<input type="text" name="$n2" value="<?= $n2 ?>">

<button name="btnCalcular"> Calcular</button>

<input disabled value="<?= $res ?>">



    </form>
    
</body>
</html>