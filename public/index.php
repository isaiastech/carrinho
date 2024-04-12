<?php
require '../vendor/autoload.php';

$products = require'../app/helpers/products.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carinho de compras</title>
</head>
<body>
    <div class="container">
        <ul>
            <?php foreach ($products as $index => $product): ?>
               <li><?php echo $product['name'] ?></li>
            <?php endforeach;?>
        </ul>
    </div>
  
</body>
</html>
