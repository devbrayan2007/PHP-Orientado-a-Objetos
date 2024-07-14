<?php

class Vehicle{
    public $model;
    public $color;
    public $year;


    public function toWalk(){
        echo "Andou!";

    }

    public function toStop(){
        echo "Parou!";
    }
}

class Car extends Vehicle{
    
    public function turnOnCleaner(){
        echo "Limpando em 3..2..1";
    }
}

class MotoCycle extends Vehicle{
    
    public function giveDegree(){
        echo "Dando grau!";
    }
}

// Carro
$car = new Car();
$car->model = "Siena";
$car->color = "Preto";
$car->year = 2018;
$car->toWalk();
echo "<br>";
$car->toStop();
echo "<br>";
$car->turnOnCleaner();
echo "<br>";
var_dump($car);

echo "<hr>";

// Moto

$motocycle = new MotoCycle();
$motocycle->model = "PCX";
$motocycle->color = "Azul";
$motocycle->year = 2020;
$motocycle->toWalk();
echo "<br>";
$motocycle->toStop();
echo "<br>";
$motocycle->giveDegree();
echo "<br>";
var_dump($motocycle);