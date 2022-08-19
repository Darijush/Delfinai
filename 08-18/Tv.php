<?php
class Tv{
    public $color;
    private $size = '15"';

    public function __construct($c){ // costruct starts when new object is created. $c is getting parameter which we define on new creation;
        $this->color = $c; 
    }

    public function show(){
        echo '<h1>*******</h1>';
    }
    public function showColor(){
        echo '<h1>'.$this->color.'</h1>';
    }
    public function __destruct(){ //destruct starts when code dies (when fully finished whole code with objects used), good to save data after code finished
        echo '<h1>**dead***</h1>';
    }
    public function __get($a){ // if we ask for object value with is not defined in class magic get is started; get requires parameters mUST
        if ($a == 'size'){
            return $this->size;
        }
    }
    public function __set($which, $replaceValue){
        // if ($which == 'size'){
        //     $this->size = $replaceValue;
        // }
        $this->$which = $replaceValue;
    }


}