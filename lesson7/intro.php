<?php
class Man
{
   public $name;
   public $age;
   public function getNameAndAge(){
        echo $this->name." - ".$this->age."<br>";
   }
   public function addYear(){
        return ++$this->age;
   }
}

$gago = new Man();
$gago->name="Գագո";
$gago->age=25;
$gago->getNameAndAge();

$gago->addYear();
echo $gago->age;


//echo $gago->name." ՝ "․$gago->age;
$zaven = new Man();
$zaven->name="Զավեն";
echo "<pre>";
var_dump($gago);
echo "</pre>";
echo "<pre>";
var_dump($zaven);
echo "</pre>";