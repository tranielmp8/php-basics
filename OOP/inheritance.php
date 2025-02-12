<?php

# classes are blueprints of an object, Capitalize usually and Pascal case if more than one word
# Getters and Setters;
class User
{
  public $name;
  public $email;
  protected $status = 'active';


  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . 'The user logged in <br/>';
  }
}

class Admin extends User
{
  public $level;

  // create constructor
  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email); // calling the parent constructor method
  }

  public function getStatus()
  {
    echo $this->status;
  }
}

$admin1 = new Admin('Naruto', 'naruto@gmail.com', 5);
$admin1->login();
var_dump($admin1);
echo '<br/>';

echo $admin1->name . '<br/>';
echo $admin1->email . '<br/>';
echo $admin1->level . '<br/>';
$admin1->login();
echo '<br/>';
$admin1->getStatus();
