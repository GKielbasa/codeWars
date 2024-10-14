<?php
function basicOp($op, $val1, $val2)
{
  switch ($op) {
    case '+':
        return $val1 + $val2;
        break;

    case '-':
        return $val1 - $val2;
        break;
    case '*':
        return $val1 * $val2;
        break;
    case '/':
        return $val2 === 0 ? 'division by 0 !!!!!' : ($val1 / $val2);
        break;
    
    default:
        return 'not allowed operation';
        break;
  }
}