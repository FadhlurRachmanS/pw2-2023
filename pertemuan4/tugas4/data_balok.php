<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
        require_once 'class_balok.php';

		$balok = new Balok(18, 8, 13);
		$balok2 = new Balok(10, 8, 15);
		$balok3 = new Balok(4, 5, 16);
		$balok4 = new Balok(6, 10, 12);
		
		echo "RUMUS SEBUAH BALOK "."<br><br>";
		echo "LUAS BALOK = " . $balok->getLuas()  . "<br>";
		echo "KELILING BALOK = " . $balok->getKeliling() . "<br>"; 
		echo "VOLUME BALOK = " . $balok->getVolume() . "<br><br>"; 

		echo "LUAS BALOK = " . $balok2->getLuas()  . "<br>";
		echo "KELILING BALOK = " . $balok2->getKeliling() . "<br>"; 
		echo "VOLUME BALOK = " . $balok2->getVolume() . "<br><br>"; 

		echo "LUAS BALOK = " . $balok3->getLuas()  . "<br>";
		echo "KELILING BALOK = " . $balok3->getKeliling() . "<br>"; 
		echo "VOLUME BALOK = " . $balok3->getVolume() . "<br><br>"; 

		echo "LUAS BALOK = " . $balok4->getLuas()  . "<br>";
		echo "KELILING BALOK = " . $balok4->getKeliling() . "<br>"; 
		echo "VOLUME BALOK = " . $balok4->getVolume() . "<br><br>"; 
	
	
	
	
?>