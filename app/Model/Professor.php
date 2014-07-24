<?php

class Professor extends AppModel
{
	public $useTable = "tb_professor";
	
	 public $belongsTo = array(
	 		'User'=> array('className' => 'User','foreignKey' => 'id' )
	);
	 
	 public $hasMany = array(
	 		'AlunoProfessor'=> array('className' => 'AlunoProfessor','foreignKey' => 'id_professor' )
	 
	 );
}
?>