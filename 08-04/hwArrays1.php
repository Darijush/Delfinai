<?php
echo '<pre>';
echo '<br>';
echo '<br>';
echo '+++++ 1 task +++++';
echo '<br>';
echo '<br>';
$mas = [];
foreach(range(0,29) as $num){
    $element = rand(5,25);
    $mas[] = $element;
}
// print_r($mas); 

echo '<br>';
echo '<br>';
echo '+++++ 2a task +++++';
echo '<br>';
echo '<br>'; 

$moreThanTen = 0;
foreach($mas as $el){
    if($el>10){
        $moreThanTen++;
    }
}
echo $moreThanTen;

echo '<br>';
echo '<br>';
echo '+++++ 2b task +++++';
echo '<br>';
echo '<br>'; 

$biggestEl = max($mas);
$biggestElIndex = array_search($biggestEl,$mas);

echo "Didziausias skaicius: $biggestEl, su indeksu: $biggestElIndex";

echo '<br>';
echo '<br>';
echo '+++++ 2c task +++++';
echo '<br>';
echo '<br>';

$evenInSum=0;
foreach($mas as $i=>$v){
    if($i%2 === 0){
        $evenInSum+=$v;
    }
}
echo $evenInSum;

echo '<br>';
echo '<br>';
echo '+++++ 2d task +++++';
echo '<br>';
echo '<br>';

$mas2 =[];
foreach($mas as $i=>$v){
    $mas2[]=($v-$i);
}
// print_r($mas2); 

echo '<br>';
echo '<br>';
echo '+++++ 2e task +++++';
echo '<br>';
echo '<br>';

foreach(range(0,9) as $num){
    $element = rand(5,25);
    $mas[] = $element;
}
// print_r($mas); 

echo '<br>';
echo '<br>';
echo '+++++ 2f task +++++';
echo '<br>';
echo '<br>';

$mas3 = [];
$mas4 = [];
foreach($mas as $i=>$v){
    if($i%2 === 0){
        $mas3[] = $v;
    } else {
        $mas4[] =$v;
    }

}
// print_r($mas3);
// print_r($mas4);

echo '<br>';
echo '<br>';
echo '+++++ 2g task +++++';
echo '<br>';
echo '<br>';

foreach($mas as $i=>&$l){
    if(($i%2 === 0) && ($l > 15)){
    $l=0;
    }
}
// print_r($mas);
unset($l);

echo '<br>';
echo '<br>';
echo '+++++ 2h task +++++';
echo '<br>';
echo '<br>';

foreach($mas as $i=>$v){
    if($v > 10){
    echo $i;
    break;
    }  
}

echo '<br>';
echo '<br>';
echo '+++++ 2i task +++++';
echo '<br>';
echo '<br>';

foreach($mas as $i=>$v){
    if($i%2 === 0){
        unset($mas[$i]);
    }

}
print_r($mas);

echo '<br>';
echo '<br>';
echo '+++++ 3 task +++++';
echo '<br>';
echo '<br>';

function randLetter()
{
    $int = rand(0,3);
    $A_D = "ABCD";
    $rand_letter = $A_D[$int];
    return $rand_letter;
}

$letterArray = [];
foreach(range(1,200) as $num){
    $n = randLetter();
    $letterArray[]=$n;
}
// print_r($letterArray);

$letterA = 0;
$letterB = 0;
$letterC = 0;
$letterD = 0;
foreach($letterArray as $letter){
    if ($letter === 'A') {
        $letterA++ ;
      } elseif ($letter == 'B') {
        $letterB++ ;
      } elseif ($letter == 'C') {
        $letterC++ ;
      } else {
        $letterD++;
      }
    
}
echo"A:$letterA, B:$letterB, C:$letterC,D: $letterD";  

echo '<br>';
echo '<br>';
echo '+++++ 4 task +++++';
echo '<br>';
echo '<br>';

sort($letterArray);
// print_r($letterArray);

echo '<br>';
echo '<br>';
echo '+++++ 5 task +++++';
echo '<br>';
echo '<br>';

$lrAr1 = [];
$lrAr2 = [];
$lrAr3 = [];
foreach(range(1,200) as $num){
    $n = randLetter();
    $lrAr1[]=$n;
    $n = randLetter();
    $lrAr2[]=$n;
    $n = randLetter();
    $lrAr3[]=$n;
}
// print_r($lrAr1);
// print_r($lrAr2);
// print_r($lrAr3);
$jointLrAr=[];
foreach($lrAr1 as $in=>$lt){
    $jointLrAr[]= $lrAr1[$in].$lrAr2[$in].$lrAr3[$in];
}
// print_r($jointLrAr);

$uniqCombos = [];
$uniqRepeatCount = 0;
foreach ($jointLrAr as $combo){
    if(!in_array($combo, $uniqCombos)){
        $uniqCombos[]=$combo;
    }else{
        $uniqRepeatCount++;
    }
}
echo '<br>';
// print_r($uniqCombos);
echo '<br>';
echo $uniqRepeatCount;

$dups = [];
foreach(array_count_values($jointLrAr) as $val => $c){
    if($c > 1) $dups[] = $val;
}
echo '<br>';
$noDupCount = count($uniqCombos)-count($dups);
echo $noDupCount;

echo '<br>';
echo '<br>';
echo '+++++ 6 task +++++';
echo '<br>';
echo '<br>';
$pirmasRandom = [];
$anrasRandom = [];
while(count($pirmasRandom)!== 100){
    $x = rand(100,900);
    if(!in_array($x, $pirmasRandom)){
        $pirmasRandom[]=$x;
    }
}
while(count($anrasRandom)!== 100){
    $x = rand(100,900);
    if(!in_array($x, $anrasRandom)){
        $anrasRandom[]=$x;
    }
}
// print_r($pirmasRandom);
// print_r($anrasRandom);
echo '<br>';
echo '<br>';
echo '+++++ 7 task +++++';
echo '<br>';
echo '<br>';
$notInSecond = [];
foreach($pirmasRandom as $number){
    if(!in_array($number, $anrasRandom)){
        $notInSecond[]=$number;
    }
}
// print_r($notInSecond);
echo '<br>';
echo '<br>';
echo '+++++ 8 task +++++';
echo '<br>';
echo '<br>';
$dupsInBoth = [];
foreach($pirmasRandom as $a){
    if(in_array($a, $anrasRandom)){
        $dupsInBoth[]=$a;
    }
}
print_r($dupsInBoth);
echo '<br>';
echo '<br>';
echo '+++++ 9 task +++++';
echo '<br>';
echo '<br>';
$valToIndex = [];
foreach($pirmasRandom as $ind => $c){
    $valToIndex[$c]=$anrasRandom[$ind];
}
// print_r($valToIndex);

echo '<br>';
echo '<br>';
echo '+++++ 10 task +++++';
echo '<br>';
echo '<br>';

$randToSum = [];
foreach(range(0,9) as $n){
    $y = rand(5,25);
    if(count($randToSum)<2){
        $randToSum[]=$y;
    }else{
        $randToSum[]=$randToSum[$n-1]+$randToSum[$n-2];
    }

}
print_r($randToSum);

echo '<br>';
echo '<br>';
echo '+++++ 11 task +++++';
echo '<br>';
echo '<br>';

