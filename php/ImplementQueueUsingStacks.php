<?

class MyQueue {
    private $queue = [];
    
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        
    }
  
    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_unshift($this->queue, $x);
    }
  
    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        if ($this->empty()) {
            return -1;
        }
        
        return array_pop($this->queue);
    }
  
    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        return end($this->queue);
    }
  
    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return empty($this->queue);
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */