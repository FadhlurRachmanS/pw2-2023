<?php 
    //hak akses: public, private, protected
    //property
    class Car {
        public $brand ;
        public $color ;
        
        // method
        function getBrand(){
            return $this->brand;
        }
        
        function getColor(){
            return $this->color;
        }
    }

    // object
    $tesla = new Car ();
    $supra = new Car ();
    $blackmamba = new Car ();
    $ungujanda = new Car ();

    //set value/ setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';
    $blackmamba->color = 'Blackmamba';
    $ungujanda->color = 'Unggujanda';

    // echo
    echo $tesla->getBrand();
    echo $blackmamba->getColor();
    echo '<br>';
    echo $supra->getBrand();
    echo $ungujanda->getColor();

    






?>