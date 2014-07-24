<?php

class CampoFormulario extends AppModel
{
	public $useTable = "tb_campo_formulario";
	
	public $belongsTo = array(
			'Campo'=> array('className' => 'Campo','foreignKey' => 'id_campo' ),
			'Formulario'=> array('className' => 'Formulario','foreignKey' => 'id_formulario' ));
	

}
?>