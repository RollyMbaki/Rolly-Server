<?php

$products = array(
                  array("title" => "Bert", "image" => "be.jpeg", "text" => "Dit is een Bert product", "categories" => array("knuffels", "poppen", "lelijkaards"), "prijs" => 15),
                  array("title" => "Ernie", "image" => "ernie.png", "text" => "Dit is een Ernie product", "categories" => array("poppen"), "prijs" => 20),
                  array("title" => "Bernie", "image" => "bernie.jpg", "text" => "Dit is een Bernie product", "categories" => array("knapperd"), "prijs" => 25),
                  array("title" => "Rick", "image" => "rickandmorty.jpg", "text" => "Dit is een Pickle Rick product", "categories" => array("wetenschapper"), "prijs" => 30)
);

echo $products[3]["title"];

?>