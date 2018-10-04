<?php
/**
 * Created by PhpStorm.
 * User: Ann Mutwiri
 * Date: 04-Oct-18
 * Time: 8:19 AM
 */

class Bird
{
    protected $canFly;
    protected $legCount;
    public function __construct(bool $canFly, int $legCount)
    {
        $this->canFly = $canFly;
        $this->legCount = $legCount;
    }

    /**
     * @return int */
    public function getLegCount(): int
    {
        return $this->legCount;
    }

    /**
     * @return bool
     */
    public function isCanFly(): bool
    {
        return $this->canFly;
    }
}