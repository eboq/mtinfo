<h1>Editar Aluno</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('nome');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('Aluno.telefone');
echo $this->Form->input('Aluno.matricula');

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->button(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
);
echo " ";
echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
		array('controller' => 'Alunos', 'action' => 'index'),
		array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
);
echo $this->Form->end();
?>