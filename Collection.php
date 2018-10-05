<?php
/**
 * Created by PhpStorm.
 * User: Ann Mutwiri
 * Date: 05-Oct-18
 * Time: 8:06 AM
 */

class Collection implements Countable, JsonSerializable
{
    protected $items = [];

    public function add(string $value): void
    {
        $this->items[] = $value;
    }

    /**
     * @param array $items,
     * @param $key
     */
    public function setItems($key, $items): void
    {
        $this->items[$key] = $items;
    }

    public function jsonSerialize()
    {
        return json_encode($this->items);
    }

    public function count()
    {
        // TODO: Implement count() method.
        return count($this->items);
    }

    public function __set($key, $value)
    {
        $this->setItems($key, $value);
    }

    public function all()
    {
        return $this->items;
    }

    public function getItems($key)
    {
        return array_key_exists($key, $this->items) ? $this->items[$key] : null;
    }

    public function __get($key)
    {
       return $this->getItems($key);
    }
}