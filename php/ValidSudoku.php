<?

class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        return $this->isRowValid($board) && $this->isColumnValid($board) && $this->isRectValid($board);
    }
    
    function isRowValid($board) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if ($board[$i][$j] !== '.') {
                    $index = array_search($board[$i][$j], $board[$i]);
                    if ($index !== false && $index !== $j) {
                        return false;
                    }
                }   
            }
        }
        
        return true;
    }
    
    function isColumnValid($board) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if ($board[$j][$i] !== '.') {
                    for ($k = 0; $k < 9; $k++) {
                        if ($board[$j][$i] === $board[$k][$i] && $k !== $j) {
                            return false;
                        }
                    }           
                }  
            }       
        }
        
        return true;
    }
    
    function isRectValid($board) {
        for($i = 2; $i <= 8; $i += 3) {
            for($j = 2; $j <= 8; $j += 3) {
                $v = [];
                for ($ii = 0; $ii < 3; $ii++) {
                    for ($jj = 0; $jj < 3; $jj++) {
                        if ($board[$i - $ii][$j - $jj] !== '.') {
                            array_push($v, $board[$i - $ii][$j - $jj]);
                        }
                    }    
                }
                if (count($v) !== count(array_unique($v))){
                    return false;
                }
            }
        }
        
        return true;
    }
}