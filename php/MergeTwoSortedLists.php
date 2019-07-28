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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $result = new ListNode(0);
        $n = $result;
        
        while ($l1 !== null && $l2 !== null) {
            if ($l1->val > $l2->val) {
                $n->next = $l2;
                $l2 = $l2->next;
            } else {
                $n->next = $l1;
                $l1 = $l1->next;
            }
            
            $n = $n->next;
        }
        
        if ($l1 !== null) {
            $n->next = $l1;
        }
        
        if ($l2 !== null) {
            $n->next = $l2;
        }
        
        return $result->next;
    }
}