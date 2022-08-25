<?php
view('top');
view('header');?>
<div class='container' style = 'padding-top: 100px'>
            "Enter username and password for Bank V2 user login
            <div>
            </div>
        </div>
    <form class='container' method='POST' action="<?= URL.'login'?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name='username' pattern="[a-zA-Z0-9]+" placeholder="Enter new username here" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput2" name='password' placeholder="Enter password here">
        </div>
        <div class="form-group">
            <button type='submit' class=' btn btn-primary ' style = 'margin: 70px 20px 0px 20px'>LOG IN</button>
        </div>
    </form>



<?php
view('bottom');