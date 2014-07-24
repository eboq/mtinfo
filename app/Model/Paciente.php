<?php

class Paciente extends AppModel
{
	public $useTable = "tb_paciente";

	
	public $hasMany = array(
			'Ficha'=> array('className' => 'Ficha','foreignKey' => 'id' )

	);
	
	public $hasOne = array('Endereco'=> array('className' => 'Endereco','foreignKey' => 'id' ));
	
}
?>