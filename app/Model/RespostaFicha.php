<?php

class RespostaFicha extends AppModel
{
	public $useTable = "tb_resposta_ficha";
	
	public $belongsTo = array(
			'Ficha'=> array('className' => 'Ficha','foreignKey' => 'id_ficha' ),
			'Campo'=> array('className' => 'Campo','foreignKey' => 'id_campo' ));
	

}
?>