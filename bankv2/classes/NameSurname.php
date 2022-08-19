<?php
class NameSurname{
public $name;
public $surname;
    private function checkNames($names){
        if(mb_strlen($names)<4 || (preg_match("/[0-9]/",$names)) ){
            return false;
        }else{
            return true;
        }

    }
    public function __set($name, $replaceValue){
        $this->$name = $replaceValue;
    }
}