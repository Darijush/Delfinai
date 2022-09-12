<?php
App\App::view('top', ['title' => $title]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Add Assets</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/add/<?= $client['id'] ?>" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="<?= $client['name'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client namespace</small>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" class="form-control" name="surname" value="<?= $client['surname'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client surname</small>
                        </div>
                        <div class="form-group">
                            <label>IBAN</label>
                            <input type="text" class="form-control" name="iban" value="<?= $client['IBAN'] ?>">
                            <small id="emailHelp" class="form-text text-muted">Client surname</small>
                        </div>
                        <div class="form-group">
                            <label>Balance</label>
                            <input type="text" class="form-control" name="balance" value="<?= $client['balance'] ?>">
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
