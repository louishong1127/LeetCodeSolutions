<?

class Solution {

    /**
     * @param Integer[] $T
     * @return Integer[]
     */
    function dailyTemperatures($T) {
        $result = [];
        
        foreach ($T as $index => $temp) {
            $next = $index + 1;
            while($next < count($T) && $T[$next] <= $temp) {
                $next++;
            }
            
            if ($next === count($T)) {
                $result[$index] = 0;
            } else {
                $result[$index] = $next - $index;
            }
        }
        
        return $result;
    }
}