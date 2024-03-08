<?php
// plug-in: PHP extension pack ja PHP Intelephense
class Box {
    public $width;
    public $height;
    public $length;
    public $material;
    public $color;

    public function describe(){
        echo 'width: ' . $this->width . ' height: ' . $this->height . ' length: ' . $this->length;
    }
}

$box1 = new Box();
$box1 ->width = 1;
$box1 ->height = 2;
$box1 ->length = 3;
$box1 ->material = 'Wood';
$box1 ->color = 'Punane';
var_dump($box1);

$box2 = new Box();
$box2 ->width = 3;
$box2 ->height = 4;
$box2 ->length = 5;
$box2 ->material = 'Plastic';
$box2 ->color = 'Green';
var_dump($box2);
