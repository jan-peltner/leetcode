<?php
class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  function twoSum($nums, $target) {
      $map = array();
      foreach($nums as $i => $v) {
          $map[$v] = $i;
      };
      foreach($nums as $i => $v) {
          $needle = $target - $v;
          if (array_key_exists($needle, $map) && $i != $map[$needle]) {
              return array($map[$needle], $i);
          };
      };
  }
}
?>