<h1>Finalizar Formulario</h1>
<?php
echo $this->Form->create('Formulario');
	echo $this->Form->input('completo', array('type'=>'hidden', 'value' => '1'));

	echo $this->Form->input('id', array('type' => 'hidden'));
	
	
	echo "<h1> Deseja realmente finalizar o formulario??</h1>";
echo $this->Form->button(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Sim",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
);
echo " ";
echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Nao",
		array('controller' => 'Formularios', 'action' => 'index'),
		array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
);
echo $this->Form->end();
?>