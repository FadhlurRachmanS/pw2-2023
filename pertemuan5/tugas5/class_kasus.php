<?php

    class Takjil {
        protected $nama;
        protected $jenis;
        

        protected function __construct($nama, $jenis){
            $this->nama = $nama;
            $this->jenis = $jenis;
           

        }

        protected function getinfo(){
            echo 'Nama Takjil : ' . $this->nama . '<br>';
            echo 'Jenis Takjil: ' . $this->jenis . '<br>';
            

        }
        
    }

    class Gorengan extends Takjil {
        public $rasa;


        public function __construct($nama, $jenis, $rasa){
            parent ::__construct($nama, $jenis);
            $this->rasa = $rasa;
        }

        public function getInfoGorengan(){
            parent::getInfo(); 
            echo ' Memiliki Rasa : ' . $this->rasa . '<br>';
        }
    }
        class Esbuah extends Takjil {
            public $rasa ;
            
            public function __construct($nama , $jenis , $rasa){
                parent::__construct($nama, $jenis);
                $this->rasa = $rasa;
            }

            public function getInfoEsbuah() {
                parent::getInfo();
                echo'Memiliki Rasa: '. $this->rasa . '<br>';
            }
        }

        class Kolak extends Takjil {
            public $rasa ;
            
            public function __construct($nama , $jenis , $rasa){
                parent::__construct($nama, $jenis);
                $this->rasa = $rasa;
            }

            public function getInfoKolak() {
                parent::getInfo();
                echo'Memiliki Rasa: '. $this->rasa . '<br>';
            }
        }
    

?>