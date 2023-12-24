<?php

namespace _docs\_oop\Examples;
class Coin {
  public bool $isHeads = false;

  function flip() {
    $this->isHeads = random_int(0, 1) === 1;
  }
}
