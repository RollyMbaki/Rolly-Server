<?php

$products = array(
                  array("title" => "Bert", "image" => "be.jpeg", "text" => "Dit is een Bert product", "prijs" => 15),
                  array("title" => "Ernie", "image" => "ernie.png", "text" => "Dit is een Ernie product", "prijs" => 20),
                  array("title" => "Bernie", "image" => "bernie.jpg", "text" => "Dit is een Bernie product", "prijs" => 25),
                  array("title" => "Rick", "image" => "rickandmorty.jpg", "text" => "Dit is een Pickle Rick product", "prijs" => 30)
);

echo $products[3]["title"];

?>