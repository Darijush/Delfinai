<?php
function renderAccounts(){
    if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/clients.json')){
       return "<div>
                    <div>
                    There is no accounts to show, would You like to create?
                    </div>
                    <a href='http://localhost/delfinai/bank1/pages/createAccount.php' role='button' class='btn btn-primary btn-sm'>CREATE ACCOUNT</a>
                </div>
            ";
    }
    $data= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1));
    $listItems = "";
    // sorting data by clients Surname
    usort($data, $a['ownerSurname']<=> $b['ownerSurname']);
    // $record = [id: asmkodas, ownerName: John, ownerSurname: Johnson, accountNumber: "IBAN", balance: "100Money"]
    foreach($data as $record){
        $ownerName = $record['ownerName'];
        $ownerSurname = $record['ownerSruname'];
        $accountNumber = $record['accountNumber'];
        $listItems.= "<li class='list-group-item'>  
                            <div class='col-3' style = 'padding-bottom : 15px'>
                            <?= $ownerName?> <?= $ownerSurname?>
                            </div>    
                            <div class='col-3' style = 'padding-bottom : 15px'>
                            <?= $accountNumber?>
                            </div>
                            <div class='col'>
                                <a href='http://localhost/delfinai/bank1/pages/createAccount.php' role='button' class='btn btn-success btn-sm' name=' <?= $accountNumber?>add'>ADD MONEY</a>
                                <a href='http://localhost/delfinai/bank1/pages/createAccount.php' role='button' class='btn btn-secondary btn-sm' name=' <?= $accountNumber?>withdraw'>WITHDRAW MONEY</a>
                                <a href='http://localhost/delfinai/bank1/pages/createAccount.php' role='button'class='btn btn-danger btn-sm' name=' <?= $accountNumber?>destroy'>DELETE ACCOUNT</a>
                            </div>
                        </li>";
    }
 return $listItems;
}
echo renderAccounts();