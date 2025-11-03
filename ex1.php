<?php

    require_once 'ClassExample.php';

    $gas = '';

    if(isset($_POST['btnEnviar'])){
        $litros = trim($_POST['litros']);
        $gas = $_POST['gas'];

        // DAO: Data Access Object!
        $objDAO = new ClassExample();
        $ret = $objDAO->CalcularCombustivel($litros, $gas);

        if($ret == 0){
            $msgError = '<div class="msgError">Preencher o campo obrigatório com caracteres númericos!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Exemplo</title>
</head>
<body>
    <form action="atividade_1.php" method="POST">
        <label>Digite a quantidade de Litros:</label>
        <input type="number" name="litros" value="<?= isset($litros) ? $litros : '' ?>">
        
        <label>Selecione o Combustível:</label>
        <select name="gas">
            <option value="">Selecione</option>
            <option value="1" <?= $gas == 1 ? 'selected' : '' ?>>Gasolina</option>
            <option value="2" <?= $gas == 2 ? 'selected' : '' ?>>Etanol</option>
            <option value="3" <?= $gas == 3 ? 'selected' : '' ?>>Diesel</option>
        </select>

        <button name="btnEnviar">Enviar</button>
    </form>

    <!-- ========== Validações do PHP! ========== -->
    <span><?= isset($msgError) ? $msgError : null ?></span>
    <!-- ========== Fim das Validações PHP! ========== -->
     
    <?php if(isset($ret) && $ret != '' && $ret != 0): ?>
        <hr>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= number_format($ret, 2, ',', '.') ?>">
    <?php endif; ?>
</body>
</html>