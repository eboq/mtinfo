<?php

class User extends AppModel
{
	public $useTable = "tb_usuario";
	
	public $hasOne = array('Professor'=> array(
            'className' => 'Professor',
			'foreignKey' => 'id' ),
			'Aluno'=> array(
					'className' => 'Aluno',
					'foreignKey' => 'id' )
	);

}
?>