<?php


//calcule réponse sphere A
$a=0;
for ($i=1;$i <= 12;$i++){
foreach ($_POST['reponse'.$i] as $value)
{
   $a+=$value;
}}

if($a<11.25){
   echo 'Tout est ok';
}
else if($a>11.25 && $a<21){
   echo 'a surveiller';
}
else {
   echo 'a risque';
}

// calcule réponse sphere B

