
<p>Código: <?php echo h($paciente['Paciente']['id']); ?></p>

<p>Nome: <?php echo h($paciente['Paciente']['nome']); ?></p>

<p>Idade: <?php echo h($paciente['Paciente']['idade']); ?></p>

<p>Sexo: <?php echo h($paciente['Paciente']['sexo']); ?></p>

<p>Data De Nascimento: <?php echo h($paciente['Paciente']['data_nasc']); ?></p>

<p>Profissão: <?php echo h($paciente['Paciente']['profissao']); ?></p>

<p>Estado Civil: <?php echo h($paciente['Paciente']['estado_civil']); ?></p>

<p>Número de Filhos: <?php echo h($paciente['Paciente']['numero_filhos']); ?></p>

<p>Telefone: <?php echo h($paciente['Paciente']['telefone']); ?></p>

<p>E-mail: <?php echo h($paciente['Paciente']['email']); ?></p>

<p>Cidade: <?php echo h($paciente['Endereco']['cidade']); ?></p>

<p>CEP: <?php echo h($paciente['Endereco']['cep']); ?></p>

<p>Rua: <?php echo h($paciente['Endereco']['logradouro']); ?></p>

<p>Número: <?php echo h($paciente['Endereco']['numero']); ?></p>

<p>QP: <?php echo h($paciente['Paciente']['qp']); ?></p>

<p>HD: <?php echo h($paciente['Paciente']['hd']); ?></p>

<p>HMA: <?php echo h($paciente['Paciente']['hma']); ?></p>




<?php 
	echo $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Adicionar Ficha",
        array('controller' => 'Fichas', 'action' => 'preencher', $paciente['Paciente']['id'], 'role' => 'button'),
		array('class' => 'btn btn-warning', 'escape' => false));
?>
