<h1>Alunos</h1>


<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
    </tr>

    <?php foreach ($alunoprofessors as $alunoprofessor): ?>
    <tr>
        <td><?php echo $alunoprofessor['tb_usuario']['id']; ?></td>
        <td>
            <?php echo $alunoprofessor['tb_usuario']['nome']; ?>
        </td>
        
        <td>
        <?php 
        	
	        echo $this->Form->postLink(
	        		$this->Html->tag('span', '',
				array('class' => 'glyphicon glyphicon-remove')).
				" Remover",
	        		array('controller' => 'AlunoProfessors',
					'action' => 'delete', $alunoprofessor['tb_usuario']['id'], $alunoprofessor['tb_professor']['id']),
	        		array('confirm' => 'Tem certeza?', 'role' => 'button',
					'class' => 'btn btn-danger', 'escape' => false));
		?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>


<?php 
	echo $this->Html->link('Adicionar Aluno',
	array('controller' => 'AlunoProfessors', 'action' => 'selecionarAluno', $id)); 
?>