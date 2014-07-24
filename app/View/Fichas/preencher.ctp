<h1>Nova Ficha</h1>
<?php

echo $this->Form->create('Ficha', array('action' => 'add'));
echo $this->Form->input('id_formulario', array('type'=>'hidden', 'value' => $idFormulario));
echo $this->Form->input('id_paciente', array('type'=>'hidden', 'value' => $idPaciente));
$i = 0;
?>
<table>
<tr>
<th>Id</th>
<th>Nome</th>

<?php 

var_dump($camposSimples);

?>
</tr>

	<?php foreach ($camposSimples as $campo): ?>
	<tr>
	
		<td><?php echo $campo['Campo']['id']; ?></td>
		<td><?php echo $campo['Campo']['nome']; ?></td>
	
		<?php 
			if($campo['Campo']['tipo'] == 'Multipla')
			{
				$id = $campo['Campo']['id'];
				
				
			}
		
		
		?>
	
		
		<td><?php echo $this->Form->input("RespostaFicha.$i.resposta");?></td>
		<td><?php echo $this->Form->input("RespostaFicha.$i.id_campo", array('type'=>'hidden', 'value' => $campo['Campo']['id']));;?></td>
	</tr>
	
	<?php $i++;?>
	<?php endforeach; ?>
	
	
</table>
<?php 

echo $this->Form->button(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
);

echo $this->Form->end();



?>




