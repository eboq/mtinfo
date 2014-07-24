<?php

class RespostaEsperada extends AppModel
{
	public $useTable = "tb_resposta_esperada";
	
	public $belongsTo = array(
			'Campo'=> array('className' => 'Campo','foreignKey' => 'id_campo' )
	);
	
}
?>