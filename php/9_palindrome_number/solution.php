<?php
class Solution
{

	/**
	 * @param Integer $x
	 * @return Boolean
	 */
	function isPalindrome($x)
	{
		$arr = str_split((string)$x);
		$rev = array_reverse($arr);
		return $arr == $rev;
	}
}
