<?php
require_once DIR . 'classes/Account.php';
function renderAccounts()
{
    $data = Account::dataDecode();
    $listItems = "";
    // [{"id":"38209020541","name":"Darijus","surname":"Prokopovic","IBAN":"LT554943755196396177","balance":0}]
    foreach ($data as $record) {
        $ownerName = $record['name'];
        $ownerSurname = $record['surname'];
        $accountNumber = $record['IBAN'];
        $balance = number_format($record['balance'], 2);
        $listItems .= "<li class='list-group-item'>  
                            <div class='col-3' style = 'padding-bottom : 15px'>
                            $ownerName $ownerSurname
                            </div>    
                            <div class='col-3' style = 'padding-bottom : 15px'>
                            $accountNumber
                            </div>
                            <div class='col-3' style = 'padding-bottom : 15px'>
                            Balance: $balance
                            </div>
                            <div class='col' style='display:flex; gap:10px'>
                            <form method = 'POST' action ='addMoney'>
                                <button type='subbmit' class='btn btn-success btn-sm' name='addMoney' value='$accountNumber'>ADD MONEY</button>
                            </form>
                            <form method = 'POST' action ='withdrawMoney'>
                                <button type='subbmit' class='btn btn-secondary btn-sm' name='withdrawMoney' value='$accountNumber'>WITHDRAW MONEY</button>
                            </form>
                            <form method = 'POST' action ='deleteAcc'>
                                <button type='subbmit' class='btn btn-danger btn-sm' name='deleteAcc' value='$accountNumber'>DELETE ACCOUNT</button>
                        </li>";
    }
    $fullList = "    <div class='container'>
    <ul class='list-group col-10'>
    $listItems
    </ul>
</div>";
    return $fullList;
}
echo renderAccounts();
