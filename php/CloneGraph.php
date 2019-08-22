<?

/*
// Definition for a Node.
class Node {
    public $val;
    public $neighbors;

    @param Integer $val 
    @param list<Node> $neighbors 
    function __construct($val, $neighbors) {
        $this->val = $val;
        $this->neighbors = $neighbors;
    }
}
*/
class Solution {

    /**
     * @param Node $node
     * @return Node
     */
    function cloneGraph($node) {
        $queue = [];
        $records = [];
        
        if ($node === null) {
            return null;
        }
        
        $queue[] = $node;
        $records[$node->val] = $node;
        
        while (!empty($queue)) {
            $n = array_pop($queue);
            foreach ($neighbor as $n->neighbors) {
                if (!array_key_exists($neighbor->val, $records)) {
                    $records[$neighbor->val] = $neighbor;
                    array_push($queue, $neighbor);
                }
                
                array_push($records[$n->val]->neighbors, $records[$neighbor]);
            }
        }
        
        return $node;
    }
}