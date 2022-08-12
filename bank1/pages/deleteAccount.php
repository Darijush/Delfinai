<?php
// $record = [id: asmkodas, ownerName: John, ownerSurname: Johnson, accountNumber: "IBAN", balance: "100Money"]
if('GET' == $_SERVER['REQUEST_METHOD']){
    if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/clients.json')){
        $warning = 'No clients database found. Check if there are any clients?';
    }
    $account = $_GET['acc']?? 0;
    $message = '';
    if ($acc == 0){
        $message = 'No account chosen to delete. Please go to account list to choose'; // check if knowing which account to delete
    }else{
          //take data from database

        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);
        //check for account existance and if balance 0
        function validateAccBalance($clientAcc){
        foreach($data as $client){
                if(in_array($account,$client) && $client['balance'] == 0){
                    return [1,$client['accountNumber'],$client['balance']];
                    break;
                }elseif(in_array($account,$client) && $client['balance'] !== 0){
                    return [2,$client['accountNumber'],$client['balance']];
                    break;
                }
            }
            return 0;
        }
    }
} 
if('POST' == $_SERVER['REQUEST_METHOD']){
    $yes = $_POST['confirm'];
    if ($yes == 0){
        header ('Location: http://localhost/delfinai/bank1/index.php');// redirecting to list
        die;
    }
    if ($yes == 1){
          //take data from database
        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);
        //check for account existance and if balance 0
        function deleteAcc($clientAcc){
        foreach($data as $key => &$client){
                if(in_array($account,$client)){
                    unset($data[$key]);
                    return 1;
                    break;
                }
            }
            return 0;
        }
    }
} 