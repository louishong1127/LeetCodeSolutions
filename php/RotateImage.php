<?

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $temp = null;
        for ($i = 0; $i < floor(count($matrix) / 2); $i++) {
            $temp = $matrix[$i];
            $matrix[$i] = $matrix[count($matrix) - 1 - $i];
            $matrix[count($matrix) - 1 - $i] = $temp;
        }
        
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = $i; $j < count($matrix[$i]); $j++) {
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
            }   
        }
    }
}