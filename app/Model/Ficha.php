<?php

class Ficha extends AppModel
{
	public $useTable = "tb_ficha";
	
	public $belongsTo = array(
			'Paciente'=> array('className' => 'Paciente','foreignKey' => 'id' ),
			'Formulario'=> array('className' => 'Formulario','foreignKey' => 'id' ),
			'Aluno'=> array('className' => 'Aluno','foreignKey' => 'id' )
	);
	
	public $hasMany = array('RespostaFicha'=> array('className' => 'RespostaFicha','foreignKey' => 'id_ficha'));
	
}
?>