<?php

# classes are blueprints of an object, Capitalize usually and Pascal case if more than one word
class User
{
  public $name;
  public $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . 'The user logged in';
  }
}

// instantiate a new object; -- since we created a constructor need to fill in params
$user1 = new User('kakashi', 'kakashi@gmail.com');



$user1->login();

var_dump($user1);

echo '<br />';

class Car
{
  public $make;
  public $model;
  public $year;

  public function __construct($make, $model, $year)
  {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
  }

  public function start()
  {
    echo $this->make . ' Has started up';
  }
}

$car1 = new Car('Kia', 'Sorento', 2023);
$car1->start();
echo '<br/>';
var_dump($car1);
