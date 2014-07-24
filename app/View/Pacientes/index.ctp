<?php
echo $this->element('headerAdmin');
?>

<br />
<button class="btn btn-primary btn" data-toggle="modal"
	data-target="#myModal">
	<span class="glyphicon glyphicon-plus"></span> Novo Paciente
</button>
<br />
<br />
<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Idade</th>
		<th>Sexo</th>
		<th>Telefone</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>

	<?php foreach ($pacientes as $paciente): ?>
	<tr>


		<td><?php echo $paciente['Paciente']['id']; ?></td>
		<td><?php echo $this->Html->link($paciente['Paciente']['nome'],
		array('controller' => 'Pacientes', 'action' => 'view',
		$paciente['Paciente']['id'])); ?>
		</td>
		<td><?php echo $paciente['Paciente']['idade']; ?></td>
		<td><?php echo $paciente['Paciente']['sexo']; ?></td>
		<td><?php echo $paciente['Paciente']['telefone']; ?></td>
		<td><?php echo $paciente['Paciente']['email']; ?></td>


		<td><?php
		echo $this->Html->link(
		$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Editar",
		array('controller' => 'Pacientes', 'action' => 'edit', $paciente['Paciente']['id'], 'role' => 'button'),
		array('class' => 'btn btn-warning', 'escape' => false, "data-toggle"=>"modal",
					"data-target"=>"#myModal")
		);
		?> <?php
		echo $this->Form->postLink(
		$this->Html->tag('span', '',
		array('class' => 'glyphicon glyphicon-remove')).
			" Remover",
		array('controller' => 'Pacientes',
				'action' => 'delete', $paciente['Paciente']['id']),
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
			echo $this->Form->create('Paciente', array('action' => 'add'));

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
