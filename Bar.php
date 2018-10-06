<?php


class Bar
{
    public static $bar = 'Foobar';
    public static function barz()
    {
        return self::$bar;
    }
}