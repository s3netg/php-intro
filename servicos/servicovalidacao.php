<?

echo  validaNome("pedro");

function validaNome(string $nome): bool{
    if(empty($nome)){
        setarMenssagemErro('O nome não pode ser vazio');
        return false;
    }

    else if (strlen($nome) < 3){
        setarMenssagemErro('O nome deve conter pelo menos 3 caracteres');
       return false;
    }
    else if (strlen($nome) > 40){
        setarMenssagemErro('O nome é muito extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade):bool{
    if(!is_numeric($idade)){
    
        setarMenssagemErro('a idade tem que ser numerica');
       
        return false;

    }
    return true;
}