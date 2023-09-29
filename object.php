<?php 
    class Birds{
        public $birdsFly = 'sky';
        public $birdsSound = 'vocal';
        
        public function birdDoes()
        {
            echo '<br>bird';
        }

        public function looksForFood(){
            echo "<br/>In the earth ";
        }
    }

    $object_name = new Birds();

    echo " Bird flies = ".$object_name -> birdsFly;
    echo '<br>Birds sound ='.$object_name -> birdsSound;

    echo $object_name -> birdDoes();
    echo $object_name -> looksForFood();

?>