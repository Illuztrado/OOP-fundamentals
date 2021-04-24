<?php

class Bike {
    public $price;
    public $max_speed;
    public $miles;
// Now add a constructor method to the class
    public function __construct($price, $max_speed)
    {
// require the user to specify the price and max_speed of each instance. In the constructor also specify in the code so that the initial miles is set to be 0 whenever a new instance is created.
            $this->price = $price;
            $this->max_speed = $max_speed;
            $this->miles = 0;
    }
    public function display_info()
    {
        echo $this->price."<br>";
        echo $this->max_speed."<br>";
        if($this->miles < 0)
        {
            $this->miles = 0;
            echo $this->miles."<br>";
        }
        else {
            echo $this->miles."<br>";
        }
    }
    public function drive()
    {
        echo "Driving<br>";
        $this->miles += 10;
    }
    public function reverse()
    {
        echo "Reversing<br>";
        $this->miles -= 5;
    }
}

// Have the first instance drive three times, reverse once, and have it displayInfo(). 
$kawasaki = new Bike(100, 500);
$kawasaki->drive();
$kawasaki->drive();
$kawasaki->drive();
$kawasaki->reverse();
$kawasaki->display_info();

// Have the second instance drive twice, reverse twice, and have it displayInfo(). 
$yamaha = new Bike(200, 600);
$yamaha->drive();
$yamaha->drive();
$yamaha->reverse();
$yamaha->reverse();
$yamaha->display_info();

// Have the third instance reverse three times and displayInfo().
$suzuki = new Bike(300, 700);
$suzuki->reverse();
$suzuki->reverse();
$suzuki->reverse();
$suzuki->display_info();

?>