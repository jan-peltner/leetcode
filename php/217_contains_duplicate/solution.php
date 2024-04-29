<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        return count(array_unique($nums)) < count($nums);
    }
}
?>