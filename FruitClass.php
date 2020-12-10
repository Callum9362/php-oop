<?php

class Fruit {
  
  //Properties
  public $name;
  public $color;
  
  //Constructor 
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  
  //Public method that belongs to the class 
  public function intro() {
    return "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

  // A new class called Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
  public function message() {
    return "Am I a fruit or a berry? ";
  }
}


// Here we call a new instance of the strawberry class and pass in the data values
$strawberry = new Strawberry("Strawberry", "red");
//We pull through its own function within the classs.
echo $strawberry->message();
echo "<br>";
// But we also pull in the intro method from the Fruit class using inheritance. 
echo $strawberry->intro();
echo "<br>";

?>