<?php

require_once 'animal.php'; // Import class Animal


$sheep = new Animal("Shaun");

// Tampilkan informasi Animal
echo "Name: " . $sheep->name . "<br>";
echo "Legs: " . $sheep->legs .  "<br>";
echo "Cold blooded: " . $sheep->cold_blooded . "<br>";

// instance Ape dan Frog
include('Ape.php');
require_once('Frog.php');

$Kerakuat = new Ape("Kera Sakti"); echo "<br>";
$kodok = new Frog("Buduk"); 


echo "Name: " . $kodok->name. "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold blooded: ". $kodok->cold_blooded .  "<br>";
echo "Jump: " ;
$kodok->lompat();
echo "<br>" . "<br>";    


echo "Name: " . $Kerakuat->name . "<br>";
echo "Legs: " . $Kerakuat->legs . "<br>";
echo "Cold blooded: " . $Kerakuat->cold_blooded . "<br>";
echo "Yell: " ;
 $Kerakuat->yell(). "<br>";
