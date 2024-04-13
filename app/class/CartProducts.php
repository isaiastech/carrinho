<?php

namespace app\class;
use app\interfaces\CartInterface;

class CartProducts
{
    
    public function __construct(private CartInterface $cartInterface)
    {
        
    }

    public function products()
    {
        $productsInCart = $this-> cartInterface->cart();
        $produt  = require'../helpers/products.php';
        $products = [];
        $total = 0;

        foreach($productsInCart as $productId => $quantity)
        { 
            $produt = $productsInDatabase[$productId];
            $products[] = [
                'id' => $productId,
                'product' => $produt [$productId]['name'],
                'price' => $produt [$productId]['price'],
                'qty' => $quantity,
                'subtotal' => $quantity * $produt [$productId]['price']

            ];
            $total += $quantity * $produt['price'];

        }

        return [
            'products' => $products,
            'total'    => $total
        ];


    }
}