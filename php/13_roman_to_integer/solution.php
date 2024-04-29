<?php
class Solution {
    private $numerals = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );
    private int $total = 0;
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
      $arr = str_split($s);
      for ($i = 0; $i < count($arr); ++$i) {
        $cur = $this->numerals[$arr[$i]];
        $next = $i + 1 < count($arr) ? $this->numerals[$arr[$i + 1]] : null;
        if ($next != null && $next > $cur) {
            $this->total -= $cur;
        } else {
            $this->total += $cur;
        }
      };
      return $this->total;
    }
}
?>