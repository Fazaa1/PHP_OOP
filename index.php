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

$sungokong  = new Ape("Kera Sakti"); echo "<br>";
$kodok = new Frog("Buduk"); 


echo "Name: " . $kodok->name. "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold blooded: ". $kodok->cold_blooded .  "<br>";
echo "Jump: " ;
$kodok->Jump();
echo "<br>" . "<br>";    


echo "Name: " . $sungokong ->name . "<br>";
echo "Legs: " . $sungokong ->legs . "<br>";
echo "Cold blooded: " . $sungokong ->cold_blooded . "<br>";
echo "Yell: " ;
 $sungokong ->yell(). "<br>";
