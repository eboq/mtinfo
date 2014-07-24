<?php

class Campo extends AppModel
{
	public $useTable = "tb_campo";
	
	public $hasMany = array(
			'RespostaEsperada'=> array('className' => 'RespostaEsperada', 'foreignKey' => 'id_campo', 
			'CampoFormulario' => array('className' => 'CampoFormulario', 'foreignKey' => 'id_campo'))

	);
}
?>