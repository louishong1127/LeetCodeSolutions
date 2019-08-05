<?

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        if ($k === 0 || count($nums) <= 0) {
            return $nums;
        }
        
        $count = fmod($k, count($nums));
        for ($i = 0; $i < count($nums) - $count; $i++) {
            $temp = $nums[$i];
            array_push($nums, $temp);
            unset($nums[$i]);
        }
        
        return $nums;
    }
}