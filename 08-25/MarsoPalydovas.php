<?php
namespace Kosmosas;

class MarsoPalyovas{
    const PALYDOVAI = ['Deimas', 'Fobas'];
    private static $palydovai = [null,null];
    public $name;

    static function create(){
        if(self::$palydovai[0] == null){
           return self::$palydovai[0] = new self(self::PALYDOVAI[0]);
        }
        if(self::$palydovai[1] == null){
            return self::$palydovai[1] = new self(self::PALYDOVAI[1]);
         }
         return self::$palydovai[rand(0,1)];
    }

    private function __construct($name)
    {
        $this->name = $name;
    }

}