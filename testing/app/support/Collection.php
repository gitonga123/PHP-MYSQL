<?php

namespace App\Support;

use IteratorAggregate;
use ArrayIterator;

/**
 * Collection Class - i.e Similar to Laravel Collection Classes
 */
class Collection implements IteratorAggregate
{
    protected $items = [];

    public function get(): array
    {
        return $this->items;
    }

    public function set(array $items)
    {
        return $this->items = $items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    public function merge(Collection $collection)
    {
        return $this->add($collection->get());
    }

    public function add(array $items)
    {
        $this->items = array_merge($this->items, $items);
    }

    public function toJson()
    {
        return json_encode($this->items);
    }
}
