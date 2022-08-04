<?php
echo '<pre>';

$mas =[];

$mas['ziurke'] = 'ziurkenas';

$mas[]='kate';

$mas[7]='suo';

$mas[0]='dramblis';

$mas[]='kate';

print_r($mas);

foreach(range(0,4) as $val){
    echo "Dabar: $val \n";
}
$color = ['red', 'green', 'blue', 'yellow'];

foreach($color as &$value){}

unset ($value); 
// butinai unset po nuorodos panaudojimo '&$' nes gali buti kita karta naudojamas tas pats kintamasis (siam pvz. $value) o jis tures reiksme;

foreach($color as $value){}

print_r($color);

$colors = [
    ['red', 'green', 'blue'],
    ['dramblys', 'briedis', 'barsukas', 'bebras', 'traktorius'], 
    [77,12]
];

// echo $colors[1][0];

foreach($colors as $stalcius){
    foreach($stalcius as $daiktas){
        echo "$daiktas \n";
    }
}

$mas = [];

