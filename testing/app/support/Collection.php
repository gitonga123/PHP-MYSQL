<?php

namespace App\Support;

/**
 * Collection Class - i.e Similar to Laravel Collection Classes
 */
class Collection
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
}
