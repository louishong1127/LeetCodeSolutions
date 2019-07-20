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
    function swapPairs($head) {        
        $cur = $head;
        $next = $head->next;
        
        while ($cur !== null && $next !== null) {
            $temp = $cur->val;
            $cur->val = $next->val;
            $next->val = $temp;
            
            $cur = $next->next;
            $next = $next->next->next;
        }
        
        return $head;
    }
}