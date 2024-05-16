<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{

  /**
   * @param TreeNode $root
   * @return Boolean
   */
  private function recurse($node)
  {
    if ($node->val == 2) {
      return $this->recurse($node->left) || $this->recurse($node->right);
    }
    if ($node->val == 3) {
      return $this->recurse($node->left) && $this->recurse($node->right);
    }
    return boolval($node->val);
  }
  function evaluateTree($root)
  {
    return $this->recurse($root);
  }
}
