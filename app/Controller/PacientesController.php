<?php


class PacientesController extends AppController
{
	
	
	public function index() {
         $this->set('pacientes', $this->Paciente->find('all'));
    }

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Paciente invalido'));
		}

		$paciente = $this->Paciente->Endereco->findById($id);
		if (!$paciente) {
			throw new NotFoundException(__('Paciente nao encontrado'));
		}
		$this->set('paciente', $paciente);
		
	}
    
    public function add()
    {
    	if ($this->request->is('post'))
    	{
    		$this->Paciente->Endereco->create();

    		if ($this->Paciente->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Paciente salvo com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
    		}
    		$this->Session->setFlash(__('Erro ao criar Paciente.'));
    	}
    }
    
    public function edit($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Paciente invalido'));
    	}
    
    	$paciente = $this->Paciente->Endereco->findById($id);
    	
    	
    	if (!$paciente) {
    		throw new NotFoundException(__('Paciente nao encontrado'));
    	}
    
    	if ($this->request->is(array('paciente', 'put'))) {
    		$this->Paciente->id = $id;
    		if ($this->Paciente->saveAll($this->request->data)) {		
    			$this->Session->setFlash(__('Paciente atualizado com sucesso.'), "flash_notification");
    			return $this->redirect(array('action' => 'index'));
	
    		}
    		$this->Session->setFlash(__('Erro ao atualizar dados.'));
    	}
    
    	if (!$this->request->data) {
    		$this->request->data = $paciente;
    	}
    }
    
    
    
    
    public function delete($id) {
    	if ($this->request->is('get'))
    	{
    		throw new MethodNotAllowedException();
    	}

    	
    	if ($this->Paciente->delete($id))
    	{
    		if ($this->Paciente->Endereco->delete($id))
    		{
    			$this->Session->setFlash(__('Paciente excluido com sucesso.'), "flash_notification");
    			return $this->redirect(array('action' => 'index'));
    		}
    	}
    	
    }
}

?>