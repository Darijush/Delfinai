<style>
    .starsT1{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    overflow-wrap: break-word;
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
        array_push($beLiekanos,"<p>$i, </p>");
    }
}
$beLiekanosTextas = implode("",$beLiekanos);
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