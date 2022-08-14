<?php
// $record = [id: asmkodas, ownerName: John, ownerSurname: Johnson, accountNumber: "IBAN", balance: "100Money"]
if('GET' == $_SERVER['REQUEST_METHOD']){
    $showing = $_GET['display']?? 0;
    $content = 0;
    $stylecolor = 'black';
    $message = ' ';
    if ($showing == 1){
        $content = 1;
    }
    if ($showing == 2){
        $stylecolor = 'red';
    }
    if ($showing == 3){
        $message = '<h2>Client with such personal ID already exists</h2>';
    }
}   
    // create valid IBAN number and put in IBAN numbers database;
    function createValidIBAN(){
        $iban = 'LT';
        foreach(range(1,18) as $_){
            $digit = rand(0,9);
            $iban.="$digit";
            }
               
        if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/iban.json')){
            file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/iban.json',json_encode([]));
        }
        $ibanData= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/iban.json',1));
        if(!in_array($iban,$ibanData)){
        return $iban;
        } else{
            return createValidIBAN();
        }
        };
        $sessionIBAN = createValidIBAN();
if('POST' == $_SERVER['REQUEST_METHOD']){
    // take data from form
    $asmKodas = $_POST['asmKodas'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $iban = $_POST['IBAN'];
    //take data from database
    if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/clients.json')){
        file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',json_encode([]));
    }
    $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);
    // validate personal ID number
    function validatePersonalId($id){
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
    };
    //check if personal ID exists in our database
    function checkIDinDatabase($id,$database){
        foreach($database as $record){
            if(in_array($id,$record)){
                return false;
                break;
            }
        }
        return true;
    }
    //Validating name and surname
    function checkNames($name, $surname){
        if(mb_strlen($name)<4 || (preg_match("/[0-9]/",$name)) || mb_strlen($surname)<4 || (preg_match("/[0-9]/",$surname))){
            return false;
        }else{
            return true;
        }

    };
    //write to database
    if(validatePersonalId($asmKodas) == 2 && checkIDinDatabase($asmKodas,$data) && checkNames($name,$surname)){
        $ibanData= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/iban.json',1));
        $ibanData[]=$iban;
        $clientCard =[];
        $clientCard['id'] = $asmKodas;
        $clientCard['ownerName'] = $name;
        $clientCard['ownerSurname'] = $surname;
        $clientCard['accountNumber'] = $iban;
        $clientCard['balance'] = 0;
    $data[]=$clientCard;
    file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',json_encode($data));
    file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/iban.json',json_encode($ibanData));
    header ('Location: http://localhost/delfinai/bank1/pages/createAccount.php?display=1');// show that recorded succefully
    die; 
    }elseif(!checkNames($name,$surname)|| validatePersonalId($asmKodas)!==2){
        header ('Location: http://localhost/delfinai/bank1/pages/createAccount.php?display=2'); // make bold and red comment with get
    }elseif(!checkIDinDatabase($asmKodas,$data)){
        header ('Location: http://localhost/delfinai/bank1/pages/createAccount.php?display=3'); // make bold and red comment with get
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Bankas Create Account</title>
</head>
<body>
    <header>
        <?php require 'C:\xampp\htdocs\Delfinai\bank1/components/header.php'?>
    </header>
    <?= ($content == 1 )?  "
        <div class='container' style = 'padding-top: 100px'>
            <h3>Account created succesfully.</h3>
            <div>
            Would You like to create another one?
            </div>
            <a href='http://localhost/delfinai/bank1/pages/createAccount.php' role='button' class='btn btn-primary btn-sm' style = 'margin-top: 50px'>CREATE ACCOUNT</a>
        </div>
    " : "
    <div class='container' style = 'padding-top: 100px; color: crimson;'>$message</div>
    <form class='container' method='POST'>
        <div class='form-group col-md-6'>
            <label for='iban'><h5>IBAN</h5></label>
            <input type='text' class='form-control' id='iban' value='$sessionIBAN' readonly name='IBAN' autocomplete='off'>
        </div>
        <div class='form-group col-md-6'>
            <label for='Name' class =''><h5>Name</h5><p style='color: $stylecolor'>name must be only letters, minimum 3</p></label>
            <input type='text' class='form-control' id='Name' placeholder='Enter client name here' name='name'>
        </div>
        <div class='form-group col-md-6'>
            <label for='Surname' class ='labelComment'><h5>Surname</h5><p style='color: $stylecolor'>name must be only letters, minimum 3</p></label>
            <input type='text' class='form-control' id='Surname' placeholder='Enter client surname here' name='surname'>
        </div>
        <div class='form-group col-md-6'>
            <label for='ClientId' class ='labelComment'><h5>Client personal ID</h5><p style='color:  $stylecolor'>ID must be valid 11 digits number</p></label>
            <input type='text' class='form-control' id='ClientId' placeholder='Enter client personal ID here' name='asmKodas'>
        </div>
        <div class='form-group col-md-6'>
            <button type='submit' class=' btn btn-primary btn-sm' style = 'margin-top: 100px'>SUBMIT CREATION</button>
        </div>
 
</form>" ?>
</body>
</html>


