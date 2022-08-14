<?php
// $record = [id: asmkodas, ownerName: John, ownerSurname: Johnson, accountNumber: "IBAN", balance: "100Money"]
if('GET' == $_SERVER['REQUEST_METHOD']){
    $account = $_GET['acc']?? 0;
    if ($account == 0){
        header("HTTP/1.1 418 I'm a teapot");
        $warning = "<h1>418 I'm a teapot</h1><br>
        <p>The HTCPCP Server is a teapot. How did You get into our kitchen?</p>";
    }else{
          //take data from database

        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);
        //check for account existance 
                function validateAccBalance($clientAcc, $data): array{
                foreach($data as $client){
                        if(in_array($clientAcc,$client)){
                            return [1,$client['ownerName'],$client['ownerSurname'],$client['balance'],];
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
            }elseif($validationResult[0] == 1){
                $name = $validationResult[1];
                $surname = $validationResult[2];
                $accBalance = $validationResult[3];
                $warning = "    <section class='container'>
                                    <div class = 'col-8' style = 'padding-top: 100px'>
                                    <h3>Add assets to client account</h3>
                                    </div>
                                </section>
                                <form class='container' method='POST'>
                                    <div class='form-group col-md-6'>
                                        <label for='iban'><h5>Name</h5></label>
                                        <input type='text' class='form-control' id='iban' value='$name' readonly name='IBAN' autocomplete='off'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='iban'><h5>Surame</h5></label>
                                        <input type='text' class='form-control' id='iban' value='$surname' readonly name='IBAN' autocomplete='off'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='ClientId' class ='labelComment'><h5>Account balance</h5></label>
                                        <input type='text' class='form-control' id='ClientId'  value='$accBalance' readonly autocomplete='off'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='ClientId' class ='labelComment'><h5>Add assets amount</h5></label>
                                        <input type='text' class='form-control' id='ClientId' placeholder='Enter amount of assets to add' autocomplete='off' name='addAsset'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <button type='submit' class=' btn btn-primary ' style = 'margin: 70px 20px 0px 20px' name = 'confirm' value = '1'>ADD</button>
                                        <button type='submit' class=' btn btn-warning ' style = 'margin: 70px 20px 0px 20px' name = 'confirm' value = '0'>CANCEL</button>

                                    </div>
                                </form>";
            }
        }
 
}
if('POST' == $_SERVER['REQUEST_METHOD']){
    $yes = $_POST['confirm'];
    $accNr = $_POST['IBAN'];
    $asset = $_POST['addAsset'];
    if ($yes == 0){ // 0 means no
        header ('Location: http://localhost/delfinai/bank1/index.php');// redirecting to list
        die;
    }
    if ($yes == 1){
          //take data from database
        $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true);

        //adding money
            foreach($data as $key => &$client){
                    if(in_array($accNr,$client)){
                        $client['balance']+= $asset;
                }
            }

        file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',json_encode($data));
 

 
        
        $warning = "<section class='container'>
                        <div class = 'col-8' style = 'padding-top: 100px'>
                            <h3>Assets added</h3>
                        </div>
                        <div class='col-md-6'>
                            <a href='http://localhost/delfinai/bank1/index.php' role='button' class='btn btn-primary btn-sm' name='back'>BACK TO LIST</a>
                        </div>
                    </section>";

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