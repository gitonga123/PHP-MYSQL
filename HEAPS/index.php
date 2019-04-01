<?php
require_once 'PriQueue.php';

$objPQ = new PriQueue();

$objPQ->insert('A', 3);
$objPQ->insert('B', 6);
$objPQ->insert('C', 1);
$objPQ->insert('D', 2);


echo "\nCOUNT->" . $objPQ->count() . "<BR>";
$objPQ->setExtractFlags(PriQueue::EXTR_BOTH);

//Go to TOP 
$objPQ->top();

while ($objPQ->valid()) {
  print_r($objPQ->current());
  echo "<BR>";
  $objPQ->next();
}

 