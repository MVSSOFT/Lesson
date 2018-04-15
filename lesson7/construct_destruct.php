<?php
class Bike{
    public $model;
    public $brand;
    public $price;
    public function __construct($m,$b,$p)
    {
        $this->model=$m;
        $this->brand=$b;
        $this->price=$p;
        echo "<br>Ստեղծվեց ".__CLASS__." տիպի օբյեկտ<br>";
    }
    
    public function getAllInfo()
    {
        echo "<br>Model ".$this->model;
        echo "<br>Brand ".$this->brand;
        echo "<br>Price $".$this->price;
    }
    public function __destruct()
    {
        echo "<br>քանդվում է ".$this->model."<br>";
        echo "<br>".__CLASS__." տիպի օբյեկտը քանդվեց<br>";
    }
}
/*
$bmw = new Bike();
$bmw->model="BMW X6";
$bmw->brand="Չնխուանդձյու";
$bmw->price=1000;
$bmw->getAllInfo();
*/
$otherBike = new Bike("track","mmmm",15000);
$otherBike->getAllInfo();
?>