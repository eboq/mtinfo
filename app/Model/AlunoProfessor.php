<?php

class AlunoProfessor extends AppModel
{
	public $useTable = "tb_aluno_professor";
	
	public $belongsTo = array(
			'Aluno'=> array('className' => 'Aluno','foreignKey' => 'id_aluno' ),
			'Professor'=> array('className' => 'Professor','foreignKey' => 'id_professor' )
	);
	

}
?>