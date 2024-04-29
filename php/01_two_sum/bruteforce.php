<?php
    class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
      function twoSum($nums, $target) {
          foreach ($nums as $i => $iv) {
              foreach($nums as $j => $jv) {
                  if ($i == $j) continue;
                  if ($iv + $jv == $target) {
                      return array($i, $j);
                  }
              };
          };
      }
    }
?>