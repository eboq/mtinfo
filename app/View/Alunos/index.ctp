<?php
	echo $this->element('headerAdmin');
?>

<br />
<button class="btn btn-primary btn" data-toggle="modal"
	data-target="#myModal">
	<span class="glyphicon glyphicon-plus"></span> Novo Aluno
</button>
<br />
<br />
<table width="100%">
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Login</th>
		<th>Telefone</th>
		<th>Matrícula</th>
		<th>Ações</th>
	</tr>

	<?php foreach ($alunos as $aluno): ?>
	<tr>
		<td><?php echo $aluno['Aluno']['id']; ?></td>
		<td><?php echo $this->Html->link($aluno['User']['nome'],
		array('controller' => 'Alunos', 'action' => 'view',
		$aluno['User']['id'])); ?>
		</td>
		<td><?php echo $aluno['User']['username']; ?></td>
		<td><?php echo $aluno['Aluno']['telefone']; ?></td>
		<td><?php echo $aluno['Aluno']['matricula']; ?></td>
		<td><?php
		echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Editar",
		array('controller' => 'Alunos', 'action' => 'edit', $aluno['User']['id'], 'role' => 'button'),
		array('class' => 'btn btn-warning', 'escape' => false, "data-toggle"=>"modal",
					"data-target"=>"#myModal")
		);
		?> <?php
		echo $this->Form->postLink(
		$this->Html->tag('span', '',
		array('class' => 'glyphicon glyphicon-remove')).
			" Remover",
		array('controller' => 'Alunos',
				'action' => 'delete', $aluno['Aluno']['id']),
		array('confirm' => 'Tem certeza?', 'role' => 'button',
				'class' => 'btn btn-danger', 'escape' => false)
		);
		?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($aluno); ?>
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
			echo $this->Form->create('Aluno', array('action' => 'add'));

			echo $this->Form->input('User.nome');
			echo $this->Form->input('User.username');
			echo $this->Form->input('User.password');
			echo $this->Form->input('telefone');
			echo $this->Form->input('matricula');
			echo $this->Form->input('User.role', array('type'=>'hidden', 'value' => 'Aluno'));

			echo $this->Form->button(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-ok'))." Salvar",
			array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false)
			);
			echo " ";
			echo $this->Html->link(
			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Cancelar",
			array('controller' => 'Alunos','action' => 'index'),
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
