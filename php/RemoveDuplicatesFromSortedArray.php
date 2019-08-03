<?

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $temp = null;
        foreach ($nums as $index => $num) { 
            if ($temp !== null && $temp == $num) {
                unset($nums[$index]);
            }
            
            $temp = $num;
        }
        
        return count($nums);
    }
}