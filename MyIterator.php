<?php
class MyIterator implements \Iterator
{
    private $position = 0;

    private $products = [
        "Svekla", "Seledka", "Karoplya", "Luk", "Konfeti", "Muka", "Sigareti", "Snikers"
    ];

    public function __construct()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->products[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->products[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function prev()
    {
        if (isset($this->products[$this->position - 1])) {
            return $this->products[$this->position - 1];
        }
    }
}