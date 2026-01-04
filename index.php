<?php
// Dados da Cantina
$nome_aluno = "Aline Neves Dos Santos"; // COLOQUE SEU NOME AQUI 
$data_hoje = date("d/m/Y");

$produtos = [
    ["nome" => "Lasanha à Bolonhesa", "preco" => 45.00],
    ["nome" => "Fettuccine Alfredo", "preco" => 38.00],
    ["nome" => "Vinho Chianti", "preco" => 85.00]
];

$servicos = ["Jantar Presencial", "Delivery", "Eventos Particulares"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cantina Italiana - <?php echo $nome_aluno; ?></title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; }
        .container { background: white; width: 60%; margin: 20px auto; padding: 20px; border-radius: 10px; border-top: 10px solid green; }
        .produto { border-bottom: 1px solid #ddd; padding: 10px; }
        footer { margin-top: 30px; font-weight: bold; color: red; }
    </style>
</head>
<body>

    <div class="container">
        <h1>🇮🇹 Bem-vindo à Cantina Italiana 🇮🇹</h1>
        
        <h2>Nossos Produtos</h2>
        <?php foreach($produtos as $item): ?>
            <div class="produto">
                <strong><?php echo $item['nome']; ?></strong> - R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?>
            </div>
        <?php endforeach; ?>

        <h2>Nossos Serviços</h2>
        <ul>
            <?php foreach($servicos as $servico): ?>
                <li><?php echo $servico; ?></li>
            <?php endforeach; ?>
        </ul>

        <footer>
            <p>Desenvolvido por: <?php echo $nome_aluno; ?></p>
            <p>Data: <?php echo $data_hoje; ?></p>
        </footer>
    </div>

</body>
</html>