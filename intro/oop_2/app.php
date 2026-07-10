<?php

require "Product.php";
require "Cart.php";

$cart = new Cart();

$cart->add(new Product("hat", 20.00));
$cart->add(new Product("shirt", 30.00));
$cart->add(new Product("sunglasses", 10.00));

//$cart->remove(1);
//$cart->clear();

print('The cart contains ' . $cart->size() . ' products.' . "\n");
print('The total cost is: ' . $cart->total());
