<?php
App\App::view('top', ['title' => $title]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Withdraw Assets</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/withdraw/<?= $client['id'] ?>" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="type" value="<?= $client['name'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client namespace</small>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" class="form-control" name="weight" value="<?= $client['surname'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client surname</small>
                        </div>
                        <div class="form-group">
                            <label>IBAN</label>
                            <input type="text" class="form-control" name="weight" value="<?= $client['iban'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client surname</small>
                        </div>
                        <div class="form-group">
                            <label>Balance</label>
                            <input type="text" class="form-control" name="weight" value="<?= $client['balance'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client surname</small>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
App\App::view('bottom');
