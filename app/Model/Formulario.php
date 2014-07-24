<?php

class Formulario extends AppModel
{
	public $useTable = "tb_formulario";
	
	
	public $hasMany = array(
			'CampoFormulario'=> array('className' => 'CampoFormulario','foreignKey' => 'id_formulario' ),
			'Ficha'=> array('className' => 'Ficha','foreignKey' => 'id' )

	);
}
?>