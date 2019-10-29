<?php 
session_start();

//calcule réponse sphere A
$a=0;
   for ($i=1;$i <= 12;$i++){
   foreach ($_POST['groupe'.$i] as $value)
   {
      if (($_POST['groupe4'][0] +  $_POST['groupe5'][0])==2 or 2.5 ){
         $a = 0;
         if(($_POST['groupe11'][0] +  $_POST['groupe12'][0])==2 or 2.5 ){

         }
         else {
         $a += $value;
      }}
      else{
         $a += $value;
      }
}}
  
//Calcule réponse sphere B
$b=0;
   for ($i = 13;$i <= 24;$i++){
      foreach($_POST['groupe'.$i] as $value)
      {
         $b+=$value;
      }
   }


//Calcule réponse sphere C
$c=0;
   for ($i = 25;$i <= 36;$i++){
      foreach($_POST['groupe'.$i] as $value)
      {
         $c+=$value;
      }
   }
// Calcule réponse sphere D
$d=0;
   for ($i = 37;$i <= 49;$i++){
      foreach($_POST['groupe'.$i] as $value)
      {
         $d+=$value;
      }
   }
// Calcule réponse sphere E
$e=0;
   for ($i = 61;$i <= 73;$i++){
      foreach($_POST['groupe'.$i] as $value)
      {
         $e+=$value;
      }
   }


// Rediréction sphere A
if($a<11.25){
   echo $a;
}
elseif($a>11.25 && $a<21){
   header('Location:./sphereA.php');
}
elseif($a>21){
   header('Location: ./sphereA.php');
}

// Redirection sphereB 
if($b<6){
   echo "it's ok";
}
elseif($b>6 && $b<17.5){
   header('Location: ./sphereB.php');
}
elseif($b>17.5 && $b<24){
   header('Location: ./sphereB.php');
}

//Redirection sphereC
if($c<10.5){
   echo "it's ok";
}
elseif($c>10.5&& $c<19.5){
   header('Location: ./sphereC.php');
}
elseif($c>19.5 && $c<24){
   header('Location: ./sphereC.php');
}

//Redirection sphereD
if($d<4){
   echo "it's ok";
}
elseif($d>4 && $d<14){
   
}
?>
