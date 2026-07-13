<?php

class Cart {
  public array $products = [];

  function add(Product $product) {
    array_push($this->products, $product);
  }

  function remove(int $index) {
    array_splice($this->products, $index, 1);
  }

  function clear() {
    $this->products = [];
  }

  function size() {
    return count($this->products);
  }

  function total() {
    $result = 0;
    foreach ($this->products as $product) {
      $result += $product->price;
    }
    return $result;
  }
}
