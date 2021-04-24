<?php

// Create a class called Car.
// In the constructor, allow the user to specify the following attributes: price, speed, fuel, mileage.
// If the price is greater than 10,000, set the tax to be 15%.
// Otherwise, set the tax to be 12%. 
// Create five different instances of the class Car.
// In the class have a method called Display_all() that returns all the information about the car as a string.
// In your constructor, call this Display_all() method to display information about the car when a new car is created.

class Car {
    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax;
    public function __construct($price, $speed, $fuel, $mileage)
    {
        $this->price = $price;
        $this->speed = $speed."mph";
        $this->fuel = $fuel;
        $this->mileage = $mileage."mpg";
        if($this->price > 10000)
        {
            $this->tax = 0.15;
        }
        else
        {
            $this->tax = 0.12;
        }
        return $this->display_all();
    }
    public function display_all()
    {
        echo "Price: $this->price<br>";
        echo "Speed: $this->speed<br>";
        echo "Fuel: $this->fuel<br>";
        echo "Mileage: $this->mileage<br>";
        echo "Tax: $this->tax<br>";
    }
}
// price, speed, fuel, mileage
$car1 = new Car(2000, 70, "Full", 100);
echo "<br>";
$car2 = new Car(50000, 85, "Kind of Full", 65);
echo "<br>";
$car3 = new Car(20000, 105, "Not Full", 35);
echo "<br>";
$car4 = new Car(8000, 45, "Almost Empty", 90);
echo "<br>";
$car5 = new Car(10000, 50, "Empty", 25);
echo "<br>";
?>