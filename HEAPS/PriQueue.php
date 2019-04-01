<?php

class PriQueue extends SplPriorityQueue
{
  public function compare($priority1, $priority2)
  {
    if ($priority1 === $priority1) return 0;
    // in ascending order of priority, a lower value
    // means higher priority
    return ($priority1 < $priority1) ? 1 : -1;
  }
}
