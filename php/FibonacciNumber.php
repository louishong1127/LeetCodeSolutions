<?

class Solution {
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        
    }
    
    function fib($s) {
        $arr = [];
        $arr[0] = 0;
        $arr[1] = 1;
        
        for($i = 2; $i <= $s; $i++) {
            $arr[$i] = $arr[$i-1]+$arr[$i-2];  
        }
        return $arr[$s];
    }
}