<?php
// $record = [id: asmkodas, ownerName: John, ownerSurname: Johnson, accountNumber: "IBAN", balance: "100Money"]
if('GET' == $_SERVER['REQUEST_METHOD']){
    if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/clients.json')){
        header("HTTP/1.1 418 I'm a teapot");
        $warning = "<h1>418 I'm a teapot</h1><br>
        <p>The HTCPCP Server is a teapot. How did You get into our kitchen?</p>";
        }
    $account = $_GET['acc']?? 0;
    $message = '';
    if ($account == 0){
        header("HTTP/1.1 418 I'm a teapot");
        $warning = "<h1>418 I'm a teapot</h1><br>
        <p>The HTCPCP Server is a teapot. How did You get into our kitchen?</p>";
    }else{
          //take data from database

        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);
        //check for account existance and if balance 0
                function validateAccBalance($clientAcc, $data): array{
                foreach($data as $client){
                        if(in_array($clientAcc,$client) && $client['balance'] == 0){
                            return [1,$client['accountNumber'],$client['balance']];
                            break;
                        }elseif(in_array($clientAcc,$client) && $client['balance'] !== 0){
                            return [2,$client['accountNumber'],$client['balance']];
                            break;
                        }
                    }
                    return [0];
                }
            $validationResult = validateAccBalance($account,$data);
            if($validationResult[0] == 0){
                header("HTTP/1.1 418 I'm a teapot");
                $warning = "<h1>418 I'm a teapot</h1><br>
                <p>The HTCPCP Server is a teapot. How did You get into our kitchen?</p>";
            }elseif($validationResult[0] == 2){
                $accNr = $validationResult[1];
                $accBalance = $validationResult[2];
                $warning = "    <section class='container'>
                                    <div class = 'col-8' style = 'padding-top: 100px'>
                                    <h3>Can't delete account with balance over 0</h3>
                                    </div>
                                </section>
                        <form class='container' method='POST'>
                            <div class='form-group col-md-6'>
                                <label for='iban'><h5>IBAN</h5></label>
                                <input type='text' class='form-control' id='iban' value='$accNr?' readonly name='IBAN' autocomplete='off'>
                            </div>
                            <div class='form-group col-md-6'>
                                <label for='ClientId' class ='labelComment'><h5>Account balance</h5></label>
                                <input type='text' class='form-control' id='ClientId' placeholder='Enter client personal ID here' value='$accBalance' readonly autocomplete='off'>
                            </div>
                            <div class='form-group col-md-6'>
                                <a href='http://localhost/delfinai/bank1/index.php' role='button' class='btn btn-primary btn-sm' name='back'>BACK TO LIST</a>
                            </div>
                        </form>";


            }else{
                $accNr = $validationResult[1];
                $accBalance = $validationResult[2];
                $warning = "    <section class='container'>
                                    <div class = 'col-8' style = 'padding-top: 100px'>
                                    <h3>Are You sure You want to delete this account?</h3>
                                    </div>
                                </section>
                                <form class='container' method='POST'>
                                    <div class='form-group col-md-6'>
                                        <label for='iban'><h5>IBAN</h5></label>
                                        <input type='text' class='form-control' id='iban' value='$accNr' readonly name='IBAN' autocomplete='off'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='ClientId' class ='labelComment'><h5>Account balance</h5></label>
                                        <input type='text' class='form-control' id='ClientId' placeholder='Enter client personal ID here' value='$accBalance' readonly autocomplete='off'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <button type='submit' class=' btn btn-danger ' style = 'margin: 70px 20px 0px 20px' name = 'confirm' value = '1'>DELETE</button>
                                        <button type='submit' class=' btn btn-warning ' style = 'margin: 70px 20px 0px 20px' name = 'confirm' value = '0'>CANCEL</button>
                                    </div>
                                </form>";
            }
        }
 
} 
if('POST' == $_SERVER['REQUEST_METHOD']){
    $yes = $_POST['confirm'];
    $accNr = $_POST['IBAN'];
    if ($yes == 0){ // 0 means no
        header ('Location: http://localhost/delfinai/bank1/index.php');// redirecting to list
        die;
    }
    if ($yes == 1){
          //take data from database
        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);

        //delete acc
            foreach($data as $key => &$client){
                    if(in_array($accNr,$client)){
                        unset($data[$key]);
                }
            }

        file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',json_encode($data));
        // check if deleted
        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);
        function chekcIfDelete($acc,$data){
            $count = 1;
            foreach($data as $key => $client){
                if(in_array($acc,$client)){
                    $count--;
                    break;
             }
            }
        return $count;
        }
        // return suscess message
        if(chekcIfDelete($accNr,$data) == 1){
        
        $warning = "<section class='container'>
                        <div class = 'col-8' style = 'padding-top: 100px'>
                            <h3>Account succesfuly deleted!</h3>
                        </div>
                        <div class='col-md-6'>
                            <a href='http://localhost/delfinai/bank1/index.php' role='button' class='btn btn-primary btn-sm' name='back'>BACK TO LIST</a>
                        </div>
                    </section>";
        } else{
            $warning = "<section class='container'>
                            <div class = 'col-8' style = 'padding-top: 100px'>
                                <h3>Could not delete, try later</h3>
                            </div>
                            <div class='col-md-6'>
                                <a href='http://localhost/delfinai/bank1/index.php' role='button' class='btn btn-primary btn-sm' name='back'>BACK TO LIST</a>
                            </div>
                        </section>";
        }
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
    <title>BANK v.1 Delete Account</title>
</head>
<body>
    <header>
    <?php require 'C:\xampp\htdocs\Delfinai\bank1/components/header.php'?>

    </header>

            <?= $warning?>
      
 


</body>
</html>