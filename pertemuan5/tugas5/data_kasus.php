<?php

    require_once 'class_kasus.php';

    //object
    $gorengan = new Gorengan('gorengan', 'Makanan Kering', 'Gurih');
    $esbuah = new Esbuah('Es Buah', 'Minuman Segar', 'Manis');
    $kolak = new Kolak('Kolak', 'Makanan Tradisional', 'Manis');
    //echo
    echo "Info Gorengan:<br>";
    $gorengan->getInfoGorengan();
    echo "<br>";

    echo "Info Es Buah:<br>";
    $esbuah->getInfoEsbuah();
    echo "<br>";

    echo "Info Kolak:<br>";
    $kolak->getInfoKolak();

?>