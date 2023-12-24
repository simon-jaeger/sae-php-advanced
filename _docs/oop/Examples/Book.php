<?php

class Book {
  public int $page = 0;
  public int $total;

  function __construct($total) {
    $this->total = $total;
  }

  function next() {
    if ($this->page < $this->total)
      $this->page++;
  }

  function prev() {
    if ($this->page > 0)
      $this->page--;
  }
}
