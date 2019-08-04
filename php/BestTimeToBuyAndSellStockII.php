<?

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $total = 0;
        $last = null;
        $current = null;
        
        foreach ($prices as $i => $price) {
            if ($current === null) {
                $current = $price;
            }
            
            if ($last > $price) {
                if ($current < $last) {
                    $total += ($last - $current);
                    $current = null;
                }
                
                $current = $price;
            }
            
            if (($i + 1) === count($prices)) {
                if ($current !== null) {
                    $diff = $price - $current;
                    if ($diff > 0) {
                        $total += $diff;
                    }
                }
            }
            
    
            $last = $price;
        }
        
        return $total;
    }
}