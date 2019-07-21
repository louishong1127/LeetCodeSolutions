<?

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $prev = null;
        while ($head != null) {
            $nextTemp = $head->next;
            $head->next = $prev;
            $prev = $head;
            $head = $nextTemp;
        }
        return $prev;
    }
}