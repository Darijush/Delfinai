<?php
class IdNumber{
    public $id;
    public function checkId($id){ 
        if(strlen($id)!== 11 || (!preg_match("/\d{11}/",$id)) || (!preg_match("/^[1-6]/",$id))){
            return 1; // worng input message, must be 11 digits only;
        }else {
            $checkArray = str_split($id);
            $sum1 = $checkArray[0]*1 + $checkArray[1]*2 + $checkArray[2]*3 + $checkArray[3]*4 + $checkArray[4]*5 + $checkArray[5]*6 + $checkArray[6]*7 + $checkArray[7]*8 + $checkArray[8]*9 + $checkArray[9]*1 ;
            $sum2 = $checkArray[0]*3 + $checkArray[1]*4 + $checkArray[2]*5 + $checkArray[3]*6 + $checkArray[4]*7 + $checkArray[5]*8 + $checkArray[6]*9 + $checkArray[7]*1 + $checkArray[8]*2+ $checkArray[9]*3 ;
                if($sum1%11!==10 && $sum1%11 == $checkArray[10]){
                    return 2; //ID number is valid
                    }elseif ($sum2%11!==10 && $sum2%11 == $checkArray[10]) {
                        return 2; //ID number is valid
                    }elseif($sum2%11 == 10 && ($checkArray[10] == 0)){
                        return 2; //ID number is valid
                    }
                return 3; //id is not valid                                                                          
        }
    }
    public function __set($which, $replaceValue){
        // if ($which == 'size'){
        //     $this->size = $replaceValue;
        // }
        $this->$which = $replaceValue;
    }
}