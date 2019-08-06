<?

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        return array_search(1, array_count_values($nums));
//         $result = 0;
        
//         for ($i = 0; $i < count($nums); $i++) {
//             $result ^= $nums[$i];
//         }
        
//         return $result;
    }
}