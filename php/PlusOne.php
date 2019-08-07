<?

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $add = false;
        $i = (count($digits) - 1);
        while ($i !== -1) {            
            if ($i === (count($digits) - 1) || $add) {
                if ($digits[$i] + 1 !== 10) {
                    $digits[$i] += 1;
                    
                    break;
                } else {
                    $digits[$i] = 0;
                    $add = true;
                }
            }
            
            $i--;
            
            if ($add && $i === -1) {
                array_unshift($digits, 1);
            }
        }
        
        return $digits;
    }
}