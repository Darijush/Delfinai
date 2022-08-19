<?php
class Iban{
    private $iban;
    protected function createValidIBAN(){
        $iban = 'LT';
            foreach(range(1,18) as $_){
                $digit = rand(0,9);
                $iban.="$digit";
                }
               
            if(!file_exists(URL.'data/iban.json')){
                file_put_contents(URL.'data/iban.json',json_encode([]));
            }
        $ibanData= json_decode(file_get_contents(URL.'data/iban.json',1));
        if(!in_array($iban,$ibanData)){
        return $this->iban = $iban;
        } else{
            return createValidIBAN();
        }
        }
}