<?

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];
        
        foreach ($nums as $index => $num) {
            $remain = $target - $num;
            unset($nums[$index]);

            $indexRemain = array_search($remain, $nums);
            if ($indexRemain !== false && $index != $indexRemain) {
                return [$index, $indexRemain];
            }
        }
        
        return $result;
    }
}