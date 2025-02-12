<?php

abstract class Shape
{
  protected $name;

  abstract public function calculateArea();

  public function __construct($name)
  {
    $this->name = $name;
  }

  // concreate methods (if you have an abstract method your class must have abstarct in front of the class)
  public function getName()
  {
    return $this->name;
  }
}


class Circle extends Shape
{
  private $radius;

  public function __construct($name, $radius)
  {
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct($name, $width, $height)
  {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}

$circle1 = new Circle('Circle', 2);
$rect1 = new Rectangle('Rectangle', 4, 6);

echo $circle1->getName() . ' Area: ' . $circle1->calculateArea() . '<br/>';
echo $rect1->getName() . ' Area: ' . $rect1->calculateArea() . '<br/>';
