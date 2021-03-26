<?php
$nomeA = !empty($_POST['nome']) ? $_POST['nome'] : null;
$telefoneA = !empty($_POST['telefone']) ? $_POST['telefone'] : null;
$controle = $_POST["controle"];

require_once 'Conexao.php';
require_once 'Contato.php';

$contato = new Contato($nomeA, $telefoneA);
$conexao = new Conexao();

if ($controle=="cadastrar"){
    $retorno=cadastrar($conexao,$contato);
    if ($retorno==true){
        header( "Location: index.php?menuop=consulta");
        exit;
    }
}

if ($controle=="editar"){
    $retorno=editar($conexao,$contato);
    if ($retorno==true){
        header( "Location: index.php?menuop=consulta");
        exit;
    }
}

function cadastrar(&$conexao,$contato){
    $insert = "insert into agenda values ('".$contato->getNome()."','".$contato->getTelefone()."',NULL)";
    $dados = $conexao->executa($insert);
    echo $dados;
    return $dados!= null && $dados > 0 ? true : false; //AQUI FALA:SE $DADOS DIFERENTE DE NULL E TAMBÉM DADOS MAIOR QUE ZERO, ENTÃO             VERDADEIRO, CASO CONTRÁRIO É FALSO. MAS É NECESSÁRIO?
}

function editar(&$conexao,$contato){
    $insert = "update agenda set ('nome','telefone') values ('".$contato->getNome()."','".$contato->getTelefone()."')";
    $dados = $conexao->executa($insert);
    echo $dados;
    return $dados!= null && $dados > 0 ? true : false; //AQUI FALA:SE $DADOS DIFERENTE DE NULL E TAMBÉM DADOS MAIOR QUE ZERO, ENTÃO             VERDADEIRO, CASO CONTRÁRIO É FALSO. MAS É NECESSÁRIO?
}





// $cadastrar = cadastrar();

// if ($cadastrar=true){
//     echo "<br>Cadastrado com Sucesso";
// } else {
//     echo "<br>Erro no cadastro.";
// }

?>

<!-- 	<body> -->
<!--          <div class = "cadastro">  -->
<!--          </div> -->
<!--     </body> -->