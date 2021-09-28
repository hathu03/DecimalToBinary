<?php

class ReadingList
{
    protected array $stack;
    protected int $limit;

//khoi tao
    public function __construct(int $limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item): void
    {
        // kiem tra mang count có bao nhieu phan tu
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {

        if ($this->isEmpty()) {
            //ktra mang rong hay khong
            throw new RunTimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}