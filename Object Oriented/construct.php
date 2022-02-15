<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $lastName;
 

 public function __construct($name,$lastName) {
    echo "your name ".$name ." ". $lastName ;
  }
}
$apple = new Fruit("ouail","agzenay");

?>
 
</body>
</html>