<?php
$foszereplok = [
    "Tokió" => [
    "szinesz" => "Úrsula Corberó",
    "szereplo" => "Silene Oliveira",
    "szinkron" => "Dobó Enikő",
 ],
    "Lisszabon" => [
    "szinesz" => "Itziar Ituño",
    "szereplo" => "Raquel Murillo",
    "szinkron" => "Bánfalvi Eszter",
 ],
    "Professzor" => [
    "szinesz" => "Álvaro Morte",
    "szereplo" => "Sergio Marquina",
    "szinkron" => "Dévai Balázs",
],
    "Moszkva" => [
    "szinesz" => "Paco Tous",
    "szereplo" => "Agustín Ramos dos Hermanas",
    "szinkron" => "Csuja Imre",
],
    "Berlin" => [
    "szinesz" => "Pedro Alonso",
    "szereplo" => "Andrés de Fonollosa",
    "szinkron" => "Kálid Artúr",
],
    "Nairobi" => [
    "szinesz" => "Alba Flores",
    "szereplo" => "Ágata Jiménez",
    "szinkron" => "Szilágyi Csenge",
],
    "Rio" => [
    "szinesz" => "Miguel Herrán",
    "szereplo" => "Aníbal Cortés",
    "szinkron" => "Jéger Zsombor",
],
    "Denver" => [
    "szinesz" => "Jaime Lorente",
    "szereplo" => "Daniel/Ricardo Ramos",
    "szinkron" => "Ember Márk",
],
    "Stockholm" => [
    "szinesz" => "Esther Acebo",
    "szereplo" => "Mónica Gaztambide",
    "szinkron" => "Lovas Rozi",
],
    "Helsinki" => [
    "szinesz" => "Darko Peric",
    "szereplo" => "Yashin Dasáyev",
    "szinkron" => "Törköly Levente",
],
    "Bogota" => [
    "szinesz" => "Hovik Keuchkerian",
    "szereplo" => "Bogota",
    "szinkron" => "Schneider Zoltán",
],
    "Palermo" => [
    "szinesz" => "Rodrigo de la Serna",
    "szereplo" => "Martín",
    "szinkron" => "Rába Roland",
]
];
foreach($foszereplok as $szerpok){
    foreach($szerpok as $adatok){
        echo "$adatok\t";
    }
    echo "\n";
}
?>