<?php

//print_r($request);  //previously we used print_r
class Car
{
    public $name;
}

$card1 = new Car();
$card1->name = 'Visa';


$card2 = new Car();
$card2->name = 'MasterCard';

$card3 = new Car();
$card3->name = 'Discover';


$cards = array($card1, $card2, $card3);


$cards = json_encode($cards);

echo $cards;


?>