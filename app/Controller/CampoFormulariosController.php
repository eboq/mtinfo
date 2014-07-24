<?php


class CampoFormulariosController extends AppController
{
    public function delete($idCampo, $idFormulario) {
    	if ($this->request->is('get'))
    	{
    		throw new MethodNotAllowedException();
    	}
    	
    	$result = $this->CampoFormulario->find('list', array('fields' => array('CampoFormulario.id'),
    			 'conditions' => array('CampoFormulario.id_campo' => $idCampo, 'CampoFormulario.id_formulario' => $idFormulario)));

    	
    	if($this->CampoFormulario->delete($result))
    	{
    		$this->Session->setFlash(__('Campo removido.'), "flash_notification");
    		return $this->redirect(array('controller' => 'Formularios', 'action' => 'view', $idFormulario));
    	}
    	
    }
    
    
    
    

    public function listCampos($id) 
    {

    	$result = $this->CampoFormulario->query("select * from tb_campo where tb_campo.id not in 
    			(select tb_campo.id from tb_campo 
    			inner join tb_campo_formulario on tb_campo_formulario.id_campo = tb_campo.id 
    			inner join tb_formulario on tb_formulario.id = tb_campo_formulario.id_formulario 
    			where tb_formulario.id = '$id')");
    	
    	
    	$this->set('campos', $result);
    	$this->set('id', $id);
    }
    
    
    public function add($idCampo, $idFormulario)
    {
    	$result = $this->CampoFormulario->query("insert into tb_campo_formulario (id_campo, id_formulario) values ('$idCampo', '$idFormulario')");
    	
    	return $this->redirect(array('controller' => 'CampoFormularios', 'action' => 'listCampos', $idFormulario));
    }
    
    

    
    
    
    
    
    
}

?>