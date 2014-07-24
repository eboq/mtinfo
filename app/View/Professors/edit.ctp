<h1>Editar Aluno</h1>
<?php
echo $this->Form->create('Professor');
echo $this->Form->input('User.nome');
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->input('siap');


echo $this->Form->input('User.id', array('type' => 'hidden'));
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