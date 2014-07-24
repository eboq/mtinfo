<?php


class FormulariosController extends AppController
{
	
	
	public function index() {
         $this->set('formularios', $this->Formulario->find('all'));
    }

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Formulario invalido'));
		}

		$formulario = $this->Formulario->findById($id);

		$campos = $this->Formulario->query("select * from tb_campo 
		inner join tb_campo_formulario on tb_campo_formulario.id_campo = tb_campo.id 
		inner join tb_formulario on tb_campo_formulario.id_formulario = tb_formulario.id where tb_formulario.id = '$id'");
		
		if (!$formulario) {
			throw new NotFoundException(__('Formulario nao encontrado'));
		}
		$this->set('formulario', $formulario);
		$this->set('campos', $campos);
	}
    
    public function add()
    {
    	if ($this->request->is('post'))
    	{
    		$this->Formulario->create();

    		if ($this->Formulario->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Formulario salvo com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
    		}
    		$this->Session->setFlash(__('Erro ao criar Formulario.'));
    	}
    }
    
    public function edit($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Formulario invalido'));
    	}
    
    	$formulario = $this->Formulario->findById($id);
    	if (!$formulario) {
    		throw new NotFoundException(__('Formulario nao encontrado'));
    	}
    
    	if ($this->request->is(array('formulario', 'put'))) {
    		$this->Formulario->id = $id;
    		if ($this->Formulario->saveAll($this->request->data)) {		
    			$this->Session->setFlash(__('Formulario atualizado com sucesso.'), "flash_notification");
    			return $this->redirect(array('action' => 'index'));
	
    		}
    		$this->Session->setFlash(__('Erro ao atualizar dados.'));
    	}
    
    	if (!$this->request->data) {
    		$this->request->data = $formulario;
    	}
    }
    public function concluirFormulario($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Formulario invalido'));
    	}
    
    	$formulario = $this->Formulario->findById($id);
    	if (!$formulario) {
    		throw new NotFoundException(__('Formulario nao encontrado'));
    	}
    
    	if ($this->request->is(array('formulario', 'put'))) {
    		$this->Formulario->id = $id;
    		if ($this->Formulario->saveAll($this->request->data)) {
    			$this->Session->setFlash(__('Formulario atualizado com sucesso.'), "flash_notification");
    			return $this->redirect(array('action' => 'index'));
    
    		}
    		$this->Session->setFlash(__('Erro ao atualizar dados.'));
    	}
    
    	if (!$this->request->data) {
    		$this->request->data = $formulario;
    	}
    }
    
    
    
  
    
    
    
    
   
}

?>