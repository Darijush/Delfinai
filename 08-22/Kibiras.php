<?php

class Kibiras{
    protected static $akmenuKiekisVisuoseKibiruose = 0;
    // private static $manoKibiras;
    protected $akmenuKiekis;

    public static function kiekYraAkmenu(): int{
        return self::$akmenuKiekisVisuoseKibiruose;
    }

    // public static function naujasKibiras(){
    //     return self::$manoKibiras ?? self::$manoKibiras = new self;
    // }
    // }
    // protected function __clone()
    // {
    // public function __wakeup()
    // {
    //     throw new \Exception("Cannot unserialize a singleton.");
    // }

    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }
        

    public function prideti1Akmeni(): void{
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }
    public function pridetiDaugAkmenu(int $kiekis):void{
        $this->akmenuKiekis +=$kiekis;
        self::$akmenuKiekisVisuoseKibiruose +=$kiekis;
    }

    public function kiekPririnktaAkmenu(): int{
        return $this->akmenuKiekis;
    }
    public function kiekVisoAkmenu():int{
        return self::$akmenuKiekisVisuoseKibiruose;
    }




}