<?php
echo $this->element('headerAdmin');
?>

<br />
<button class="btn btn-primary btn" data-toggle="modal"
	data-target="#myModalSimple">
	<span class="glyphicon glyphicon-plus"></span> Novo Campo Simples
</button>
<button class="btn btn-primary btn" data-toggle="modal"
	data-target="#myModalMultiple">
	<span class="glyphicon glyphicon-plus"></span> Novo Campo Multipla
	Escolha
</button>
<br />
<br />
<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Tipo</th>

	</tr>

	<?php foreach ($campos as $campo): ?>
	<tr>
		<td><?php echo $campo['Campo']['id']; ?></td>
		<td><?php echo $this->Html->link($campo['Campo']['nome'],
		array('controller' => 'Campos', 'action' => 'view',
		$campo['Campo']['id'])); ?>
		</td>
		<td><?php echo $campo['Campo']['tipo']; ?></td>

	</tr>
	<?php endforeach; ?>
	<?php unset($campo); ?>
</table>


<!-- Modal -->
<div class="modal fade" id="myModalSimple" tabindex="-1" role="dialog"
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
			echo $this->Form->create('Campo', array('action' => 'add'));

			echo $this->Form->input('nome');
			echo $this->Form->input('tipo', array('type'=>'hidden', 'value' => 'Simples'));

			echo $this->Form->button(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
			array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
			);
			echo " ";
			echo $this->Html->link(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
			array('controller' => 'Campos','action' => 'index'),
			array('role' => 'button', 'class' => 'btn btn-danger', 'escape' => false)
			);

			echo $this->Form->end();
			?>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModalMultiple" tabindex="-1" role="dialog"
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
			echo $this->Form->create('Campo', array('action' => 'add'));

			echo $this->Form->input('nome');
			echo $this->Form->input('tipo', array('type'=>'hidden', 'value' => 'Multipla'));

			echo $this->Form->button(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
			array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
			);
			echo " ";
			echo $this->Html->link(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
			array('controller' => 'Campos','action' => 'index'),
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
