<?

class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        if (count($grid) === 0) {
            return 0;
        }
        
        $count = 0;
        for ($i = 0; $i < count($grid); $i++) {
            for ($j = 0; $j < count($grid[$i]); $j++) {
                if ($grid[$i][$j] === '1') {
                    $count++;
                    $this->search($grid, $i, $j, count($grid), count($grid[$i]));
                }
            }    
        }
        
        return $count;
    }
    
    function search(&$grid, $x, $y, $n, $m) {
        if ($grid[$x][$y] !== '1' || $x >= $n || $y >= $m || $x < 0 || $y < 0) {
            return;
        }
        
        $grid[$x][$y] = '2';
        $this->search($grid, $x - 1, $y, $n, $m);
        $this->search($grid, $x + 1, $y, $n, $m);
        $this->search($grid, $x, $y - 1, $n, $m);
        $this->search($grid, $x, $y + 1, $n, $m);
    }
}