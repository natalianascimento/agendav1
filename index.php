<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
        <title>Agenda Telef�nica</title>
    </head>
    
    <body>
        <h1>Agenda Telefonica</h1>
        
        <div class = "menu">
        <nav>
        	<a href="index.php?menuop=home">Home</a> |
        	<a href="index.php?menuop=cadastro">Cadastrar Novo Contato</a> |
            <a href="index.php?menuop=consulta">Consultar Agenda</a> |
            <a href="index.php?menuop=editar">Editar Contato</a>
        </nav>
        </div>"
        <?php 
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"consulta";
        switch ($menuop){
            case 'Home':
                include ("index.php");
                break;
            case 'cadastro':
                include("cadastro.php");
                break;
            case 'consulta':
                include ("consultar.php");
                break;
        }
        
        ?>
        
        
    </body>
    
    
</html>