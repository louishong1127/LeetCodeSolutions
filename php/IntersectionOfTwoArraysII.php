<?

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $result = [];
        
        asort($nums1);
        asort($nums2);
        
        $long = [];
        $short = [];
        if (count($nums1) > count($nums2)) {
            $long = $nums1;
            $short = $nums2;
        } else {
            $long = $nums2;
            $short = $nums1;
        }
        
        for ($i = 0; $i < count($short); $i++) {
            $index = array_search($short[$i], $long);
            if ($index !== false) {
                unset($long[$index]);
                array_push($result, $short[$i]);
            }
        }
        
        return $result;
    }
}