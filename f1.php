<?php 
    $f1 = [
        "Ricciardo" => [
            "rajtszam" => 3,
            "nev" => "Daniel Ricciardo",
            "orszag" => "Australia",
            "szulido" => "1989.07.01",
        ],
        "Norris" => [
            "rajtszam" => 4,
            "nev" => "Lando Norris",
            "orszag" => "United Kingdom",
            "szulido" => "1999.11.13",
        ],
        "Vettel" => [
            "rajtszam" => 5,
            "nev" => "Sebastian Vettel",
            "orszag" => "Germany",
            "szulido" => "1987.07.03",
        ],
        "Raikkönen" => [
            "rajtszam" => 7,
            "nev" => "Kimi Raikkönen",
            "orszag" => "Finland",
            "szulido" => " 1979.10.17",
        ]
    ];
   foreach($f1 as $versny){
       foreach($versny as $adatok){
           echo "$adatok  \t";
       }
       echo "\n";
   }
?>