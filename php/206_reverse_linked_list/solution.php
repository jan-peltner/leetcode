<? php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if ($head->val == null && $head->next == null) {
            return $head;
        }
        $arr = array();
        $node = $head;
        while($node != null) {
            array_push($arr, $node->val);
            $node = $node->next;
        }
        $rev = array_reverse($arr);
        $newHead = new ListNode();
        $cur = $newHead;
        $old;
        foreach($rev as $idx => $val) {
            if ($idx != 0) {   
                $cur = new ListNode();
                $old->next = $cur; 
            } 
                $cur->val = $val;
                $old = $cur;
        }
        return $newHead;
    }
}
