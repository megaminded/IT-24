<?php
interface Requirements
{
    public function setWidth(int $width);
    public function setColor(int $width);
}
class Vehicle implements Requirements
{
    public $petrol = 0;
    protected $tyre = "Big";
    function drive()
    {
        if ($this->petrol > 0) {
            echo "Driving the car";
            $this->park();
        } else {
            echo "Not driving the car. No petrol available";
        }
    }
    // $this->stop();
    function park()
    {
        echo "Parking the car";
    }
    function stop()
    {
        echo "Stopping the car";
    }
    function setWidth(int $width)
    {
    }
    function setColor(int $width)
    {
    }
}
class Car extends Vehicle
{
    function __construct($fuel)
    {
        $this->petrol = $fuel;
    }
    // protected, private, public
    private $color = "Red";
    public function test()
    {
        $this->tyre;
    }
    // public function drive()
    // {
    //     echo "Driving the car";
    // }
}

$venza = new Car(10);
// $venza->petrol = 0;
$venza->drive();
