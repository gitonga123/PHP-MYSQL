<?php 
function binaryTreeCompare($a, $b) {
    if ($a == NULL && $b == NULL) {
      return true;
    }
  if ($a != NULL and $b != NULL) {
      return $a->value == $b->value && binaryTreeCompare($a->left, $b->right) && binaryTreeCompare($a->right, $b->right);
  }

  return false;
}