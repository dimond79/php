<!-- <?php 

 class Mobil{
    public $model;

    public function print($set){
        $this->model = $set;
        echo "Model is:".$this->model;
    }
 }

  $obj = new Mobile();
 $obj -> print('spark');

?> -->



<?php 

class Mobile{
    public $model;

    public function print(){
        echo  $this ->model;
    }


}

$obj = new Mobile();
$obj -> model = "spark";
$obj -> print();


?>