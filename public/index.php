<?php
session_start();
require '../vendor/autoload.php';

use app\class\Cart;
use app\class\CartProducts;

$cartProducts = new CartProducts(new Cart);
$products = require'../app/helpers/products.php';

$cart = new Cart;
// $cart->quantity(6, 0);
$productsInCart = $cart->cart();

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
        <h3>Cart: <?php echo count($productsInCart)?> |<a href="cart.php"> Go to Cart</a></h3>
        <ul>
            <?php foreach ($products as $index => $product): ?>
               <li><?php echo $product['name'] ?> | R$ <?php echo number_format( $product['price'],2,',','.')?></li><a href="add.php?id=<?php echo $index?>">Add to cart</a>
            <?php endforeach;?>
        </ul>
    </div>
  
</body>
</html>
