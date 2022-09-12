<?php
App\App::view('top', ['title' => $title]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card m-5">
                <div class="card-header">
                    <h2>Clients list</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($clients as $client) : ?>
                            <li class="list-group-item">
                                <div class="line">
                                    <div class="line__content">
                                        <div class="line__content__type">
                                           Name: <?= $client['name'] ?>
                                        </div>
                                        <div class="line__content__weight">
                                            Surname: <?= $client['surname'] ?> 
                                        </div>
                                        <div class="line__content__weight">
                                            IBAN: <?= $client['IBAN'] ?> 
                                        </div>
                                        <div class="line__content__weight">
                                            Balance: <?= $client['balance'] ?> 
                                        </div>
                                    </div>
                                    <div class="line__buttons">
                                        <a href="<?= URL . 'clients/addAssets/' . $client['id'] ?>" type="button" class="btn btn-outline-success m-2">Add Assets</a>
                                        <a href="<?= URL . 'clients/withdrawAssets/' . $client['id'] ?>" type="button" class="btn btn-outline-success m-2">Withdraw Assets</a>
                                        <form action="<?= URL ?>clients/delete/<?= $client['id'] ?>" method="POST">
                                            <button type="submit" class="btn btn-outline-danger m-2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
App\App::view('bottom');
