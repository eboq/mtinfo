<h1>Editar Paciente</h1>
<?php
echo $this->Form->create('Paciente');
	echo $this->Form->input('nome');
	echo $this->Form->input('idade');
	echo $this->Form->input('sexo');
			
	echo $this->Form->input('data_nasc', array(
		'label' => 'Data de Nascimento',
		'dateFormat' => 'YMD'));
			
	echo $this->Form->input('profissao');
	echo $this->Form->input('estado_civil');
	echo $this->Form->input('numero_filhos');
	echo $this->Form->input('telefone');
	echo $this->Form->input('email');
			
			echo $this->Form->input('Endereco.cidade');
			echo $this->Form->input('Endereco.cep');
			echo $this->Form->input('Endereco.logradouro', array('label' => 'Rua'));
			echo $this->Form->input('Endereco.numero');
			
			
			echo $this->Form->input('qp');
			echo $this->Form->input('hd');
			echo $this->Form->input('hma');

echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->button(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
);
echo " ";
echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
		array('controller' => 'Pacientes', 'action' => 'index'),
		array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
);
echo $this->Form->end();
?>