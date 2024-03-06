<?php

// Default
// Associative Array
// Multidimensional Array 

//Default
    // $fruits = ["Mangga", "Bery", "Kiwi"];


    // foreach ($fruits as $fruits) {
    //     echo $fruits;
    //     echo '<br>';
         
    // }

// Associative Array
    // $dinos = [
    //     "dinoName" => "Rex",
    //     "dinoAge" => 500,
    //     "isMariied" => "false"
    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

//Multidimensional Array

        $dinos = [
            [
                "dinoName" => "Rex",
                "dinoAge" => 500
            ],
            [
                "dinoName" => "Bracio",
                "dinoAge" => 800
            ],
            [
                "dinoName" => "Ptrea",
                "dinoAge" => 250
            ]
        ];

        foreach($dinos as $dino) {
            echo $dino["dinoName"];
            echo $dino["dinoAge"];
            echo '<br>'; 
        }

?>