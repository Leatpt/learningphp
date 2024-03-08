<?php
// plug-in: PHP extension pack ja PHP Intelephense

class Box {
    private $weight;

// Magic Methods: klassi konstruktor
// Konstruktori kood jooksutatakse siis, kui objekt tehakse.
// Saan anda objektile kaasa väärtusi objekti loojes
    public function __construct($weight){
        $this->setWeight($weight);
        echo "Object created";
    }

    public function getWeight(){
        return $this->weight . 'kg';
    }
    public function setWeight($weight){
        if ($weight > 0){
            $this->weight = $weight;
        }
        else {
            throw new Exception('Negative Mass error');
        }
    }
    public function __toString(){
        return 'I am a box and I weigh ' . $this->weight;
    }
    public function __destruct(){
        echo "Object destroyed\n";
    }
}

//keegi teine tuleb kasutab koodi
for($i = 0; $i < 4; $i++){
echo "Before object created \n";
$box = new Box(12);
var_dump($box);
echo "\nAfter object created \n";
$box = 10;
}