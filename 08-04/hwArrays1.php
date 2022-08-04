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

$letterCount= [];
foreach($letterArray as $index=>$letter){
    if(!in_array($letter,$letterCount)){
        $letterCount[]=$letter;
    }else{
        $index++;
    }
}
print_r($letterCount);