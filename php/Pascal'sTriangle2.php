<?

class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $init = 1;
        $a = [];
        for ($i = 0; $i <= $rowIndex; $i++) {
            if (count($a) === 0) {
                $a[$i] = [$init];
            } else {
                for ($j = 0;$j < $i + 1; $j++) {
                    $a[$i][$j] = $a[$i - 1][$j - 1] + $a[$i - 1][$j];
                }
            }
        }
        
        return $a[$rowIndex];
    }
}