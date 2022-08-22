<?php
class Account{
    public $name;
    public $surname;
    public $account;
    public $id;
    public $balance = 0;
    public function __construct($n,$s,$a,$id,){ 
        $this->name = $n; 
        $this->surname = $s; 
        $this->account = $a; 
        $this->id = $id; 
    }

    public function __destruct(){ 
        if(!file_exists(DIR.'inc/clients.json')){
            file_put_contents(DIR.'inc/clients.json',json_encode([]));
        }
        $ibanData= json_decode(file_get_contents(DIR.'inc/iban.json',1));
        $ibanData[] = $this->account;
        $data= json_decode(file_get_contents(DIR.'inc/clients.json',1), true);
        $data[] = ['id'=>$this->id, 'name' => $this->name, 'surname' => $this->surname, 'IBAN' => $this->account, 'balance' => $this->balance];
            // sorting data by clients Surname
        function compareByName($a, $b)
        {
            return ($a['ownerSurname']<=> $b['ownerSurname']);
        }
        usort($data, 'compareByName');
        file_put_contents(DIR.'inc/iban.json',json_encode($ibanData));
        file_put_contents(DIR.'inc/clients.json',json_encode($data));
    }
}