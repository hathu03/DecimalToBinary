<?php

class Patient
{
    public $name;
    public $code;
    public $next;

    public function __construct($name, $code, $next)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = $next;
    }

    function readNode()
    {
        return 'Name: ' . $this->name . 'Code: ' . $this->code;
    }
}