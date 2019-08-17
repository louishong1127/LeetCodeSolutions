<?

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $left = ['[', '(', '{'];
        $right = [']', ')', '}'];
        
        $stack = [];
        
        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $left)) {
                array_push($stack, $s[$i]);
            } else {
                if (count($stack) === 0) {
                    return false;
                }
                
                $last = $stack[count($stack) - 1];
                $indexOfRight = array_search($s[$i], $right);
                if ($indexOfRight === -1) {
                    return false;
                }
                
                if ($last !== $left[$indexOfRight]) {
                    return false;
                }
                
                array_pop($stack);
            }
        }
        
        return count($stack) === 0;
    }
}