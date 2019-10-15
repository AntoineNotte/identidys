<?php 
session_start();

//calcule réponse sphere A
$a=0;
for ($i=1;$i <= 12;$i++){
foreach ($_POST['groupe'.$i] as $value)
{
   $a+=$value;
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
?>
<p>Sphere A <?php echo $a ?></p>
<p>Sphere B <?php echo $b ?></p>
<p>Sphere C <?php echo $c ?></p>
<p>Sphere D <?php echo $d ?></p>
<p>Sphere E <?php echo $e ?></p>