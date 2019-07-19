<?

class ReverseString {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        for($i = 0; $i < floor(count($s)/2); $i++) {
            $t = $s[$i];
            $s[$i] = $s[count($s) - 1 - $i];
            $s[count($s) - $i - 1] = $t;
        }
        
        return $s;
    }
}