<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        public $bi1 ;
        public $bi2;

        public function __construct($bi1, $bi2) {
            // code..
            $this->bi1 = $bi1;
            $this->bi2 = $bi2;
        }

        function tambah() {
            return $this->bi1 + $this->bi2;
        }
    
        function kurang() {
            return $this->bi1 - $this->bi2;
        }
    
        function bagi() {
            
            return $this->bi1 / $this->bi2;
        }
    
        function kali() {
            return $this->bi1 * $this->bi2;
        }
    }
        //object
        $calculator = new Calculator(10,5);
        $calculator = new Calculator(18,3);
        $calculator = new Calculator(50,5);
        $calculator = new Calculator(20,4);

        echo "Kalkulator Sederhana<br>" ;
        echo "10 + 5 =<br>";
        echo "Pertambahan: " . $calculator->tambah() . "<br>";
        echo "18 - 3 =<br>";
        echo "Pengurangan: " . $calculator->kurang() . "<br>";
        echo "50 : 5 =<br>";
        echo "Pembagian: "   . $calculator->bagi() . "<br>";
        echo "20 * 4 = <br>";
        echo "Perkalian: "   . $calculator->kali() . "<br>";

    


    
?>