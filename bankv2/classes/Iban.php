<?php
class Iban{
    public $iban;
    public function createValidIBAN(){
        $iban = 'LT';
            foreach(range(1,18) as $_){
                $digit = rand(0,9);
                $iban.="$digit";
                }
               
            if(!file_exists(DIR.'inc/iban.json')){
                file_put_contents(DIR.'inc/iban.json',json_encode([]));
            }
        $ibanData= json_decode(file_get_contents(DIR.'inc/iban.json',1));
        if(!in_array($iban,$ibanData)){
        return $this->iban = $iban;
        } else{
            return createValidIBAN();
        }
        }
}