<h1>Campos</h1>


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
        		array('class' => 'glyphicon glyphicon-remove'))." Adicionar",
        		array('controller' => 'CampoFormularios','action' => 'add', $campo['tb_campo']['id'], $id),
        		array('confirm' => 'Tem certeza?', 'role' => 'button',
        				'class' => 'btn btn-danger', 'escape' => false));
        

	       
		?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>

<?php 
echo $this->Html->link(
        			$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Voltar",
        			array('controller' => 'Formularios', 'action' => 'view', $id, 'role' => 'button'),
					array('class' => 'btn btn-warning', 'escape' => false)
			);

?>