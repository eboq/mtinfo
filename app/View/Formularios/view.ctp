
<p>Código: <?php echo h($formulario['Formulario']['id']); ?></p>

<p>Versao: <?php echo h($formulario['Formulario']['versao']); ?></p>

<p>Data: <?php echo h($formulario['Formulario']['data']); ?></p>


<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Tipo</th>
    </tr>

    <?php foreach ($campos as $campo): ?>
    <tr>
        <td><?php echo $campo['tb_campo']['id']; ?></td>
        <td>
            <?php echo $campo['tb_campo']['nome']; ?>
        </td>
        
        <td><?php echo $campo['tb_campo']['tipo']; ?></td>
        
        <td>
        <?php 
        echo $this->Form->postLink($this->Html->tag('span', '',
        		array('class' => 'glyphicon glyphicon-remove'))." Remover",
        		array('controller' => 'CampoFormularios','action' => 'delete', $campo['tb_campo']['id'], $formulario['Formulario']['id']),
        		array('confirm' => 'Tem certeza?', 'role' => 'button',
        				'class' => 'btn btn-danger', 'escape' => false));

	       
		?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>




<?php 

if($formulario['Formulario']['completo'] == 0)
{
	echo $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Adicionar Campos",
        			array('controller' => 'CampoFormularios', 'action' => 'listCampos', $formulario['Formulario']['id'], 'role' => 'button'),
					array('class' => 'btn btn-warning', 'escape' => false));


	echo $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Finalizar Formulario",
		array('controller' => 'Formularios', 'action' => 'concluirFormulario', $formulario['Formulario']['id'], 'role' => 'button'),
		array('class' => 'btn btn-warning', 'escape' => false));
}


?>

