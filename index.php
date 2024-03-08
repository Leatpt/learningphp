<?php
// plug-in: PHP extension pack ja PHP Intelephense

class Box {

    public $size;
    private $color;
    protected $width;
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
    public function getWidth(){
        var_dump($this->width);
    }
}

class MetalBox extends Box{
    public function getWidth2(){
        var_dump($this->width);
    }
}

$box1 = new Box();
$box1->size = 10;
$box1->getWidth();
Box::$number = 12;
$metal1 = new MetalBox();
$metal1->getWidth2();
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