<?php 

$products = [];

$i = 1;

while ($i < 20) {
	array_push($products, ["id" => $i,	
	"name" => "sword".$i,
	"img" => "img/dolu+9.jpg",
	"price" => 100, 
	"details" => "Legendary item"
	]);
	$i++;

}


 ?>