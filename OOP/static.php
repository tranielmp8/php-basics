<?php

// class MathUtility
// {
//   public $pi = 3.14;
// }

// $mathUtil1 = new MathUtility();

// echo $mathUtil1->pi . '<br/>';
// echo $mathUtil1->pi * 3 . '<br/>';


// now use static
class MathUtility
{
  public static $pi = 3.14;

  public static function add(...$numbs)
  {
    return array_sum($numbs);
  }
}

// we would use the class name with :: afterwards and call the attribute
echo MathUtility::$pi . '<br/>';
echo MathUtility::$pi * 3 . '<br/>';
// notice not a variable name so no need for $ before add
echo MathUtility::add(1, 2, 3, 4, 5) . '<br />';
