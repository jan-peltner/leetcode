<?php
class Solution {

    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix($word, $ch) {
        $idx = strpos($word, $ch);
        if ($idx == false) {
            return $word;
        }
        return strrev(substr($word, 0, $idx + 1)) . substr($word, $idx + 1);
    }
}
?>
