<?php


class AlunosController extends AppController
{
	public function retAluno($id = null){
		return $this->Aluno->findById($id);
	}
	
	public function index() {
         $this->set('alunos', $this->Aluno->find('all'));
    }

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Aluno invalido'));
		}

		$aluno = $this->Aluno->findById($id);
		if (!$aluno) {
			throw new NotFoundException(__('Aluno nao encontrado'));
		}
		$this->set('aluno', $aluno);
		
	}
    
    public function add()
    {
    	if ($this->request->is('post'))
    	{
    		$this->Aluno->create();

    		if ($this->Aluno->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Aluno salvo com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
    		}
    		$this->Session->setFlash(__('Erro ao criar Aluno.'));
    	}
    }
    
    public function edit($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Aluno invalido'));
    	}
    
    	$aluno = $this->Aluno->findById($id);
    	if (!$aluno) {
    		throw new NotFoundException(__('Aluno nao encontrado'));
    	}
    
    	if ($this->request->is(array('aluno', 'put'))) {
    		$this->Aluno->id = $id;
    		if ($this->Aluno->saveAll($this->request->data)) {		
    			$this->Session->setFlash(__('Aluno atualizado com sucesso.'), "flash_notification");
    			return $this->redirect(array('action' => 'index'));
	
    		}
    		$this->Session->setFlash(__('Erro ao atualizar dados.'));
    	}
    
    	if (!$this->request->data) {
    		$this->request->data = $aluno;
    	}
    }
    
    
    
    
    public function delete($id) {
    	if ($this->request->is('get'))
    	{
    		throw new MethodNotAllowedException();
    	}

    	$this->Aluno->AlunoProfessor->query("delete from tb_aluno_professor where id_aluno = '$id'");
    	

    		if ($this->Aluno->delete($id))
    		{
    		
    			if($this->Aluno->User->delete($id))
    			{
    				$this->Session->setFlash(__('Aluno excluido com sucesso.'), "flash_notification");
    				return $this->redirect(array('action' => 'index'));
    			}
    		
    		}

    	
    }
}

?>