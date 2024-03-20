<?php

    class Vehicle {
        protected $type;
        protected $fuel;
        

        protected function __construct($type, $fuel){
            $this->type = $type;
            $this->fuel = $fuel;
           

        }

        protected function getinfo(){
            echo 'Jenis Kendaraan: ' . $this->type . '<br>';
            echo 'Bahan Bakar: ' . $this->fuel . '<br>';
            

        }
        
    }

    class Motor extends Vehicle {
        public $wheels;


        public function __construct($type, $fuel, $wheels){
            parent ::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        public function getInfoMotor(){
            parent::getInfo(); 
            echo 'Jumlah Roda: ' . $this->wheels . '<br>';
        }
    }
        class Submarine extends Vehicle {
            public $max_dept ;
            
            public function __construct($type, $fuel , $max_dept){
                parent::__construct($type, $fuel);
                $this->max_dept = $max_dept;
            }

            public function getInfoSubmarine() {
                parent::getInfo();
                echo'Maksimal Kedalaman: '. $this->max_dept . '<br>';
            }
        }
    

?>