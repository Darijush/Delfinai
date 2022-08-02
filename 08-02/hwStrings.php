<?php
echo '+++++ 1 task +++++';
echo '<br>';
echo '<br>';
$aktVardas = 'Jim';
$aktPavarde = 'Carrey';
if(mb_strlen($aktVardas) > mb_strlen($aktPavarde)){
    echo "$aktVardas";
} else {
    echo "$aktPavarde";
}
echo '<br>';
echo '<br>';
echo '+++++ 2 task +++++';
echo '<br>';
echo '<br>';
echo strtoupper($aktVardas);
echo '<br>';
echo strtolower($aktPavarde);
echo '<br>';
echo '<br>';
echo '+++++ 3 task +++++';
echo '<br>';
echo '<br>';
$aktInitials = substr($aktVardas,0,1).'.'.substr($aktPavarde,0,1).'.';
echo "$aktInitials";
echo '<br>';
echo '<br>';
echo '+++++ 4 task +++++';
echo '<br>';
echo '<br>';
$aktLastThreeLetters = substr($aktVardas,-3,3).'.'.substr($aktPavarde,-3,3).'.';
echo "$aktLastThreeLetters";
echo '<br>';
echo '<br>';
echo '+++++ 5 task +++++';
echo '<br>';
echo '<br>';
$a = 'An American in Paris';
$raidesA = array('a','A');
echo str_replace($raidesA,"*",$a);
echo '<br>';
echo '<br>';
echo '+++++ 6 task +++++';
echo '<br>';
echo '<br>';
echo substr_count(strtoupper($a),'A');
echo '<br>';
echo '<br>';
echo '+++++ 7 task +++++';
echo '<br>';
echo '<br>';
$secondMovie = "Breakfast at Tiffany's";
$thirdMovie = "2001: A Space Odyssey";
$fourthMovie = "It's a Wonderful Life";
$vowels = array("a", "e", "i", "o", "u","y", "A", "E", "I", "O", "U","Y");
echo str_replace($vowels,'',$a);
echo '<br>';
echo str_replace($vowels,'',$secondMovie);
echo '<br>';
echo str_replace($vowels,'',$thirdMovie);
echo '<br>';
echo str_replace($vowels,'',$fourthMovie);
echo '<br>';
echo '<br>';
echo '+++++ 8 task +++++';
echo '<br>';
echo '<br>';
$episodeSearch = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$episodeFound = (int) filter_var($episodeSearch, FILTER_SANITIZE_NUMBER_INT);
echo "The episode number is: $episodeFound";
echo '<br>';
echo '<br>';
echo '+++++ 9 task +++++';
echo '<br>';
echo '<br>';
$longMovie = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$ilgasFilmas = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
function findNumberOfWords($b){
    $visiZodziai = str_word_count($b,1);
    $goodWords = 0;
    foreach($visiZodziai as $zodis){
        if (mb_strlen($zodis) < 6 && mb_strlen($zodis)>1){
            $goodWords++;
        }
    }
    echo "Zodziu trumpesniu nei 6 raides yra $goodWords";
}
findNumberOfWords($longMovie);
echo '<br>';
findNumberOfWords($ilgasFilmas);
echo '<br>';
echo '<br>';
echo '+++++ 10 task +++++';
echo '<br>';
echo '<br>';
function generateWord($length) {
    $possibleChars = "abcdefghijklmnopqrstuvwxyz";
    $word = '';
    
    for($i = 0; $i < $length; $i++) {
        $randomLetter = rand(0, strlen($possibleChars) - 1);
        $word .= substr($possibleChars, $randomLetter, 1);
    }
    
    return $word;
}
echo generateWord(3);
echo '<br>';
echo '<br>';
echo '+++++ 11 task +++++';
echo '<br>';
echo '<br>';
$listOfWords = [];

    while(count($listOfWords)!==10){
        $newWord = '';
        for($i =0; $i<2;$i++){
            $newWord.=generateWord(3);
        }
        echo $newWord;
        echo '<br>';
        if (!in_array($newWord, $listOfWords)){
            array_push($listOfWords,$newWord);
            
        }
    }
 shuffle($listOfWords);
   echo implode(" ",($listOfWords));
