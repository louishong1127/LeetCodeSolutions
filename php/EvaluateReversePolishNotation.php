<?

class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $stack = [];
        
        for ($i = 0;$i < count($tokens); $i++) {
            if (!in_array($tokens[$i], ['+', '-', '*', '/'], true)) {
                array_push($stack, $tokens[$i]);
            } else {
                $num1 = end($stack);
                array_pop($stack);
                $num2 = end($stack);
                array_pop($stack);
                                
                if ($tokens[$i] === '+') {
                    array_push($stack, ($num1 + $num2));
                } else if ($tokens[$i] === '-') {
                    array_push($stack, ($num2 - $num1));
                } else if ($tokens[$i] === '*') {
                    array_push($stack, $num1 * $num2);
                } else if ($tokens[$i] === '/') {
                    array_push($stack, (int)($num2 / $num1));
                }
            }
        }
        
        return $stack[0];
    }
}