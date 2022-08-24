<?php
require_once DIR.'classes/Iban.php';
$number = new Iban;
$number->createValidIBAN();
view('top');
view('header');?>
<div class='container' style = 'padding-top: 100px; color: crimson;'></div>
    <form class='container' method='POST'>
        <div class='form-group col-md-6'>
            <label for='iban'><h5>IBAN</h5></label>
            <input type='text' class='form-control' id='iban' value='<?=$number->iban?>' readonly name='IBAN' autocomplete='off'>
        </div>
        <div class='form-group col-md-6'>
            <label for='Name' class =''><h5>Name</h5><p >name must be only letters, minimum 3</p></label>
            <input type='text' class='form-control' id='Name' placeholder='Enter client name here' name='name'>
        </div>
        <div class='form-group col-md-6'>
            <label for='Surname' class ='labelComment'><h5>Surname</h5><p >name must be only letters, minimum 3</p></label>
            <input type='text' class='form-control' id='Surname' placeholder='Enter client surname here' name='surname'>
        </div>
        <div class='form-group col-md-6'>
            <label for='ClientId' class ='labelComment'><h5>Client personal ID</h5><p >ID must be valid 11 digits number</p></label>
            <input type='text' class='form-control' id='ClientId' placeholder='Enter client personal ID here' name='asmKodas'>
        </div>
        <div class='form-group col-md-6'>
            <button type='submit' class=' btn btn-primary btn-sm' style = 'margin-top: 30px'>SUBMIT CREATION</button>
        </div>
 
</form>
</body>
</html>
