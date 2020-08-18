<?php

$categorias = [];

$categorias[]="Infantil";
$categorias[]="adolescente";
$categorias[]="adulto";
$categorias[]="idoso";

$nome='Eduardo';
$idade = 8;

if($idade >=6 && $idade <=12)
{
    echo 'infantil';
}
else if($idade >=13 && $idade <=18)
{
    echo 'adolescente';
}
else
{
    echo 'adulto';
}


for ($i = 0; $i <= count($categorias)-1; $i++) {
    echo "\r\n"; 
   printf( $categorias[$i] );
   echo "\r\n";
}
$i=0;
while($i < count($categorias)){
    echo $categorias[$i];
    $i++;
}