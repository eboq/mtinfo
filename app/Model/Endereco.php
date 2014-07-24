<?php

class Endereco extends AppModel
{
	public $useTable = "tb_endereco";
	
	public $belongsTo = array(
			'Paciente'=> array('className' => 'Paciente','foreignKey' => 'id' )
	);

}
?>