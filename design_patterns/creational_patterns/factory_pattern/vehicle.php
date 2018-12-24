<?php

class Vehicle{
    public $wheels;

    public static function create($type, $wheels){
        switch ($type) {
            case 'car':
                return new Car($wheels);
                break;
            case 'motorcycle':
                return new Motorcycle($wheels);
                break;
            case 'trailer':
                return new Trailer($wheels);
                break;
            default:
                return new Exception("No vehicle found");
                break;
        }
    }

    public function getType(){
        return get_class($this);
    }
}

class Car extends Vehicle{
    public function __construct($wheels){
        $this-> wheels = $wheels;
    }
}

class Motorcycle extends Vehicle{
    public function __construct($wheels){
        $this-> wheels = $wheels;
    }
}

class Trailer extends Vehicle{
    public function __construct($wheels){
        $this-> wheels = $wheels;
    }
}
