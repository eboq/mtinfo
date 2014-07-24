<?php


class FichasController extends AppController
{
	

  	public function preencher($idPaciente)
    {
    	
    	
    	$result = $this->Ficha->Formulario->query("select max(tb_formulario.id) from tb_formulario");
    	$idFormulario = $result[0][0]['max(tb_formulario.id)'];

    	$camposSimples =  $this->Ficha->Formulario->CampoFormulario->find('all' , 
    			array('conditions' => array('Formulario.id' => $idFormulario, 'Campo.tipo' => 'Simples')));
    	
    	$camposMultipla =  $this->Ficha->Formulario->CampoFormulario->find('all' ,
    			array('conditions' => array('Formulario.id' => $idFormulario, 'Campo.tipo' => 'Multipla')));
    	
    	$this->set('idPaciente', $idPaciente);
    	$this->set('camposSimples', $camposSimples);
    	$this->set('idFormulario', $idFormulario);
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
    
    
    public function add()
    {
    	if ($this->request->is('post'))
    	{
    		$this->Ficha->create();
    		 
    		if ($this->Ficha->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Ficha Criada.'), "flash_notification");
    			return $this->redirect(array('controller' => 'Campos','action' => 'view', $this->request->data['RespostaEsperada']['id_campo']));
    		}
    		$this->Session->setFlash(__('Erro ao criar Ficha.'));
    	}
    }
    
       
   
}

?>