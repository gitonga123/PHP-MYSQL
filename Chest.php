<?php

/**
 * Check Class
 */
class Chest
{
    protected $lock;
    protected $isClosed;
    public function __construct(Lock $lock)
    {
        $this->lock = $lock;
    }
    public function close($lock = true)
    {
        if ($lock === true) {
             $this->lock->lock();
        }

        $this->isClosed = true;

        echo "Chest Closed";
    }

    public function isClosed()
    {
        return $this->isClosed;
    }

    public function open()
    {
        if ($this->lock->isLocked()) {
            $this->lock->unLock();
        }

        $this->isClosed = false;

        echo "Chest Open";
    }
}
