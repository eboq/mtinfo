
<p>Código: <?php echo h($professor['User']['id']); ?></p>

<p>Nome: <?php echo h($professor['User']['nome']); ?></p>

<p>Login: <?php echo h($professor['User']['username']); ?></p>

<p>SIAP: <?php echo h($professor['Professor']['siap']); ?></p>

<?php 
	echo $this->Html->link('Listar Alunos',
	array('controller' => 'AlunoProfessors', 'action' => 'listAlunos', $professor['User']['id'])); 
?>
