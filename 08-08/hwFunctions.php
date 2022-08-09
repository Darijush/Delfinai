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
    foreach(range(1,$a) as $b){


        if($b!==1 && ($a%$b)===0 && $b!==$a){
            $count++;
        }
        $b++;
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
    $count =1;
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
print_r (generateArray($repeats));



