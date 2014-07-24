<?php


class RespostaEsperadasController extends AppController
{
	

  public function add($id)
    {
    	if ($this->request->is('post'))
    	{
    		$this->RespostaEsperada->create();
    	
    		if ($this->RespostaEsperada->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Resposta adicionada com sucesso.'), "flash_notification");
    			return $this->redirect(array('controller' => 'Campos','action' => 'view', $this->request->data['RespostaEsperada']['id_campo']));
    		}
    		$this->Session->setFlash(__('Erro ao criar Campo.'));
    	}
    	
    	$this->set('id', $id);
    }
    
    public function edit($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Campo invalido'));
    	}
    
    	$resposta = $this->RespostaEsperada->findById($id);
    	if (!$resposta) {
    		throw new NotFoundException(__('Resposta nao encontrado'));
    	}
    
    	if ($this->request->is(array('resposta', 'put'))) {
    		$this->respostaEsperada->id = $id;
    		if ($this->RespostaEsperada->saveAll($this->request->data)) {		
    			$this->Session->setFlash(__('Resposta atualizado com sucesso.'), "flash_notification");
    			return $this->redirect(array('controller' => 'Campos','action' => 'view', $resposta['RespostaEsperada']['id_campo']));
	
    		}
    		$this->Session->setFlash(__('Erro ao atualizar dados.'));
    	}
    
    	if (!$this->request->data) {
    		$this->request->data = $resposta;
    	}
    	
    	$this->set('id', $id);
    }
    
    
    
    public function delete($id, $idCampo) {
    	if ($this->request->is('get'))
    	{
    		throw new MethodNotAllowedException();
    	}
    
    	 
    	if ($this->RespostaEsperada->delete($id))
    	{
    		
    		$this->Session->setFlash(__('Resposta removida com sucesso.'), "flash_notification");
    		return $this->redirect(array('controller' => 'Campos','action' => 'view', $idCampo));

    	}
    	 
    }
    
       
   
}

?>