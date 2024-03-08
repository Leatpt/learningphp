<?php
// plug-in: PHP extension pack ja PHP Intelephense

class Box {
    public $color;
    public $size;
    public static $number;

//staatilise funtsiooni sees ma ei tohi kasutada võtmesõna "this"
//ma ei saa viidata ühelegi mitte staatilisele muutujale
    public static function getNumber(){
        echo self::$number;
    }
    public function getSize(){
        echo $this->size . self::$number;
    }
    public static function me1(){
        var_dump(self::class);
//class on staatiline komponent, see annab alati tekstina klassi nime
    }
    public static function me2(){
        var_dump(static::class);
    }
}

class MetalBox extends Box{

}

$box1 = new Box();
$box1->size = 10;
Box::$number = 12;
$box1->getSize();
Box::getNumber();
//$box2 = new Box();
//$box2->size = 20;
Box::$number = 20;
//var_dump($box1, $box2);
var_dump(Box::$number, Box::$number);
box::me1();
box::me2();
MetalBox::me1();
MetalBox::me2();