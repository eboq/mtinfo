<?php
echo $this->element('headerAdmin');
?>

<br />
<button class="btn btn-primary btn" data-toggle="modal"
	data-target="#myModal">
	<span class="glyphicon glyphicon-plus"></span> Novo Professor
</button>
<br />
<br />
<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Login</th>
		<th>Siap</th>
		<th>Ações</th>
	</tr>

	<?php foreach ($professors as $professor): ?>
	<tr>
		<td><?php echo $professor['Professor']['id']; ?></td>
		<td><?php echo $this->Html->link($professor['User']['nome'],
		array('controller' => 'Professors', 'action' => 'view',
		$professor['User']['id'])); ?>
		</td>
		<td><?php echo $professor['User']['username']; ?></td>
		<td><?php echo $professor['Professor']['siap']; ?></td>
		<td><?php
		echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Editar",
		array('controller' => 'Professors', 'action' => 'edit', $professor['Professor']['id'], 'role' => 'button'),
		array('class' => 'btn btn-warning', 'escape' => false, "data-toggle"=>"modal",
					"data-target"=>"#myModal")
		);
		?> <?php
		echo $this->Form->postLink(
		$this->Html->tag('span', '',
		array('class' => 'glyphicon glyphicon-remove')).
			" Remover",
		array('controller' => 'Professors',
				'action' => 'delete', $professor['Professor']['id']),
		array('confirm' => 'Tem certeza?', 'role' => 'button',
				'class' => 'btn btn-danger', 'escape' => false)
		);
		?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($professor); ?>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">

			<?php
			echo $this->Form->create('Professor', array('action' => 'add'));

			echo $this->Form->input('User.nome');
			echo $this->Form->input('User.username');
			echo $this->Form->input('User.password');
			echo $this->Form->input('siap');
			echo $this->Form->input('User.role', array('type'=>'hidden', 'value' => 'Professor'));

			echo $this->Form->button(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
			array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
			);
			echo " ";
			echo $this->Html->link(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
			array('controller' => 'Professors','action' => 'index'),
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
