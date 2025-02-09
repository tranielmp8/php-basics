<?php
// scope of this variable is Global because it is outside of methods, functions or etc.
// $name = 'Alice';

# Global scope cannot be used as local scope unless you define it inside the function
// function sayHello()
// {
//   # echo 'Hello ' . $name; //cannot pass global scope as local scope variable unless you define it as global inside the function see below

//   global $name;
//   echo 'Hello' . $name . '! <br />';
// }

// sayHello();

# -----------------------------------------------
# -----------------------------------------------

// $narutoName = 'Kakashi';

// function sayHello()
// {
//   global $narutoName;
//   echo 'Hello ' . $narutoName . '! <br />';
//   $narutoName = 'Naruto';
//   echo 'Name is now ' . $narutoName . '! lets go outside the function and echo the name now <br/>';
// }

// echo 'narutoName first started out as' . $narutoName . '<br/>';

// echo 'run function sayHello() <br/>';
// sayHello();

// echo 'narutoName is now: ' . $narutoName . '<br/>';

# testing local variables outside of scope
function sayGoodbye()
{
  $names = ['Jack', 'Jill'];
  echo "$names[0]";
}

sayGoodbye();
echo $names[0]; # cannot do this because it is outside the scope of the function