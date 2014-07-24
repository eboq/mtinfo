<?php
echo $this->element('headerAdmin');
?>

<br />
<button class="btn btn-primary btn" data-toggle="modal"
	data-target="#myModal">
	<span class="glyphicon glyphicon-plus"></span> Novo Formulario
</button>
<br />
<br />
<table>
	<tr>
		<th>Id</th>
		<th>Versão</th>
		<th>Data</th>
	</tr>

	<?php foreach ($formularios as $formulario): ?>
	<tr>
		<td><?php echo $formulario['Formulario']['id']; ?></td>
		<td><?php echo $this->Html->link($formulario['Formulario']['versao'],
		array('controller' => 'Formularios', 'action' => 'view',
		$formulario['Formulario']['id'])); ?>
		</td>
		<td><?php echo $formulario['Formulario']['data']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($formulario); ?>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Adicionar</h4>
			</div>
			<div class="modal-body">

			<?php
			echo $this->Form->create('Formulario', array('action' => 'add'));

			echo $this->Form->input('versao');
			echo $this->Form->input('completo', array('type'=>'hidden', 'value' => '0'));
			echo $this->Form->button(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
			array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
			);
			echo " ";
			echo $this->Html->link(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
			array('controller' => 'Formularios','action' => 'index'),
			array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
			);

			echo $this->Form->end();
			?>
			</div>
		</div>
	</div>
</div>

</body>
</html>

