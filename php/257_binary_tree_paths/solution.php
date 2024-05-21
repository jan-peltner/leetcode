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
   * @return String[]
   */
  private array $paths = array();

  function backtrack($node, $path)
  {
    $path = $path . "$node->val";
    if ($node->left == null && $node->right == null) {
      array_push($this->paths, $path);
      return;
    }
    if ($node->left != null) {
      $this->backtrack($node->left, $path . "->");
    }
    if ($node->right != null) {
      $this->backtrack($node->right, $path . "->");
    }
  }
  function binaryTreePaths($root)
  {
    $this->backtrack($root, "");
    return $this->paths;
  }
}
