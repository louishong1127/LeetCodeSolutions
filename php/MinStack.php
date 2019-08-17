<?

class MinStack {
    private $stack = [];
    
    /**
     * initialize your data structure here.
     */
    function __construct() {
        
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->stack, $x);
    }
  
    /**
     * @return NULL
     */
    function pop() {
        if (count($this->stack) > 0) {
            array_pop($this->stack);
        }
    }
  
    /**
     * @return Integer
     */
    function top() {
        if (count($this->stack) > 0) {
            return $this->stack[count($this->stack) - 1];   
        }
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return min($this->stack);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */