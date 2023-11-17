<?php
// 1- somerar is 16
// 2- null
// 3- true

//1-
function fibonacci($n) {
    if ($n == 0 || $n == 1) {
      return $n;
    } else {
      return fibonacci($n - 1) + fibonacci($n - 2);
    }
  }
  
  for ($i = 0; $i <= 10; $i++) {
    echo fibonacci($i) . " ";
  }

//2
function isLeapYear($year) {
    if ($year % 4 == 0 && $year % 100 != 0) {
      return true;
    } else if ($year % 400 == 0) {
      return true;
    } else {
      return false;
    }
  }
  
  $year = 2024;
  if (isLeapYear($year)) {
    echo "$year is a leap year.";
  } else {
    echo "$year is not a leap year.";
  }

//3
function generateRandomNumbers($range) {
    $generatedNumbers = array();
  
    for ($i = 0; $i < $range; $i++) {
      $randomNumber = rand(1, $range);
      while (in_array($randomNumber, $generatedNumbers)) {
        $randomNumber = rand(1, $range);
      }
  
      $generatedNumbers[] = $randomNumber;
    }
  
    return $generatedNumbers;
  }
  
  $range = 10;
  $randomNumbers = generateRandomNumbers($range);
  print_r($randomNumbers);

//4
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
      echo $i * $j . " ";
    }
    echo "\n";
  }

//5
function removeDuplicates($array) {
    $newArray = array();
    $previousValue = null;
  
    foreach ($array as $value) {
      if ($value != $previousValue) {
        $newArray[] = $value;
        $previousValue = $value;
      }
    }
  
    return $newArray;
  }
  
  $array = array(1, 1, 2, 2, 3, 3, 4, 4, 5, 5);
  $uniqueArray = removeDuplicates($array);
  print_r($uniqueArray);

//6
PHP
class
 
Animal
 
{
  private
 
$name;

  public
 
function
 
__construct($name) {
    $this->name = $name;
  }

  public
 
function
 
getName() {
    return
 
$this->name;
  }

  public
 
function toString() {
    return "Animal: Animal [name=\"$this->name\"]";
  }
}

class Mammal extends Animal {
  public function __construct($name) {
    parent::__construct($name);
  }

  public function toString() {
    return parent::toString() . " Mammal: Mamaml [Animal [name=\"$this->name\"]]]";
  }
}

class Cat extends Mammal {
  public function __construct($name) {
    parent::__construct($name);
  }

  public function greets() {
    echo "Meow";
  }

  public function toString() {
    return parent::toString() . " Cat: Cat[Mamaml [Animal [name=\"$this->name\"]]]";
  }
}

class Dog extends Mammal {
  public function __construct($name) {
    parent::__construct($name);
  }

  public function greets() {
    echo "Woof";
  }

  public function greetsAnotherDog(Dog $otherDog) {
    echo "Woooof";
  }

  public function toString() {
    return parent::toString() . " Dog: Dog[Mamaml[Animal [name=\"$this->name\"]]]";
  }
}

$cat = new Cat("Garfield");
$dog = new Dog("Fido");

echo $cat->toString() . "\n";
$cat->greets();

echo "\n";

echo $dog->toString() . "\n";
$dog->greets();

echo "\n";

$dog->greetsAnotherDog($dog);


//1-false
//2-false
//3-true
//4-true
//5-true

?>
