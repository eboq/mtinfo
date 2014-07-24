<?php

class Aluno extends AppModel
{
	public $useTable = "tb_aluno";
	
	public $belongsTo = array(
			'User'=> array('className' => 'User','foreignKey' => 'id' )
	);
	
	public $hasMany = array(
			'AlunoProfessor'=> array('className' => 'AlunoProfessor','foreignKey' => 'id_aluno' ),
			'Ficha'=> array('className' => 'Ficha','foreignKey' => 'id' )

	);
}
?>