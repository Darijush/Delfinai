<style>
    .starsT1{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.kvadratas{
    font-size: 12px;
  display: inline-block;
    /* flex-wrap: wrap;
    overflow-wrap: break-word; */
}
.span{
    display: inline-block;
    text-align: center; 
    line-height: 2px;
    margin-right: 10px;
    margin-bottom: 0px; 
    padding: 0px;
    width: 6px;
    height: 2px;
    text-justify: center;
}
.spanRed{
    display: inline-block;
    text-align: center; 
    line-height: 2px;
    margin-right: 10px;
    margin-bottom: 0px; 
    padding: 0px;
    width: 6px;
    height: 2px;px;
    color: red;
    text-justify: center;
    font-weight: bold;
}
.rombas{
    width: 600px;
    height: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align:center;
    border: 2px solid black;
    gap: 0px;
}
.romboEile{
    align-self: center;
    text-align:center;
    justify-content: center;
    margin:0px;
    line-height: 10px;
    font-size: 12px;
}
</style>
<?php
echo "<pre>";
echo '<br>';
echo '<br>';
echo '+++++ 1a task +++++';
echo '<br>';
echo '<br>';

$stars = '';
for ($i = 0; $i < 400; $i++){
    $stars.= '<p>*</p>';
}
echo "<div class = \"starsT1\">$stars</div>";
echo '<br>';
echo '<br>';
echo '+++++ 1b task +++++';
echo '<br>';
echo '<br>';
$stars = '';
for ($i = 0; $i < 8; $i++){
    for ($j = 0; $j < 50; $j++){
        $stars.= '*';
    }
    $stars.="\n";
}
echo "<div class = \"starsT1\">$stars</div>";
echo '<br>';
echo '<br>';
echo '+++++ 2 task +++++';
echo '<br>';
echo '<br>';
$skaiciai = [];
$skaitliukas = 0;
for ($i = 0; $i < 300; $i++){
    $s = rand(0,300);
    if ($s > 175){
        $skaitliukas++;
    }
    if($s > 275){
        array_push($skaiciai,"<p style='color:red'>$s</p>");
    }else{
        array_push($skaiciai,"<p>$s</p>");
    }
}
$skaiciaiTekstu = implode("&nbsp;",$skaiciai);
echo "<div class = \"starsT1\">$skaiciaiTekstu</div>";
echo '<br>';
echo '<br>';
echo '+++++ 3 task +++++';
echo '<br>';
echo '<br>';
$beLiekanos = [];
for ($i = 1; $i < rand(3000,4000); $i++){
    if(($i%77)===0){
        array_push($beLiekanos,"<span>$i</span>");
    }
}
$beLiekanosTextas = implode(",&nbsp;",$beLiekanos);
echo "<div  class = \"starsT1\">$beLiekanosTextas</div>";
echo '<br>';
echo '<br>';
echo '+++++ 4-5 task +++++';
echo '<br>';
echo '<br>';
$kvadratas = '';
for ($i = 0; $i < 100; $i++){
    for ($j = 0; $j < 100; $j++){
        if($j===$i || $j === (99-$i)){
        $kvadratas.= "<span class = \"spanRed\">*</span>";
    }else{
        $kvadratas.="<span class = \"span\">*</span>";;
    }
    }
    $kvadratas.="\n";
}
echo "<div  class = \"kvadratas\">$kvadratas</div>";
echo '<br>';
echo '<br>';
echo '+++++ 6 task +++++';
echo '<br>';
echo '<br>';
echo 'Vienas herbas: ';
$herbas =0;

do{
$drop = rand(0,1);
if ($drop === 0){
    echo 'H';
    $herbas++;
}else{
    echo 'S';
}

}while($herbas !== 1);

echo '<br>';
echo 'Trys herbai: ';
$herbas =0;

do{
    $drop = rand(0,1);
    if ($drop === 0){
        echo 'H';
        $herbas++;
    }else{
        echo 'S';
    }
    
    }while($herbas !== 3);

echo '<br>';
echo 'Trys herbai is eiles: ';
$herbas =0;

do{
    $drop = rand(0,1);
    if ($drop === 0){
        echo 'H';
        $herbas++;
    }else{
        echo 'S';
        $herbas = 0;
    }
    
    }while($herbas !== 3);

echo '<br>';
echo '<br>';
echo '+++++ 7 task +++++';
echo '<br>';
echo '<br>';
$PetroVisiTaskai = 0;
$KazioVisiTaskai = 0;
while(($PetroVisiTaskai<222) && ($KazioVisiTaskai<222)){
    $PetroBingo = rand(10,20);
    $KazioBingo = rand(5,25);
    if($PetroBingo > $KazioBingo){
    echo "Petro taskai : $PetroBingo, Kazio taskai: $KazioBingo. Partija laimejo: Petras";
    
    }else{  
        echo "Petro taskai : $PetroBingo, Kazio taskai: $KazioBingo. Partija laimejo: Kazys";
        
    }
    $PetroVisiTaskai += $PetroBingo;
    $KazioVisiTaskai += $KazioBingo;
    echo '<br>';
}
echo '<br>';
echo "Petro Bingo: $PetroVisiTaskai, Kazio Bingo: $KazioVisiTaskai";
echo '<br>';
echo '<br>';
echo '+++++ 8 task +++++';
echo '<br>';
echo '<br>';
$rombas = '';
$zenkluDaugilkis = 0;
for ($i = 1; $i < 21; $i++){
    if($zenkluDaugilkis <= 0  ){
        $rombas.="<p class = \"romboEile\"><span style=\"color:rgb(" . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ");\">*</span></p> \n";
        $zenkluDaugilkis+=2;
    }
    if ($i < 11){
        
        $augantiEile = str_repeat("<span style=\"color:rgb(" . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ");\">*</span>",$zenkluDaugilkis);
        $rombas.="<p class = \"romboEile\">$augantiEile</p>\n";
        $zenkluDaugilkis+=2;
    } 
    if($zenkluDaugilkis === 22){
        $zenkluDaugilkis-=2;
    }
    if($i > 10 && $i< 21){
        $zenkluDaugilkis-=2;
        if($zenkluDaugilkis >= 2){
            
        $mazejantiEile = str_repeat("<span style=\"color:rgb(" . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ");\">*</span>",$zenkluDaugilkis);
        $rombas.="<p class = \"romboEile\">$mazejantiEile</p>\n";        
        }else {$rombas.="<p class = \"romboEile\"><span style=\"color:rgb(" . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ");\">*</span></p> \n";}
        
    }

}
echo "<div  class = \"rombas\">$rombas</div>";
echo '<br>';
echo '<br>';
echo '+++++ 10 task +++++';
echo '<br>';
echo '<br>';
$vienaVinis = 850;
$mazuSmVienam = 0;
do{
    $mazasSmugis = rand(5,20);



        $vienaVinis-=$mazasSmugis;
        $mazuSmVienam++;

}while($vienaVinis> 0);
echo "Vienos vinies ikalimui reikia $mazuSmVienam  mazu smugiu \n";
echo '<br>';
echo '<br>';
echo '+++++ 10a task +++++';
echo '<br>';
echo '<br>';
$visoSmugiuPenkiom = 0;

for($i = 0; $i<5;$i++){
    $vienaVinis = 850;
    $mazuSmVienam = 0;  
    do{
        $mazasSmugis = rand(5,20);
    
    

            $vienaVinis-=$mazasSmugis;
            $mazuSmVienam++;

    }while($vienaVinis> 0);
    $visoSmugiuPenkiom+=$mazuSmVienam;
}

echo "Penkiu viniu ikalimui reikia $visoSmugiuPenkiom  mazu smugiu \n";
echo '<br>';
echo '<br>';
echo '+++++ 10b task +++++';
echo '<br>';
echo '<br>';
$visoSmugiuPenkiom = 0;

for($i = 0; $i<5;$i++){
    $vienaVinis = 850;
    $dideliuSmVienam = 0;  
    do{
        $didelisSmugis = rand(20,30);
        $pataikymas = rand(0,1);    // 0 jei nepataikom, 1 jei pataikom;
        if($pataikymas === 1){      
                $vienaVinis-=$didelisSmugis;
                $dideliuSmVienam++;
            }
    }while($vienaVinis> 0);
    $visoSmugiuPenkiom+=$dideliuSmVienam;
}
echo "Penkiu viniu ikalimui reikia $visoSmugiuPenkiom tiksliu dideliu smugiu \n";
echo '<br>';
echo '<br>';
echo '+++++ 11 task +++++';
echo '<br>';
echo '<br>';
$uniqNrs = [];
do{
    $number = rand(1,200);
    if (!in_array($number,$uniqNrs)){
        array_push($uniqNrs,$number);
    }
} while(count($uniqNrs)!== 50);
echo "Nepasikartojanciu skaiciu masyvas: \n";
echo implode(" ", ($uniqNrs));
echo '<br>';
$primeUniq = [];
for ($i = 0; $i < count($uniqNrs)-1; $i++){
    $n=0;
    $cheking = $uniqNrs[$i];
    for ($j = 2; $j < $cheking;$j++){
        if($cheking%$j == 0){
            $n++;
        }
    }
    if($n === 0){
        array_push($primeUniq,$uniqNrs[$i]);
    }
}
echo "Priminiu nepasikartojanciu skaiciu masyvas: \n";
echo implode(" ", ($primeUniq));
sort($primeUniq);
echo '<br>';
echo "Priminiu nepasikartojanciu skaiciu masyvas: \n";
echo implode(" ", ($primeUniq));