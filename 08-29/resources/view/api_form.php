<?php
App\App::view('top', ['title' => $title]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>To From Form</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>api/go" method="POST">
                        <div class="form-group">
                            <label>From</label>
                            <input type="text" class="form-control" name="from">
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" class="form-control" name="to">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Go</button>
                    </form>
                    <?php if($result) :?>
                    <div class="result">
                        From: <?= $result['from']?>
                        To: <?= $result['to']?>
                        Is <?= $result['d']?> km
                        
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
App\App::view('bottom');
