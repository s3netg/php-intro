<?
$categorias = [];

$categorias[]="Infantil";
$categorias[]="adolescente";
$categorias[]="adulto";
$categorias[]="idoso";



function defineCategoriaCompetidor(string $idade, string $nome):?string {

    if(validaNome($nome) && validaIdade($idade)){

        if($idade >=6 && $idade <=12)
        {
            $classifica= 'infantil';
            setarMenssagemSucesso($nome  .' e um nadadador categoria ' .$classifica);
            return null ;
        }
        else if($idade >=13 && $idade <=18)
        {
            $classifica=   'adolescente';
            setarMenssagemSucesso($nome  .' e um nadadador categoria ' .$classifica);
            return null;
        }
        else
        {
            $classifica= 'adulto';
            setarMenssagemSucesso($nome  .' e um nadadador categoria ' .$classifica);
            return null ;
        }
    }
    else {
        obterMensagemErro();
    }
}