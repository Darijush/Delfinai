<style>
.linija{
    width: 80%;
    display: flex;
    flex-direction:row;
    flex-wrap:wrap;
    align-items:center;
    justify-content:space-between;
    text-align:center;

}
</style>
<?php
echo '<br>';
echo '<br>';
echo '+++++ 1 task +++++';
echo '<br>';
echo '<br>';

function toH3(string $a):string{
    return "<h3>$a</h3>";
}

echo toH3('Print this');

echo '<br>';
echo '<br>';
echo '+++++ 2 task +++++';
echo '<br>';
echo '<br>';


function toHrandom (string $a, int $b):string{
    return "<h$b>$a</h$b>";
};
echo toHrandom('Custom text', rand(1,6));

echo '<br>';
echo '<br>';
echo '+++++ 3 task +++++';
echo '<br>';
echo '<br>';

$toH1 = function (string $a):string{
    return "<h1>$a</h1>";
};
$randomString = md5(time());
echo $randomString;
echo '<br>';

$newstring = preg_replace_callback(
    "/(\d+)/",
    fn($match)=>  ($toH1($match[0])) ,
    $randomString
    );
echo "<div class ='linija'>$newstring</div>"; 

echo '<br>';
echo '<br>';
echo '+++++ 4 task +++++';
echo '<br>';
echo '<br>';

function moZero(int $a):int{
    $count = 0;
    if($a === 1){
        return 0;
    }
    foreach(range(2,($a-1)) as $b){


        if(($a%$b)===0){
            $count++;
        }

    }
    return $count;
}

$c = rand(1,30);
echo $c;
echo '<br>';
echo moZero($c);


echo '<br>';
echo '<br>';
echo '+++++ 5 task +++++';
echo '<br>';
echo '<br>';

$arr1 = [];
foreach(range(1,100) as $_){
    $arr1[]=rand(33,77);
}
// echo '<pre>';
// print_r($arr1);
usort($arr1,fn($a,$b)=> ((moZero($b))<=> (moZero($a))));
echo '<pre>';
print_r($arr1);

echo '<br>';
echo '<br>';
echo '+++++ 6 task +++++';
echo '<br>';
echo '<br>';

$arr2 = [];
foreach(range(1,100) as $_){
    $arr2[]=rand(333,777);
}

function deletePrimary($arr){
    $array = $arr;

    foreach($array as $i=>$v){

        if(moZero($v)===0){
            unset($array[$i]);
        }
    }
    return $array = array_values($array);
}

echo '<pre>';
print_r(deletePrimary($arr2));

echo '<br>';
echo '<br>';
echo '+++++ 7 task +++++';
echo '<br>';
echo '<br>';


 function generateArray ($repeats)   {
    $randArray = [];
    $num=rand(10,20);
    if ($repeats === 0){
    foreach (range(1,$num)as $n){
        if($n<$num){
        $randArray[]=rand(0,10);
        }elseif($n === $num){
        $randArray[] = 0;
        }
        }
    }elseif ($repeats > 0){
        foreach (range(1,$num)as $n){
            if($n<$num){
            $randArray[]=rand(0,10);
            }elseif($n === $num){
            $randArray[] = generateArray($repeats - 1);
            }
            }

    }

    return $randArray;
};
$repeats = rand(10,30);
$multiArray = generateArray($repeats);
print_r ($multiArray);

echo '<br>';
echo '<br>';
echo '+++++ 8 task +++++';
echo '<br>';
echo '<br>';

function calculateArray ($array)   {
    $totalSum = 0;
    foreach ($array as $n){
            if(!is_array($n)){
            $totalSum+=$n;
                }else{
                $totalSum+=calculateArray($n);
                }
        }

    return $totalSum;
};
echo (calculateArray($multiArray));

echo '<br>';
echo '<br>';
echo '+++++ 9 task +++++';
echo '<br>';
echo '<br>';

$arrayOf3 = [];
foreach (range(1,3)as $_){
    $arrayOf3[]=rand(1,33);
    }
echo '<br>';
print_r ($arrayOf3);
function addPrimary ($array){
    $modifiedArray = $array;
    $len = count($modifiedArray);

    if((moZero($modifiedArray[$len-1])=== 0) && (moZero($modifiedArray[$len-2]) === 0) && (moZero($modifiedArray[$len-3]) === 0)){
        return $modifiedArray;
    }else{
        $modifiedArray[]=rand(1,33);

        return addPrimary($modifiedArray);
    }

}
$resultOf3 = addPrimary($arrayOf3);
print_r($resultOf3);

echo '<br>';
echo '<br>';
echo '+++++ 10 task +++++';
echo '<br>';
echo '<br>';
$array10X10 = [];
foreach (range(0,9)as $n){
    foreach (range(0,9)as $m)
    $array10X10[$n][$m]=rand(1,100);
    }
echo '<br>';
// print_r ($array10X10);

function primaryAvegrage ($array, $a)   {
    $modifiedArray = $array;
    $primaryArray = [];
    $countRepeats = $a;
    foreach ($modifiedArray as $n){
        foreach($n as $m){
            if(moZero($m) === 0){
            $primaryArray[] = $m;
        }
    }
    }
    $average = array_sum($primaryArray)/count($primaryArray);
    if($average >= 70){
        return [$average,$countRepeats,$primaryArray];
    }else{
        $minimal = $modifiedArray[0][0];
        foreach ($modifiedArray as $n){
            foreach($n as $m)
                if($m < $minimal){
                    $minimal = $m;
            }
            }
            foreach ($modifiedArray as &$l){
                foreach($l as &$k)
                    if($k === $minimal){
                        $k+=3;
                        break;
                }
            }
    unset($k);
    unset($l);
    $countRepeats++;
    return primaryAvegrage($modifiedArray,$countRepeats);
}
    
};
$result10X10 = primaryAvegrage($array10X10, 1);
echo '<br>';
print_r ($result10X10);




