<h1>Nova resposta</h1>
<?php


echo $this->Form->create('RespostaEsperada', array('action' => 'add'));
echo $this->Form->input('resposta');
echo $this->Form->input('id_campo', array('type'=>'hidden', 'value' => $id));

echo $this->Form->button(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
);
echo " ";
echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
		array('controller' => 'Campos','action' => 'view', $id),
		array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
);

echo $this->Form->end();

?>