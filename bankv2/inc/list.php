<?php if (!file_exists(DIR.'inc/clients.json')){
    view('noItemsToShow');
}elseif(json_decode(file_get_contents(DIR.'inc/clients.json',1), true)== []){
    view('noItemsToShow');
}else{
    view('renderList');
}
    