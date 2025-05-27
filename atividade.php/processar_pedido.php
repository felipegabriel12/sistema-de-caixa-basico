<?php
$nome = htmlspecialchars($_POST['nomeCliente']);
$produto1 = $_POST['produto1'];
$valor1 = floatval($_POST['valor1']);
$produto2 = $_POST['produto2'];
$valor2 = floatval($_POST['valor2']);
$valorPago = floatval($_POST['valorPago']);
 
$total = $valor1 + $valor2;
$troco = $valorPago - $total;
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nota-fiscal">
        <h2>Nota Fiscal</h2>
        <p><strong>Cliente:</strong> <?php echo $nome; ?></p>
        <p><strong><?php echo $produto1; ?>:</strong> R$ <?php echo number_format($valor1, 2, ',', '.'); ?></p>
        <p><strong><?php echo $produto2; ?>:</strong> R$ <?php echo number_format($valor2, 2, ',', '.'); ?></p>
        <p><strong>Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
        <p><strong>Valor Pago:</strong> R$ <?php echo number_format($valorPago, 2, ',', '.'); ?></p>
        <p><strong>Troco:</strong> R$ <?php echo number_format($troco, 2, ',', '.'); ?></p>
    </div>
</body>
</html>