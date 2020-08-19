<?php

session_start();
$_SESSION['Mensagem-de-erro']='';

$categorias = [];

$categorias[]="Infantil";
$categorias[]="adolescente";
$categorias[]="adulto";
$categorias[]="idoso";

$nome=$_POST['nome'];
$idade =$_POST['idade'];
$classifica ='';


if(empty($nome)){
    $_SESSION['Mensagem-de-erro']='O nome não pode ser vazio';
    header('location: index.php');
    return;
}

else if (strlen($nome) < 3){
    $_SESSION['Mensagem-de-erro']='O nome deve conter pelo menos 3 caracteres';
    header('location: index.php');
    return;
}
else if (strlen($nome) > 40){
    $_SESSION['Mensagem-de-erro']='O nome é muito extenso';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
   
    $_SESSION['Mensagem-de-erro']='a idade tem que ser numerica';
    header('location: index.php');
    return;

}

if($idade >=6 && $idade <=12)
{
    $classifica= 'infantil';
    $_SESSION['Mensagem-de-sucesso']=$nome  .' e um nadadador categoria ' .$classifica;;
    header('location: index.php');
    return;
}
else if($idade >=13 && $idade <=18)
{
    $classifica=   'adolescente';
    $_SESSION['Mensagem-de-sucesso']=$nome  .' e um nadadador categoria ' .$classifica;;
    header('location: index.php');
    return;
}
else
{
    $classifica= 'adulto';
    $_SESSION['Mensagem-de-sucesso']=$nome  .' e um nadadador categoria ' .$classifica;;
    header('location: index.php');
    return;
}
