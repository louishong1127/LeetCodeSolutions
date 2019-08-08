<?

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        if (!in_array(0, $nums) || count($nums) === 0) {
            return $nums;
        }
        
        foreach ($nums as $index => $num) {
            if ($num === 0) {
                unset($nums[$index]);
                $nums[] = 0;
            }
        }
        
        return $nums;
    }
}