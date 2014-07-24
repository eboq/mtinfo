<?php 
	
	echo $this->Form->create('AlunoProfessor', array('action' => 'add'));
    	
    echo $this->Form->input('id_aluno', array('type'=>'hidden', 'value' => $idaluno));
    echo $this->Form->input('id_professor', array('type'=>'hidden', 'value' => $idprofessor));
    	
   echo $this->Form->button($this->Html->tag('span', '', 
   		array('class' => 'glyphicon glyphicon-ok'))." Salvar",
		array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => false));
?>