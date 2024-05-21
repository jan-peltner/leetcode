<?php
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[][]
   */
  private array $nums;
  private int $length;
  private array $out = array();

  function backtrack($start, $cur, $n)
  {
    if (count($cur) == $n) {
      array_push($this->out, $cur);
      return;
    }
    for ($i = $start; $i < $this->length; ++$i) {
      array_push($cur, $this->nums[$i]);
      $this->backtrack($i + 1, $cur, $n);
      array_pop($cur);
    }
  }

  function subsets($nums)
  {
    $this->nums = $nums;
    $this->length = count($nums);

    for ($i = 0; $i < $this->length + 1; ++$i) {
      $this->backtrack(0, [], $i);
    }
    return $this->out;
  }
}
