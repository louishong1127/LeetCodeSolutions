<?

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $init = 1;
        $a = [];
        for ($i = 0; $i < $numRows; $i++) {
            if (count($a) === 0) {
                $a[$i] = [$init];
            } else {
                for ($j = 0;$j < $i + 1; $j++) {
                    $a[$i][$j] = $a[$i - 1][$j - 1] + $a[$i - 1][$j];
                }
            }
        }
        
        return $a;
    }
}