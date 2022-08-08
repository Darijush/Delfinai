
<style>
.kvadratas{
    font-size: 20px;
    display: flex;
    flex-direction:column;
    width: 200px;
    height:200px;
    text-align: center;
}
.row{
    display:flex;
    flex-direction: row;
    align-items: space-around;
    width:100%;
    gap: 10px;
}

</style>
<?php
echo '<pre>';
echo '<br>';
echo '<br>';
echo '+++++ 1 task +++++';
echo '<br>';
echo '<br>';

$_10X5=[];
foreach (range(0,9) as $a) {
    foreach (range(0,4) as $b) {
        $_10X5[$a][$b] = rand(5,25);
    }
}
print_r($_10X5);

echo '<br>';
echo '<br>';
echo '+++++ 2a task +++++';
echo '<br>';
echo '<br>';
$count11 = 0;
foreach ($_10X5 as $a) {
    foreach ($a as $b) {
        if($b>10){
            $count11++;
        }
    }
}
echo $count11;
echo '<br>';
echo '<br>';
echo '+++++ 2b task +++++';
echo '<br>';
echo '<br>';
$biggest = 0;
foreach ($_10X5 as $a) {
    foreach ($a as $b) {
        if($b>$biggest){
            $biggest=$b;
        }
    }
}
echo $biggest;
echo '<br>';
echo '<br>';
echo '+++++ 2c task +++++';
echo '<br>';
echo '<br>';
$indexSum = [0,0,0,0,0];

foreach ($_10X5 as $a) {
    $index=0;
    foreach ($a as $i=>$b) {
        if($i===$index){
           $indexSum[$i]=$b+$indexSum[$index];
            $index++;
        }
    }
}
print_r($indexSum);

echo '<br>';
echo '<br>';
echo '+++++ 2d task +++++';
echo '<br>';
echo '<br>';
foreach ($_10X5 as &$a) {
  
        while(count($a)< 17){
        $element = rand(5,25);
        $a[] = $element;
    }
    
}
unset($a);
print_r($_10X5);
echo '<br>';
echo '<br>';
echo '+++++ 2e task +++++';
echo '<br>';
echo '<br>';
$summArr = [];
foreach ($_10X5 as $a) {
    $sum=0;
    foreach ($a as $b) {
        $sum+=$b;
        }
    $summArr[]=$sum;
}
print_r($summArr);
echo '<br>';
echo '<br>';
echo '+++++ 3 task +++++';
echo '<br>';
echo '<br>';
$_10XLetters=[];
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomLetter = $characters[rand(0, $charactersLength - 1)];


foreach (range(0,9) as $a) {
    foreach (range(0,rand(1,20)) as $b) {
        $randomLetter = $characters[rand(0, $charactersLength - 1)];
        $_10XLetters[$a][$b] = $randomLetter;
    }
    
}
foreach ($_10XLetters as &$a) {
  asort($a);
}
unset($a);
print_r($_10XLetters);
echo '<br>';
echo '<br>';
echo '+++++ 4 task +++++';
echo '<br>';
echo '<br>';
function cmp($a, $b)
{
    return count($a) <=> count($b);
}
function cmp2($a, $b)
{

    if ( in_array('K',$a) && in_array('K',$b)) {
        return 0;
    }
    return ((in_array('K',$a) && !in_array('K',$b)) || (!in_array('K',$a) && in_array('K',$b))) ? 1 : -1;

}
usort($_10XLetters,'cmp');
usort($_10XLetters,'cmp2');
print_r($_10XLetters);
echo '<br>';
echo '<br>';
echo '+++++ 5 task +++++';
echo '<br>';
echo '<br>';

$users=[];
foreach (range(0,29) as $a) {
    $user=[];
    $id =[];
    foreach (range(0,1) as $b) {
        $i = rand(0, 1000000);
        $place = rand(0,100);
        if(!in_array($i,$id)){
            $user['user_id']= $i;
            $user['place_in_row'] = $place;
            $id[]= $i;
        }
    }
    $users[]=$user;
}
print_r($users);

echo '<br>';
echo '<br>';
echo '+++++ 6 task +++++';
echo '<br>';
echo '<br>';

function cmp3($a, $b)
{
    return $a['user_id'] <=> $b['user_id'];
}

function cmp4($a, $b)
{
    return $b['place_in_row'] <=> $a['place_in_row'];
}
usort($users,'cmp3');
print_r($users);
echo '<br>';
usort($users,'cmp4');
print_r($users);
echo '<br>';
echo '<br>';
echo '+++++ 7 task +++++';
echo '<br>';
echo '<br>';
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
foreach ($users as &$ur) {
        $name = generateRandomString(rand(5,15));
        $surname = generateRandomString(rand(5,15));
        $ur['name']=$name;
        $ur['surname']=$surname;   
}
print_r($users);
unset($ur);

echo '<br>';
echo '<br>';
echo '+++++ 8 task +++++';
echo '<br>';
echo '<br>';
$randLenghtArray = [];
foreach (range(0,9) as $a) {
    $c = rand(0,5);
    if($c === 0){
        $randLenghtArray[]=rand(0,10);
    }else{
        $randArray=[];
        foreach (range(0,$c) as $b) {
            $randArray[] = rand(0,10);
        }
        $randLenghtArray[]=$randArray;
    }
}
print_r($randLenghtArray);

echo '<br>';
echo '<br>';
echo '+++++ 9 task +++++';
echo '<br>';
echo '<br>';
$totalSum = 0;
foreach ($randLenghtArray as $a) {
    if(!is_array($a)){
        $totalSum+=$a;
    }else{
        $smallArraySum=array_sum($a);
        $totalSum += $smallArraySum;
    }
}
echo $totalSum;
echo '<br>';
echo '<br>';
function cmp5($a, $b)
{
    return ((is_array($a))? array_sum($a):$a) <=> ((is_array($b))? array_sum($b):$b);
}
usort($randLenghtArray,'cmp5');
print_r($randLenghtArray);

echo '<br>';
echo '<br>';
echo '+++++ 10 task +++++';
echo '<br>';
echo '<br>';

$colorSigns =[];
$symbols = '#%+*@裡';
foreach(range(0,9) as $a){
    foreach(range(0,9) as $b){
        $symbols = '#%+*@裡';
        $colorSigns[$a][$b]['value']=$symbols[rand(0, mb_strlen($symbols) - 1)];
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        $colorSigns[$a][$b]['color']=$color;
    }
}
print_r($colorSigns);
$kvadratas = '';
foreach($colorSigns as $row){
    $styledRow = '';
    foreach($row as $el){
            $z = $el['color'];
            $pr = $el['value'];
            $styledRow.= "<span style = \"color:$z\">$pr</span>";
    }
    $kvadratas.="<div class = \"row\">$styledRow</div>";
}
echo "<div  class = \"kvadratas\">$kvadratas</div>";


echo '<br>';
echo '<br>';
echo '+++++ 11 task +++++';
echo '<br>';
echo '<br>';

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
$numberOne = $a;
$numberTwo = $b;
$arrayLength = count($c);
$z = (array_sum($c)-$numberTwo*$arrayLength)/($numberOne-$numberTwo);
$y = $arrayLength-$z;


echo '<br>';
echo "<h3>Skaičius $numberOne yra pakartotas '.$z.' kartų, o skaičius $numberTwo - '.$y.' kartų.</h3>";
echo '<br>';


