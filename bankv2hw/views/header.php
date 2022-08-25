<nav class='navbar fixed-top navbar-light navbar-expand-lg' style='background-color: #e3f2fd;'>
    <a class='navbar-brand' href='<?= URL ?>'>
        <img src='<?= URL ?>BankV2.png' width='30' height='30' class='d-inline-block align-top' alt=''>
        BANK v.2
    </a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav'>
            <li class='nav-item'>
                <a class='nav-link' href='<?= URL ?>client'>ACCOUNTS LIST <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='<?= URL ?>create'>CREATE ACCOUNT</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='<?= URL ?>addMoney'>ADD MONEY</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='<?= URL ?>withdrawMoney'>WITHDRAW MONEY</a>
            </li>
            <?php if (isLogged()) : ?>
                <span class='navbar-text'>
                    Loged in: <?= $_SESSION['user']['name'] ?>
                </span>
                <form class='nav-item' method='POST' action="<?= URL ?>logout">
                    <button type='subbmit' class='nav-link'>LOG OUT</button>
                </form>
                <!-- <li class='nav-item'>
                    <a class='nav-link' href='#'>LOG OUT</a>
                </li> -->

            <?php else : ?>
                <li class='nav-item'>
                    <a class='nav-link' href='<?= URL ?>login"'>LOG IN</a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>