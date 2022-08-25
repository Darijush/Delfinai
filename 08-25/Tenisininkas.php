<?php

class Tenisininkas
{
    private $vardas, $kamuoliukas;
    static private $zaidejas1, $zaidejas2;
    public static function zaidimoPradzia()
    {
        if (self::$zaidejas1 == null || self::$zaidejas2 == null) {
            echo 'Kur zaidejai?';
            return;
        }
        if (rand(0, 1)) {
            self::$zaidejas1->kamuoliukas = false;
            self::$zaidejas2->kamuoliukas = true;
        } else {
            self::$zaidejas2->kamuoliukas = false;
            self::$zaidejas1->kamuoliukas = true;
        }
    }
    public function __construct($vardas)
    {
        $this->vardas = $vardas;
        if (self::$zaidejas1 === null) {
            self::$zaidejas1 = $this;
        } elseif (self::$zaidejas2 === null) {
            self::$zaidejas2 = $this;
        }
    }
    public function arTuriKamuoliuka()
    {
        return $this->kamuoliukas;
    }
    public function perduotiKamuoliuka()
    {
        if ($this->kamuoliukas) {
            if (self::$zaidejas1->vardas == $this->vardas) {
                self::$zaidejas1->kamuoliukas = false;
                self::$zaidejas2->kamuoliukas = true;
                echo self::$zaidejas1->vardas.' perdave '.self::$zaidejas2->vardas;
            } elseif (self::$zaidejas2->vardas == $this->vardas) {
                self::$zaidejas2->kamuoliukas = false;
                self::$zaidejas1->kamuoliukas = true;
                echo self::$zaidejas2->vardas.' perdave '.self::$zaidejas1->vardas;
            } else {
                echo 'Ziurovai nezaidzia';
            }
        } else {
            echo 'Neturi kamuoliuko';
        }
    }
}
