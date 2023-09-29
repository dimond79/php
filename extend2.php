<?php
class Birds{
public $makeSound = "chu";

public function __construct(){
    echo "base class";
}

}

class Derived extends Birds{
     function __construct(){
        parent ::  __construct();
    }

    public function makeSound(){
        return $this->makeSound;
    }
}

$obj = new Derived();
echo '<br> make sound '.$obj->makeSound();



?>