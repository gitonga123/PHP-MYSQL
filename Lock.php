<?php

/**
 * Check Class
 */
class Lock
{
    protected $isLocked;
    public function __construct()
    {
    }

    public function lock()
    {
        $this->isLocked = true;
    }

    public function isLocked()
    {
        return $this->isLocked;
    }

    public function unLock()
    {
        $this->isLocked = false;
    }
}
