<?

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numSquares($n) {
        while ($n % 4 === 0) {
            $n /= 4;
        }
        
        if ($n % 8 === 7) {
            return 4;
        }
        
        if (pow((int)sqrt($n), 2) === $n) {
            return 1;
        }
        
        $i = 1;
        while ($i * $i <= $n) {
            $j = sqrt($n - ($i * $i));
            if (floor($j) == $j) {
                return 2;
            }
            
            $i++;
        }
        
        return 3;
    }
}