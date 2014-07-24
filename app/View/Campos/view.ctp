
<p>Código: <?php echo h($campo['Campo']['id']); ?></p>

<p>Nome: <?php echo h($campo['Campo']['nome']); ?></p>

<p>Tipo: <?php echo h($campo['Campo']['tipo']); ?></p>


<?php 

	if(!empty($respostas))
	{
		echo '<p>Respostas: </p>';
		
		echo "<table>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Nome</th>";
		echo "<th>Ações</th>";
		echo "</tr>";
		
		    foreach ($respostas as $resposta):
		   echo "<tr>";
		        echo "<td>";
				 echo $resposta['tb_resposta_esperada']['id'] ;
				 
				 echo"</td>";
		        echo "<td>";
		        
		        
		            echo $resposta['tb_resposta_esperada']['resposta'];
		       echo'</td>';
		
		        echo '<td>';
		        	echo $this->Html->link(
		        			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Editar",
		        			array('controller' => 'RespostaEsperadas', 'action' => 'edit', $resposta['tb_resposta_esperada']['id'], 'role' => 'button'),
							array('class' => 'btn btn-warning', 'escape' => false));
		        	
		        	echo $this->Form->postLink($this->Html->tag('span', '',array('class' => 'glyphicon glyphicon-remove')).
		        			" Remover",array('controller' => 'RespostaEsperadas',
		        					'action' => 'delete', $resposta['tb_resposta_esperada']['id'], $campo['Campo']['id']),
		        			array('confirm' => 'Tem certeza?', 'role' => 'button',
		        					'class' => 'btn btn-danger', 'escape' => false)
		        	);
		       echo '</td>';
		    echo '<tr>';
		    endforeach;
		    unset($resposta);
		echo '</table>';
		
	}

	if($campo['Campo']['tipo'] == 'Multipla')
	{
		echo $this->Html->link(
				$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Adicionar Resposta",
				array('controller' => 'RespostaEsperadas', 'action' => 'add', $campo['Campo']['id'], 'role' => 'button'),
				array('class' => 'btn btn-warning', 'escape' => false));
		echo '</td>';
	}
?>


