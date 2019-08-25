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
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $result = [];
        $stack = [];
        
        while(!empty($stack) || $root) {
            if ($root !== null) {
                array_push($stack, $root);
                $root = $root->left;
            } else {
                $n = array_pop($stack);
                array_push($result, $n->val);
                $root = $n->right;
            }
        }
        
        return $result;
    }
}
