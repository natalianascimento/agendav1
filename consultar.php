<?php 
require_once 'Conexao.php';
require_once 'Contato.php';

$conexao = new Conexao();

$dados = $conexao->consultar('');

?>


    <body>
        <div class = "cadastro">
        </div>
          <table border="1"><!--depois tirar isso -->
            <thead>
            	<tr>
            		<th>ID</th>
            		<th>Nome</th>
            		<th>Telefone</th>
            	</tr>
            </thead>
            <tbody>
        <?php 
        foreach ($dados as $valor){
            echo '<tr>';
            echo '<td><a href="index.php?menuop=cadastro&id='.$valor->id_agenda.'">'.$valor->id_agenda.'</a></td>';
            echo '<td>'.$valor->nome.'</td>';
            echo '<td>'.$valor->telefone.'</td>';
            echo '</tr>';
        }
                	
              
                ?>
            </tbody>
            </table>
    </body>

    