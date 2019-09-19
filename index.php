<?php

foreach($_POST['reponse'] as $value)
{
   echo "La checkbox $value a été cochée<br>";
}
if(!$_POST['reponse']){
   echo "Aucune checkbox n'a été cochée";
}