<?php
echo '+++++ 1 task +++++';
echo '<br>';
echo '<br>';
$vardas = 'Darijush';
$pavarde = 'Prokopovich';
$gimimoMetai = 1982;
$sieMetai = 2022;
$amzius = $sieMetai - $gimimoMetai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metų.";
echo '<br>';
echo '<br>';
echo '+++++ 2 task +++++';
echo '<br>';
echo '<br>';
$pirmasKintamasis = rand(0, 4);
$antrasKintamasis = rand(0, 4);
if ($pirmasKintamasis > $antrasKintamasis && $antrasKintamasis !== 0) echo number_format((float)(round(($pirmasKintamasis / $antrasKintamasis), 2)), 2, '.', '');
elseif ($antrasKintamasis > $pirmasKintamasis && $pirmasKintamasis !== 0) echo number_format((float)(round(($antrasKintamasis / $pirmasKintamasis), 2)), 2, '.', '');
else echo 'Dalyba iš 0 negalima';
echo '<br>';
echo '<br>';
echo '+++++ 3 task +++++';
echo '<br>';
echo '<br>';
$n1 = rand(0, 25);
$n2 = rand(0, 25);
$n3 = rand(0, 25);
if (max($n1, $n2, $n3) !== $n1 && min($n1, $n2, $n3) !== $n1) echo "Vidurinis $n1";
elseif (max($n1, $n2, $n3) !== $n2 && min($n1, $n2, $n3) !== $n2) echo "Vidurinis $n2";
elseif (max($n1, $n2, $n3) !== $n3 && min($n1, $n2, $n3) !== $n3) echo "Vidurinis $n3";
else echo "Du skaičiai vienodi";
echo '<br>';
echo '<br>';
echo '+++++ 4 task +++++';
echo '<br>';
echo '<br>';
$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) echo "Krastines $a, $b, $c: trikampis galimas.";
else echo "Su tokiomis krastinemis $a, $b, $c: trikampis neegzistuoja.";
echo '<br>';
echo '<br>';
echo '+++++ 5 task +++++';
echo '<br>';
echo '<br>';
$k1 = rand(0, 2);
$k2 = rand(0, 2);
$k3 = rand(0, 2);
$k4 = rand(0, 2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;
switch ($k1) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
}
switch ($k2) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
}
switch ($k3) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
}
switch ($k4) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
}
echo "Nuliu: $nuliai, Vienetu: $vienetai, Dvejetu: $dvejetai";
echo '<br>';
echo '<br>';
echo '+++++ 6 task +++++';
echo '<br>';
echo '<br>';
$atsitiktinisTagas = rand(1,6);
echo "<h$atsitiktinisTagas>$atsitiktinisTagas</h$atsitiktinisTagas>";
echo '<br>';
echo '<br>';
echo '+++++ 7 task +++++';
echo '<br>';
echo '<br>';
$spalvai1 = rand(-10,10);
$spalvai2 = rand(-10,10);
$spalvai3 = rand(-10,10);
switch ($spalvai1) {
    case 0:
        echo "<h6 style='color: red'>$spalvai1</h6>";
        break;
        case $spalvai1<0:
            echo "<h6 style='color: green'>$spalvai1</h6>";
            break;
            case $spalvai1>0:
                echo "<h6 style='color: blue'>$spalvai1</h6>";
            }
            switch ($spalvai2) {
                case 0:
                    echo "<h6 style='color: red'>$spalvai2</h6>";
                    break;
                    case $spalvai2<0:
                        echo "<h6 style='color: green'>$spalvai2</h6>";
                        break;
                        case $spalvai2>0:
                            echo "<h6 style='color: blue'>$spalvai2</h6>";
                        }
                        switch ($spalvai3) {
                            case 0:
                                echo "<h6 style='color: red'>$spalvai3</h6>";
                                break;
                                case $spalvai3<0:
                                    echo "<h6 style='color: green'>$spalvai3</h6>";
                                    break;
                                    case $spalvai3>0:
                                        echo "<h6 style='color: blue'>$spalvai3</h6>";
                                    }
echo '<br>';
echo '<br>';
echo '+++++ 8 task +++++';
echo '<br>';
echo '<br>';
$zvakiuKiekis = rand(5,3000);
$trijuProcNuolada = 0.97;
$keturiuProcNuolada = 0.96;
if ($zvakiuKiekis>1000 && $zvakiuKiekis<2001) {
    $viso = $zvakiuKiekis*$trijuProcNuolada;
    echo "Zvakiu: $zvakiuKiekis, Vnt.kaina su 3proc.nuolaida: $trijuProcNuolada, Viso: $viso";
}
elseif ($zvakiuKiekis>2000 ) {
    $viso = $zvakiuKiekis*$keturiuProcNuolada;
    echo "Zvakiu: $zvakiuKiekis, Vnt.kaina su 4proc.nuolaida: $keturiuProcNuolada, Viso: $viso";
}
else echo "Zvakiu: $zvakiuKiekis, Vnt.kaina: 1, Viso: $zvakiuKiekis";
echo '<br>';
echo '<br>';
echo '+++++ 9 task +++++';
echo '<br>';
echo '<br>';
$array = array(rand(0,100), rand(0,100), rand(0,100));
$average = array_sum($array) / count($array);
echo " Vidurkis: $average".'<br>';
$geruElementuKiekis = count($array);
$suma = array_sum($array);
for($i =0; $i<count($array); $i++){
    if($array[$i]<10 || $array[$i]>90){
        $geruElementuKiekis--;
        $suma-=$array[$i];
    }
}
if($geruElementuKiekis>0){
    $result = $suma/$geruElementuKiekis;
}else $result = 0;
echo "$geruElementuKiekis".'<br>';
echo "$suma".'<br>';
echo'<br>'."Kitas vidurkis: $result";
echo '<br>';
echo '<br>';
echo '+++++ 10 task +++++';
echo '<br>';
echo '<br>';
$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand (0,59);
echo "Buvo:$valandos:$minutes:$sekundes";
$papildomosSekundes = rand(0,300);
$naujosSekundes = $sekundes+$papildomosSekundes;
while($naujosSekundes>60){
    $naujosSekundes-=60;
    $minutes+=1;
}
if($minutes>=60){
    $minutes-=60;
    $valandos+=1;
}
if($valandos>=40){
    $valandos-=24;
}
echo '<br>';
echo "Dabar:$valandos:$minutes:$naujosSekundes";
echo '<br>';
echo '<br>';
echo '+++++ 11 task +++++';
echo '<br>';
echo '<br>';
$k1 = rand(1000,9999);
$k2 = rand(1000,9999);
$k3 = rand(1000,9999);
$k4 = rand(1000,9999);
$k5 = rand(1000,9999);
$k6 = rand(1000,9999);
$paskutinis = max($k1,$k2,$k3,$k4);
$pirmas  = min($k1,$k2,$k3,$k4);
$antras = 0;
$trecias = 0;
$sum = $k1+$k2+$k3+$k4;
// if(($k1<=>$pirmas) === 0)