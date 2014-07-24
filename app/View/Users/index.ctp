<?php 	
	echo $this->element('header');
	
	$arr = $this->requestAction('/users/retUser');
	
	var_dump($arr);
?>