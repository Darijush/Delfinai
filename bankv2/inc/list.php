<?php if (!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/clients.json')){
    view('noItemsToShow');
}elseif(json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/clients.json',1), true)== []){
    view('noItemsToShow');
}else{
    view('renderList');
}
    