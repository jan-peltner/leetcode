<?php
class Solution
{

  /**
   * @param Integer $n
   * @return String[]
   */

  function generateParenthesis($n)
  {
    if ($n == 0) {
      return [];
    }
    if ($n == 1) {
      return ['()'];
    }
    $parens = [];
    $this->recurse(str_split('()'), $n - 1, $parens);
    return array_unique($parens);
  }
  private function recurse($cur, $remaining, &$parens)
  {
    if ($remaining == 0) {
      array_push($parens, implode($cur));
      return;
    }
    foreach ($cur as $idx => $_) {
      $copy = [...$cur];
      array_splice($copy, $idx + 1, 0, ['(', ')']);
      $this->recurse($copy, $remaining - 1, $parens);
    }
  }
}
