<?

class Solution {
    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $newColor
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $newColor) {
        if ($image[$sr][$sc] == $newColor) {
            return $image;
        }
        
        $this->search($image, $sr, $sc, $image[$sr][$sc], $newColor);
        return $image;
    }
    
    function search(&$image, $x, $y, $color, $newColor) {
        if ($x < 0 || $y < 0 || $x >= count($image) || $y >= count($image[0]) || $image[$x][$y] != $color) {
            return $image;
        }
        
        $image[$x][$y] = $newColor;
        
        $this->search($image, $x + 1, $y, $color, $newColor);
        $this->search($image, $x, $y + 1, $color, $newColor);
        $this->search($image, $x - 1, $y, $color, $newColor);
        $this->search($image, $x, $y - 1, $color, $newColor);
    }
}