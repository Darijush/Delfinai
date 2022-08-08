<?php
echo '<pre>';
function fun(string $a = 'Bla', array $b = [1,2]):string{ // obigatory to use tipes validation on input and output of function
    return $a;
}

$moreFun = function($b){ // noname functiona assigned to variable IS NOT SAME LIKE FUNCTION WITH NAME;
    $notFun = function($a){
        print_r("<h3>Hello!$a</h3>");
    };
    return $notFun($b);// brackets used to run function.
};

$moreFun('ddd');// two closed brackets ()() can be used to run inside function if it is not needed to call on instance;second or futher bracets can be filled with arguments for inside functions

// anonymous function can be used as property in other function inline
function doPrint($fun,$ka){
    return $fun($ka);
}
$burbulas = ' or GRYBAS 102';
$c = doPrint(fn($str)=>$str.$burbulas,'Grybas101');//inline function with arrowfunction can use outer variables without: use($variable)
echo $c;

$arr = [5,4,9,11,0,35,7];
usort($arr, fn($a,$b)=> $b<=>$a);

print_r($arr);
