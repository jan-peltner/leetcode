<?php

class Solution
{
  function sweepMax($grid, $r, $c)
  {
    $max = 1;
    for ($i = $r - 1; $i < $r + 2; ++$i) {
      for ($j = $c - 1; $j < $c + 2; ++$j) {
        $max = max($max, $grid[$i][$j]);
      }
    }
    return $max;
  }
  /**
   * @param Integer[][] $grid
   * @return Integer[][]
   */
  function largestLocal($grid)
  {
    $out = [];
    $n = count($grid);
    $n_out = $n - 2;
    for ($i = 1; $i < 1 + $n_out; ++$i) {
      array_push($out, []);
      for ($j = 1; $j < 1 + $n_out; ++$j) {
        array_push($out[$i - 1], $this->sweepMax($grid, $i, $j));
      }
    }
    return $out;
  }
}
