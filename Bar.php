<?php


class Bar
{
    public static $bar = 'Foobar';
    public function bar()
    {
        echo self::$bar;
        return $this;
    }

    public function baz()
    {
        echo ' food';
    }
}