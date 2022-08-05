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
