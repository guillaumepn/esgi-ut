<?php

class Calculatrice
{

  public function add($a, $b) {
    return $a + $b;
  }

  public function sub($a, $b) {
    return $a - $b;
  }

  public function mul($a, $b) {
    return $a * $b;
  }

  public function div($a, $b) {
    return $a / $b;
  }

  public function avg($tab) {
    return array_sum($tab) / count($tab);
  }

}
