<?php
session_start();
require '../vendor/autoload.php';
use app\class\Cart;
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$cart = new Cart;
$cart->add($id);

header('Location:http://localhost/code/OB-carrinho/public/');
?>