<?php

class Stack
{
    public array $stack;
    public int $limit;
    public function __construct($limit, $stack = [])
    {
        $this->stack = $stack;
        $this->limit = $limit;
    }
    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "stack over load";
        }
    }
    public function pop() {
        if (count($this->stack)==0) {
            echo "Stack is empty";
        } else {
            return array_shift($this->stack);

        }
    }
}