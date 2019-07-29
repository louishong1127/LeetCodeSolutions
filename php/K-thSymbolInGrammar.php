<?

class Solution {

    /**
     * @param Integer $N
     * @param Integer $K
     * @return Integer
     */
    function kthGrammar($N, $K) {
        if ($N === 1) {
            return 0;
        }
        if ($K % 2 === 0) {
            return $this->kthGrammar($N - 1, $K / 2) === 0 ? 1 : 0;
        } else {
            return $this->kthGrammar($N - 1, ($K + 1) / 2) === 0 ? 0 : 1;
        }
    }
}