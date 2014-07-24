<table>

<tr>
<th>Alunos nao registrados</th>
</tr>
<?php foreach ($alunos as $aluno): ?>

<tr>

<td>
	<?php 
		echo $aluno['tb_usuario']['nome']; 


        	echo $this->Form->postLink(
        		$this->Html->tag('span', '',
			array('class' => 'glyphicon glyphicon-remove')).
			" Adicionar",
        		array('controller' => 'AlunoProfessors',
				'action' => 'addAluno', $aluno['tb_usuario']['id'], $idprofessor),
        		array('confirm' => 'Tem certeza?', 'role' => 'button',
				'class' => 'btn btn-danger', 'escape' => false)
        	);

	?>
</td>
</tr>

<?php endforeach; ?>

</table>