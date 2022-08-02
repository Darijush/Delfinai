<?php
$p = ['S','M','L','XL'][rand(0,3)];
echo "Siuntejas atnese: $p";
echo '<br>';
// if ($p === 'S'){
//     echo 'Tikrinam S <br>';
// }
// if ($p === 'S'||$p === 'M'){
//     echo 'Tikrinam M <br>';
// }
// if ($p === 'S'||$p === 'M'||$p === 'L'){
//     echo 'Tikrinam L <br>';
// }
// if ($p === 'S'||$p === 'M'||$p === 'L'||$p === 'XL'){
//     echo 'Tikrinam XL <br>';
// }
switch($p){
    case 'S': echo 'Tikrinam S <br>';
    case 'M': echo 'Tikrinam M <br>';
    case 'L': echo 'Tikrinam L <br>';
    case 'XL': echo 'Tikrinam XL <br>';
}