<?php

$a=0;
foreach ($_POST['reponse'] as $value)
{
  $a+=$value;
}
echo $a;
if(!$_POST['reponse']){
   echo "Aucune checkbox n'a été cochée";
}

if($a==2){
   echo 'niveau 3';
}