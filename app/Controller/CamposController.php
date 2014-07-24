<?php


class CamposController extends AppController
{
	
	
	public function index() {
         $this->set('campos', $this->Campo->find('all'));
    }

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Campo invalido'));
		}

		$campo = $this->Campo->findById($id);

		$respostas = $this->Campo->query("SELECT * from tb_resposta_esperada where id_campo = '$id'");
		if (!$campo) {
			throw new NotFoundException(__('Campo nao encontrado'));
		}
		$this->set('campo', $campo);
		$this->set('respostas', $respostas);
	}
    
    public function add()
    {
    	if ($this->request->is('post'))
    	{
    		$this->Campo->create();

    		if ($this->Campo->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Campo salvo com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
    		}
    		$this->Session->setFlash(__('Erro ao criar Campo.'));
    	}
    }
    
    public function edit($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Campo invalido'));
    	}
    
    	$campo = $this->Campo->findById($id);
    	if (!$campo) {
    		throw new NotFoundException(__('Campo nao encontrado'));
    	}
    
    	if ($this->request->is(array('campo', 'put'))) {
    		$this->Campo->id = $id;
    		if ($this->Campo->saveAll($this->request->data)) {		
    			$this->Session->setFlash(__('Campo atualizado com sucesso.'), "flash_notification");
    			return $this->redirect(array('action' => 'index'));
	
    		}
    		$this->Session->setFlash(__('Erro ao atualizar dados.'));
    	}
    
    	if (!$this->request->data) {
    		$this->request->data = $campo;
    	}
    }
    
  
    
    
    
    
   
}

?>