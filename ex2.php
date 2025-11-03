<?php

    require_once 'ClassExample.php';

    $unidadeMedida = '';

    if(isset($_POST['btnConverter'])){
        $unidadeMedida = $_POST['unidadeMedida'];
        $temperatura = trim($_POST['qtd']);

        $objDAO = new ClassExample();
        $ret = $objDAO->Conversor($unidadeMedida, $temperatura);

        if($ret == 0){
            $msgError = '<div class="msgError">Preencher o campo obrigatório com caracteres númericos!</div>';
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
    <title>Atividade 2</title>
</head>
<body>
    <form action="atividade_2.php" method="POST">
        <label>Selecione uma Unidade de Medida:</label>
        <select name="unidadeMedida">
            <option value="">Selecione</option>
            <option value="1" <?= $unidadeMedida == 1 ? 'selected' : null ?>>Celsius -> Fahrenheit</option>
            <option value="2" <?= $unidadeMedida == 2 ? 'selected' : null ?>>Fahrenheit -> Celsius</option>
        </select>
        <br>
        <label>Quantidade de Temperatura:</label>
        <input type="number" name="qtd" value="<?= isset($temperatura) ? $temperatura : '' ?>">
        <br>
        <button name="btnConverter">CONVERTER</button>
    </form>

    <?php if(isset($ret) && $ret != '' && $ret != 0): ?>
        <hr>
        <span>Resultado da Conversão: <?= $ret ?>°.</span>    
    <?php endif; ?>

    <!-- ========== Validações do PHP! ========== -->
    <span><?= isset($msgError) ? $msgError : null ?></span>
    <!-- ========== Fim das Validações PHP! ========== -->    
</body>
</html>