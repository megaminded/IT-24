<!-- abstract or abstraction -->

<?php

abstract class Car
{
    abstract public function drive();
    abstract public function park();
}

class Venza extends Car
{
    public function drive()
    {
    }
    public function park()
    {
    }
    public function drift()
    {
    }
}
