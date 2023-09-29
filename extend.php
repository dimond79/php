<?php
class MyClass{

    public function print(){
        echo "parent/base class fn";
    }
}

class derived extends MyClass{

}

$obj = new derived();
$obj->print();


?>