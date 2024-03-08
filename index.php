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

class MetalBox extends Box{
    use HasSmell;
    public $material = 'Metal';
    public $weight;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class Animal {
    use HasSmell;
}

trait HasSmell {
    public $smell;
    public function sniff(){
        if($this->smell !== 'Bad'){
            return 'Good!';
        }
        return 'Bad!';
    }
}

$MetalBox1 = new MetalBox();
var_dump($MetalBox1);
$MetalBox1->sniff();