<?

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {
    
    /**
     * @param Integer $n
     * @return TreeNode[]
     */
    function generateTrees($n) {
        if ($n === 0) {
            return [];
        }
        return $this->helper(1, $n);
    }
    
    function helper($start, $end) {
        $result = [];
        
        if ($start > $end) {
            array_push($result, null);
            return $result;
        }
            
        for ($i = $start; $i <= $end; $i++) {
            $leftTree = $this->helper($start, $i - 1);
            $rightTree = $this->helper($i + 1, $end);
            
            foreach ($leftTree as $leftNode) {
                foreach ($rightTree as $rightNode) {
                    $root = new TreeNode($i);
                    $root->left = $leftNode;
                    $root->right = $rightNode;
                    array_push($result, $root);
                }   
            }
        }
        
        return $result;
    }
}