<?php

    require_once 'ClassExample.php';

    if(isset($_POST['btnCalcular'])){
        $meses = trim($_POST['meses']);
        $ganhos = trim($_POST['ganhos']);
        $lucro = trim($_POST['lucro']);
        $perda = trim($_POST['perda']);

        $objDAO = new ClassExample();
        $ret = $objDAO->CalcularSalario($meses, $ganhos, $lucro, $perda);

        if($ret == 0){
            $msgError = '<div class="msgError"><hr>Preencher o campo obrigatório com caracteres númericos!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Atividade 3</title>
</head>
<body>
    <form action="atividade_3.php" method="POST">
        <label>Meses trabalhados:</label>
        <input type="text" name="meses" value="<?= isset($meses) ? $meses : '' ?>">
        <br>
        <label>Ganho Médio Mensal:</label>
        <input type="text" name="ganhos" value="<?= isset($ganhos) ? $ganhos : '' ?>">
        <br>
        <label>Percentual de Lucro Total (%):</label>
        <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>">
        <br>
        <label>Percentual de Perda Total (%):</label>
        <input type="text" name="perda" value="<?= isset($perda) ? $perda : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <?php if(isset($ret) && $ret != '' && $ret != 0): ?>
        <hr>
        <span>Resultado Final: R$ <?= $ret ?>.</span>
    <?php endif; ?>

    <!-- ========== Validações do PHP! ========== -->
    <span><?= isset($msgError) ? $msgError : null ?></span>
    <!-- ========== Fim das Validações PHP! ========== -->    
</body>
</html>