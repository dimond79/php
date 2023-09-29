<?php 

class Birds{

    public $make_sound;

    public function __construct($input)
    {
        $this->make_sound = $input ;
        echo "Birds make sound: ".$this->make_sound;
    }


}

$obj = new Birds("chu");

?>