<?php 
//Validar se tem informaçõa (id) no GET. Igual POST - vertifica se tem valor
//consultar a base, para trazer o registro qdo id que vem no get
//ajustar o método consultar da classe conexão -  
//inves de interar, vou ter dado e vou exibir no value dos campos

//require_once 'controlContato.php';
// cadastrar();

?>

    <body>
        <div class = "cadastro">
        	 <form action="controlContato.php" method="POST">
        			<label for="nome">Nome do Contato </label>
        			<input type="text" class="campoTexto" name="nome" />
        	        <label for="telefone">Telefone </label>
        			<input type="number" class="campoTexto" name="telefone" />
        	        <button class="botao" type="submit"> Cadastrar</button>  
        	        <input type="hidden" name="controle" value="cadastrar" />
        	 </form>
        	 
        	 <?php 
            	 
//         	 if (isset($_POST["nome"])&& isset($_POST["telefone"])){
        	     
//         	     //include ("controlContato.php");
//         	 }
        	 ?>      
        </div>
    </body>
</html>