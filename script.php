<?php

$categorias = [];

$categorias[]="Infantil";
$categorias[]="adolescente";
$categorias[]="adulto";
$categorias[]="idoso";

$nome=$_POST['nome'];
$idade =$_POST['idade'];
$classifica ='';


if(empty($nome)){
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";

    echo 'o nome não pode ser vazio';
    return ;
}

if (strlen($nome) < 3){
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";

    echo ' o nome deve conter mais de 3 caracters';
    return;
}
if (strlen($nome) > 40){
    echo ' o nome é muito extenso';
    return;
}

if(!is_numeric($idade)){
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";

    echo ' a idade tem que ser numerica ';
    return;

}

if($idade >=6 && $idade <=12)
{
    $classifica= 'infantil';
}
else if($idade >=13 && $idade <=18)
{
    $classifica=   'adolescente';
}
else
{
    $classifica= 'adulto';
}

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
  
echo "<h2> O nadador " .$nome ."  compete na categoria " .$classifica  ."</h2>";
