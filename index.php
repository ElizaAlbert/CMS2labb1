<?php

// Uppgift 1 & 2
function myFunction($string, $siffra)
{
    echo "<h" . $siffra . ">" . $string . "<h" . $siffra . ">";
}
myFunction("Hello Kitchen", 1);


// Uppgift 3
class Food
{
    public $name;

    function eat()
    {
        echo "Nu åts en" . $this->name;
    }
}

$objekt = new Food();
$objekt->eat('dadel');


// Uppgift 4 & 5
class Sandwich extends Food
{
    private $kontrollLista = [
        "cheese",
        "ham",
        "mustard",
        "ketchup",
        "fish"
    ];

    private $options = [];

    function eat()
    {
        foreach ($this->options as $palagg => $styck) {
            echo "<li>" . $styck . " " . $palagg;
        }
    }

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_order_options()
    {
        return $this->optionsList;
    }

    function set_options($optionsList)
    {
        foreach ($optionsList as $palagg => $styck) {
            if (in_array($palagg, $this->kontrollLista)) {
                $this->options[$palagg] = $styck;
            }
        }
    }
}

$beställning = [
    "cheese" => 1,
    "fish" => "9"
];

$beställning2 = [
    "cheese" => 2,
    "ham" => "1"
];

$räkmacka = new Sandwich('räkmacka'); {
    $ostmacka = new Sandwich("ostmacka");
};

$ostmacka->set_options($beställning2);
$ostmacka->eat();

$räkmacka->set_options($beställning);
$räkmacka->eat();
