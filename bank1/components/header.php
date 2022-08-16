<?php
function renderHeader (){
    $header = "    <nav class='navbar fixed-top navbar-light navbar-expand-lg' style='background-color: #e3f2fd;'>
                        <a class='navbar-brand' href='http://localhost/delfinai/bank1/main.php'>
                            <img src='.\img\BankV1.png' width='30' height='30' class='d-inline-block align-top' alt=''>
                            BANK v.1
                        </a>
                        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarNav'>
                            <ul class='navbar-nav'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='http://localhost/delfinai/bank1/main.php'>ACCOUNTS LIST <span class='sr-only'>(current)</span></a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='http://localhost/delfinai/bank1/pages/createAccount.php'>CREATE ACCOUNT</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='http://localhost/delfinai/bank1/pages/addAssets.php'>ADD MONEY</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='http://localhost/delfinai/bank1/pages/withdrawAssets.php'>WITHDRAW MONEY</a>
                                </li>
                                <!--
                                <li class='nav-item' disabled>
                                    <a class='nav-link' href='#'>LOG IN</a>
                                </li>

                                <span class='navbar-text'>
                                Loged in: name
                                </span>
                                <li class='nav-item' disabled>
                                    <a class='nav-link' href='#'>LOG OUT</a>
                                </li>
                                --> 
                            </ul>
                        </div>
                    </nav>";
return $header;
}
echo renderHeader();