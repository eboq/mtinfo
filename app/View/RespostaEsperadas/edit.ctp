<h1>Editar Campo</h1>
<?php
echo $this->Form->create('RespostaEsperada');
echo $this->Form->input('resposta');

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->button($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
);
echo " ";
echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
		array('controller' => 'RespostaEsperada', 'action' => 'add', $id),
		array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
);
echo $this->Form->end();
?>